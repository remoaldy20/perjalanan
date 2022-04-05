<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('username','password'))){
            return redirect('/dashboard');
        }

        return redirect('/login');
    }

    public function register()

    
    {
        return view('auth.register');
    }

    public function postregister(Request $request)
    {
        $this->validate($request, [
            'password'=>'nullable|required_with:password_confirmation|string|confirmed'
        ]);

        $password = $request->password;
        $store = [
            'nik'=> $request->nik,
            'nama'=> $request->nama,
            'no_telp'=> $request->no_telp,
            'email'=> $request->email,
            'username'=> $request->username,
            'role' => 'user',
            'alamat'=> $request->alamat,
            'password'=> Hash::make($password),
            'remember_token'=> Str::random(32)
        ];
        

        User::create($store);

        return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    
}
 
    