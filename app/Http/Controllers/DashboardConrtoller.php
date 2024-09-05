<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardConrtoller extends Controller
{
    // public function show(){
    //     $data ['produk']=Produk::all();
    //     $data['user'] = User::orderby('name', 'desc')->get();
    //     $data['produk'] = Produk::orderBy('nama', 'asc')->get();
    //     $data['categorie'] = Categorie::all();
    //     $data['pengguna'] = Auth::user()->name;
    //     $data['total'] = $data['produk']->count();
    //     $data['pengguna'] = Auth::user()->name;

    //     return view('dashboard',$data);
    // }



    // public function best(){
    //     $data['user'] = User::orderby('name', 'desc')->get();
    //     return view('best',$data);
    // }
}
