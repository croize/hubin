<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UsersController extends Controller
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
        $users = DB::table('users')->where('level','1')->where('name','LIKE', '%'. $query . '%')->paginate(10);
        return view('users.index')->with('user',$users)->with('search', $query);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
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
          'name' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:users',
          'password' => 'required|string|min:6',
          'contact_user' => 'required',
          'class' => 'required',
          'nis' => 'required|unique:users',
          'jurusan' => 'required',
        ]);

        $store = new User();
        $store->name = $request->name;
        $store->email = $request->email;
        $store->password = bcrypt($request->password);
        $store->contact_user = $request->contact_user;
        $store->class = $request->class;
        $store->nis = $request->nis;
        $store->jurusan = $request->jurusan;
        $store->save();

        return redirect('admin\users')->with('message', 'Data perusahaan berhasil di tambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::find($id);
        return view('users.view')->with('user',$users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $users = User::find($id);
      return view('users.edit')->with('user',$users);
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
        'name' => 'required|string|max:255',
        'contact_user' => 'required',
        'class' => 'required',
        'jurusan' => 'required',
      ]);

      $store = User::find($id);
      $store->name = $request->name;
      $store->contact_user = $request->contact_user;
      $store->class = $request->class;
      $store->jurusan = $request->jurusan;
      $store->save();

      return redirect('admin\users')->with('message', 'Data perusahaan berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteuser = User::find($id);
        $deleteuser->delete();
        return redirect('admin\users')->with('message', 'Data perusahaan berhasil di delete');
    }
}
