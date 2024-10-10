<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TransaksiController extends Controller
{
    public function transaksi(Request $request){

        $data['produk']=Produk::find($request->id); 
        // $data['transaksi'] = Transaksi::find($request->id);

        // if (!$data['transaksi']) {
        //     return redirect()->back()->with('error', 'Transaksi tidak ditemukan');
        // }
        
        $data['harga'] = $data['produk']->harga;
        $data['ongkir'] = 50000; 
        $data['total'] = $data['harga'] + $data['ongkir'];
        $data['nama _penerima'] = Auth::user(); 
        return view('transaksi', $data);
    }

    public function buy(Request $request, $id_produk){
        $produk = Produk::findOrFail($id_produk);
        $harga = $produk->harga;
        $stok=$produk->stok;
        $ongkir = 50000; 
        $total = $harga + $ongkir;
        $data = Auth::user();
        $nama_penerima = $data->name;
        if ($produk->stok < 1) {
            return redirect()->back()->with('error', 'Stok produk tidak mencukupi');
        }
        
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
            $transaksi = Transaksi::where('id_produk',$request->id)->first();
        // $transaksi = Transaksi::findOrFail($request->id);

        return redirect('detail-transaksi/'.$transaksi->id);
        // return redirect()->route('detail.transaksi', ['id' => $transaksi->id]);

    }

    public function detail_transaksi(Request $request){
        $data['transaksi'] = Transaksi::find($request->id);
        $data['harga'] = $data['transaksi']->harga;
        $data['ongkir'] = 50000; 
        $data['total'] = $data['harga'] + $data['ongkir'];
        $data['nama_penerima'] = Auth::user(); 

        return view('detail-transaksi',$data);
    }
    public function delete(Request $request){
        $hapus = Transaksi::find($request->id);
        Storage::delete('gambar/'.$hapus->gambar);
        $hapus->delete();
        return redirect('admin-transaksi');
    }
}
