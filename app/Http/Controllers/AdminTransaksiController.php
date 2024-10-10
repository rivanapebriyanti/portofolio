<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminTransaksiController extends Controller
{

    public function show(Request $request){
        $data['transaksi'] = Transaksi::all();
        // $data['harga'] = $data['transaksi']->harga;
        // $data['ongkir'] = 50000; 
        // $data['total'] = $data['harga'] + $data['ongkir'];
        // $data['total_transaksi'] = $data['transaksi']->count();
        // $data['nama_penerima'] = Auth::user()->name;

        

        return view('/admin-transaksi', $data);
    } 
    public function beli(Request $request, $id_produk){
        $produk = Produk::findOrFail($id_produk);
        $transaksi = Produk::find($request->id);
        $harga = $transaksi->harga;
        $ongkir = 50000; 
        $total = $harga + $ongkir;
        $data = Auth::user();
        $nama_penerima = $data->name;


        Transaksi::create([
            'id_produk' => $id_produk,
            'id_user' => Auth::id(),
            'harga'=> $harga,
            'alamat' => $request->alamat,
            'nama_penerima' => $nama_penerima,
            'metode_pembayaran' => $request->metode_pembayaran,
            'note' => $request->note,
            'total' => $total 
        ]);
        return redirect('/admin-transaksi');
    }

    // public function delete(Request $request){
    //     $hapus = Produk::find($request->id);
    //     Storage::delete('gambar/'.$hapus->gambar);
    //     $hapus->delete();
    //     return redirect('produk');
    // }

    // public function search(Request $request){
    //     $data['produk']=Produk::where('nama', 'LIKE', '%'.$request->cari.'%')
    //     ->orWhere('categories_id', 'LIKE','%'.$request->cari.'%')
    //     ->orWhere('stok', 'LIKE','%'.$request->cari.'%')
    //     ->orWhere('harga', 'LIKE','%'.$request->cari.'%')->get();

    //     $data['total']=$data['produk']->count();
    //     $data['pengguna']=Auth::user()->name;

    //     return view('produk', $data);
    // }
    
    // public function detail_admin(Request $request){
    //     $data['transaksi'] = Produk::find($request->id);
    //     $data['harga'] = $data['transaksi']->harga;
    //     $data['ongkir'] = 50000; 
    //     $data['total'] = $data['harga'] + $data['ongkir'];
    //     $data['nama_penerima'] = Auth::user(); 

    //     return view('admin-transaksi',$data);
    // }

}
