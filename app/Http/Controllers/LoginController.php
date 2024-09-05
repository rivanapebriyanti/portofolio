<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }
    public function auth(Request $request){
        $validasi = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($validasi)) {
            if (Auth::user()->levels_id == 1) {
                return redirect('/home');
            }else {
                return redirect('/dashboard');
            }
            return redirect('home')->with('pesan', 'Login anda berhasil');
        }
        return redirect()->back()->with('pesan', 'Login anda gagal');
    }

    public function register(){
        $data['level']=Level::all();
        return view('register', $data);
    }
    public function authentikasi(Request $request){
        $validasi = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
            'alamat' => ['required'],
            'no hp' => 'required'
        ]);
        if (Auth::attempt($validasi)) {
            if (Auth::user()->levels_id == 1) {
                return redirect('/home');
            }else {
                return redirect('/dashboard');
            }
            return redirect('home')->with('pesan', 'Login anda berhasil');
        }
        return redirect()->back()->with('pesan', 'Login anda gagal');
    }


    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
