<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pendaftaran;
use App\Perusahaan;
use App\User;
use Auth;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth');
     }

    public function index()
    {
      if (Auth::user()->akses == 0) {
        $cu = DB::table('requestpkl')->where('user_id', Auth::user()->id);
        return view('joincompany.requestpkl')->with('as',$cu);
      }elseif(Auth::user()->akses == 1){
        $userid = Auth::user()->id;
        $com = Perusahaan::all();
        $daf = Pendaftaran::all();
        $user = User::all();
        $cu = DB::table('join_company')->where('user_id',$userid)->value('id');
        $cob = DB::table('join_company')->where('user_id',$userid)->value('company_id');
        return view('joincompany.index')->with('cit',$cu)->with('pen',$daf)->with('lala',$com)->with('users',$user)->with('ge',$cob);
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,[
        'company_id' => 'required',
        'user_id' => 'required',
      ]);

      $sa = new Pendaftaran();
      $sa->company_id = $request->company_id;
      $sa->user_id = $request->user_id;
      $sa->save();

      $yu = Perusahaan::find($request->company_id);
      $as = $yu->student - 1;
      $yu->student = $as;
      $yu->save();

      return redirect('join');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

      $userid = Auth::user()->id;
      $cob = DB::table('join_company')->where('user_id',$userid)->value('company_id');
      $yu = Perusahaan::find($cob);
      $as = $yu->student + 1;
      $yu->student = $as;
      $yu->save();

      $as = Pendaftaran::find($id);
      $as->delete();

      return redirect('join');
    }
}
