<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class AuthController extends Controller
{


    public function showFormLogin()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }
        return view('login', [
            'title' => 'Login'
        ]);
    }

    public function login(Request $request)
    {

        $data = [
            'email'     => $request->input('email'),
            'password'  => $request->input('password'),
        ];

        Auth::attempt($data);

        if (Auth::check()) {
            return redirect()->route('home');

        } else {
            Session::flash('errors');
            return redirect()->route('login');
        }

    }

    public function showFormRegister()
    {
        return view('register', [
            'title' => 'Register'
        ]);
    }

    public function register(Request $request)
    {
        $rules = [
            'name'                  => 'required|min:3',
            'email'                 => 'required|email|unique:users,email',
            'password'              => 'required|confirmed'
        ];

        $messages = [
            'name.required'         => 'Nama harus diisi',
            'name.min'              => 'Nama minimal 3 karakter',
            'email.required'        => 'Email harus diisi',
            'email.email'           => 'Email salah',
            'email.unique'          => 'Email sudah terdaftar',
            'password.required'     => 'Password harus diisi',
            'password.confirmed'    => 'Password tidak sama dengan konfirmasi password'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        $users = new User;
        $users->name = ($request->name);
        $users->email = ($request->email);
        $users->password = Hash::make($request->password);
        $users->confirmpassword = Hash::make($request->confirmpassword);
        $simpan = $users->save();

        if($simpan){
            Session::flash('success');
            return redirect()->route('login');
        } else {
            Session::flash('errors');
            return redirect()->route('register');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }


}