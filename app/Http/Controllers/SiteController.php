<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function view_data()
    {
        $judul = 'Data Prodi';
        $arr = ['IF','IT','SE','DS'];

        return view('view_data',[
            'title' => $judul,
            'data'=> $arr,
        ]);
    }

    public function autentikasi(Request $request)
    {
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            return redirect('/product');
        }
        return redirect('/login')->with('message','Username/Password Salah');
    }   
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}