<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'kelas' => 'required',
            'nis' => 'required|integer',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
      $kelas = $data['kelas'];
      if ($kelas == 'XIII-AK 1' || $kelas == 'XIII-AK 2' || $kelas == 'XIII-AK 3' || $kelas == 'XIII-AK 4' || $kelas == 'XIII-AK 5' || $kelas == 'XIII-AK 6') {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'class' => $data['kelas'],
            'nis' => $data['nis'],
            'jurusan' => 1,
        ]);
      }elseif ($kelas == 'XII-RPL 1' || $kelas == 'XII-RPL 2') {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'class' => $data['kelas'],
            'nis' => $data['nis'],
            'jurusan' => 2,
        ]);
      }elseif ($kelas == 'XII-TKJ 1' || $kelas == 'XII-TKJ 2' || $kelas == 'XII-TKJ 3') {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'class' => $data['kelas'],
            'nis' => $data['nis'],
            'jurusan' => 3,
        ]);
      }

    }
}
