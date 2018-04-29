<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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
      if (Auth::user()->id == $id) {
        $fn = User::find(Auth::user()->id);
        return view('account.index',compact('fn'));
      }else {
        return redirect('admin');
      }

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
        if ($request->password != NULL) {
          $this->validate($request,[
            'password' => 'required',
          ]);

          $fn = User::find($id);
          $fn->password = bcrypt($request->password);
          $fn->save();
          return redirect('admin/account/'.Auth::user()->id.'/edit')->with('message', 'Data has been updated.');
        }elseif ($request->name != NULL) {
          $this->validate($request,[
            'name' => 'required',
            'contact_user' => 'required',
          ]);

          $fn = User::find($id);
          $fn->name = $request->name;
          $fn->contact_user = $request->contact_user;
          $fn->save();
          return redirect('admin/account/'.Auth::user()->id.'/edit')->with('message', 'Data has been updated.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
