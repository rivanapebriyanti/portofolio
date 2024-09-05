<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    public function transaksi(Request $request){
        $data['transaksi'] = Produk::find($request->id);
        return view('transaksi', $data);
    }

    public function buy(Request $request, $id_produk){
        $produk = Produk::findOrFail($id_produk);
        
        Transaksi::create([
            'id_produk' => $id_produk,
            'id_user' => Auth::id(),
            'alamat' => $request->alamat,
            'nama_penerima' => $request->nama_penerima,
            'metode_pembayaran' => $request->metode_pembayaran,
            'note' => $request->note,
        ]);
        return redirect('/home');
    }
}
