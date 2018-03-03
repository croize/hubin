<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Perusahaan;

class PerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth');
         $this->middleware('level:2');
     }

    public function index(Request $request)
    {
        $query = $request->get('search');
        $as = DB::table('company')->where('name_company','LIKE', '%'. $query . '%')->paginate(10);
        return view('perusahaan.index')->with('company', $as)->with('search', $query);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perusahaan.create');
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
        'name_company' => 'required',
        'description' => 'required',
        'address' => 'required',
        'contact' => 'required',
        'student' => 'required|integer',
      ]);

      $sa = new Perusahaan();
      $sa->name_company = $request->name_company;
      $sa->description = $request->description;
      $sa->address = $request->address;
      $sa->contact = $request->contact;
      $sa->student = $request->student;
      $sa->save();

      return redirect('admin/company')->with('message', 'Data perusahaan berhasil di tambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sa = Perusahaan::find($id);
        return view('perusahaan.view')->with('view',$sa);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $sa = Perusahaan::find($id);
      return view('perusahaan.edit')->with('view',$sa);
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
      $this->validate($request,[
        'name_company' => 'required',
        'description' => 'required',
        'address' => 'required',
        'contact' => 'required',
        'student' => 'required|integer',
      ]);

      $sa = Perusahaan::find($id);
      $sa->name_company = $request->name_company;
      $sa->description = $request->description;
      $sa->address = $request->address;
      $sa->contact = $request->contact;
      $sa->student = $request->student;

      $sa->save();

      return redirect('admin/company')->with('message', 'Data perusahaan berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sa = Perusahaan::find($id);
        $sa->delete();
        return redirect('admin/company')->with('message', 'Data perusahaan berhasil di hapus');
    }
}
