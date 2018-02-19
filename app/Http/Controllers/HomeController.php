<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if (Auth::user()->level == 1) {
        return view('homeuser');
      }elseif (Auth::user()->level == 2) {
        $company = DB::table('company')->count();
        $users = DB::table('users')->where('level','1')->count();
        return view('home')->with('as',$company)->with('sa',$users);
      }
    }
}
