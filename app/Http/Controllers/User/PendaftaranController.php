<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pendaftaran;
use App\Perusahaan;
use App\User;
use App\Infopkl;
use Illuminate\Support\Carbon;
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

    public function index(Request $request)
    {
      if (Auth::user()->akses == 0) {
        $cu = DB::table('request_pkl')->where('user_id','=',Auth::user()->id)->value('user_id');
        return view('joincompany.requestpkl')->with('as',$cu);
      }elseif(Auth::user()->akses == 1){
        $userid = Auth::user()->id;
        $query = $request->get('q');
        if ($query == NULL) {
          $com = DB::table('company')
                ->where('jurusan','=',Auth::user()->jurusan)
                ->get();
        }else {
          $com = DB::table('company')
                ->where('name_company','LIKE', '%'. $query . '%')
                ->get();
        }

        $daf = Pendaftaran::all();
        $user = User::all();
        $cu = DB::table('join_company')->where('user_id',$userid)->value('id');
        $cob = DB::table('join_company')->where('user_id',$userid)->value('company_id');
        $infodate = Infopkl::where('id',1)->value('date');
        $infohours = Infopkl::where('id',1)->value('jam');

        return view('joincompany.index')->with('cit',$cu)->with('pen',$daf)->with('lala',$com)->with('users',$user)->with('ge',$cob)->with('date',$infodate)->with('hours',$infohours);
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
      Carbon::setlocale(LC_TIME, 'id');
      $now = Carbon::now();
      $date = Infopkl::where('id',1)->value('date');
      if ($now >= $date) {
        return redirect('user/join')->with('message', 'Waktu pengajuan tempat PRAKERIN sudah habis!');
      }else {
        $this->validate($request,[
          'company_id' => 'required',
        ]);

        $check = Perusahaan::find($request->company_id)->value('student');
        if ($check == 0) {
          return redirect('user/join')->with('message', 'Kuota siswa sudah habis');
        }else{
          $yu = Perusahaan::find($request->company_id);
          $as = $yu->student - 1;
          $yu->student = $as;
          $yu->save();
        }

        $sa = new Pendaftaran();
        $sa->company_id = $request->company_id;
        $sa->user_id = Auth::user()->id;
        $sa->save();

        return redirect('user/join');
      }
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
      Carbon::setlocale(LC_TIME, 'id');
      $now = Carbon::now();
      $date = Infopkl::where('id',1)->value('date');
      if ($now >= $date) {
        return view('404');
      }else {
      $userid = Auth::user()->id;
      $cob = DB::table('join_company')->where('user_id',$userid)->value('company_id');
      $yu = Perusahaan::find($cob);
      $as = $yu->student + 1;
      $yu->student = $as;
      $yu->save();

      $as = Pendaftaran::find($id);
      $as->delete();

      return redirect('user/join');
      }
    }
}
