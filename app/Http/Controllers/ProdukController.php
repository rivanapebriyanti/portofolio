<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produk;
use App\Models\User;
// use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{

    public function dashboard(){
        $data['produk'] = Produk::orderBy('nama', 'asc')->get();
        $data['categorie'] = Categorie::all();
        $data['total'] = $data['produk']->count();
        $data['pengguna'] = Auth::user()->name;
        return view('dashboard', $data);
    }

    public function show(){
        $data['produk'] = Produk::orderBy('nama', 'asc')->get();
        // $data['produk'] = Produk::all();
        $data['categorie'] = Categorie::all();


        $data['total'] = $data['produk']->count();
        $data['pengguna'] = Auth::user()->name;
        return view('home', $data);
    }

    // public function index(){
    //     return view ('home');
    // }
    // //
    public function detail(Request $request)
    {
        $data['produk'] = Produk::all();
        // $data['produk'] = Produk::orderBy('nama', 'asc')->get();
        $data['produk'] = Produk::find($request->id);
        // dd($data['produk']);
        return view('detail', $data);
    }

//     public function index(){
//         $categories = Categorie::all();
//         return view('home', compact('categories'));
// ;    }

    public function produk(){
        $data['produk'] = Produk::all();
        $data['total'] = $data['produk']->count();
        $data['categorie'] = Categorie::all();

        $data['pengguna'] = Auth::user()->name;
        // return view('home', $data);
        return view('produk', $data);
    }

    public function create(){
        $data['produk'] = Produk::all();
        $data['categorie']=Categorie::all();        
        $data['pengguna'] = Auth::user()->name;
        return view('create', $data);
    }
    public function add(Request $request){
        $data['produk'] = Produk::all();
        $validasi = $request->validate([
            'nama' => ['required','min:3'],
            'jumlah' => ['required'],
            'harga' => ['required'],
            'categories_id' => 'required',
            'gambar' => 'image'
        ]);

        $filename='';
        if ($request->file('gambar')) {
            # code...
            $ext = $request->file('gambar')->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $request->file('gambar')->storeAs('gambar',$filename);
        }

        $produk = Produk::create([
            'nama' => $request->nama,
            // 'kategori' => $request->kategori,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'categories_id' => $request->categories_id,
            'gambar' => $filename
        ]);

        if ($produk) {
            Session::flash('pesan', 'Data berhasil disimpan');
        } else {
            Session::flash('pesan', 'Data gagal disimpan');
        }

        return redirect('produk');
    }

    public function delete(Request $request){
        $hapus = Produk::find($request->id);
        Storage::delete('gambar/'.$hapus->gambar);
        $hapus->delete();
        return redirect('produk');
    }

    public function edit(Request $request){
        $data['categorie']=Categorie::all();        
        $data['produk'] = Produk::all();
        $data['produk'] = Produk::find($request->id);
        $data['user'] = User::find($request->id);
        $data['pengguna'] = Auth::user()->name;
        return view('update', $data);
    }

    public function update(Request $request, $id){
        $data['categorie']=Categorie::all();        
        $data['produk'] = Produk::all();
        $data['pengguna'] = Auth::user()->name;

        $validasi = $request->validate([
            'nama' => ['required','min:3'],
            // 'kategori' => ['required'],
            'jumlah' => ['required'],
            'harga' => ['required'],
            'categories_id' => 'required',
            'gambar' => 'image'
        ]);

        $update = Produk::where('id', $id)->first();
        if ($request->gambar) {
            # code...
        Storage::delete('/gambar'.$update->gambar);

        $filename='';
        if ($request->file('gambar')) {
            # code...
            $ext = $request->file('gambar')->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $request->file('gambar')->storeAs('gambar',$filename);
        }
        $update = Produk::where('id', $id)->update([
            'nama' => $request->nama,
            // 'kategori' => $request->kategori,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'categories_id' => $request->categories_id,
            'gambar' => $filename
        ]);
        return redirect('produk');

        }else {
            # code...
            $update = Produk::where('id', $id)->update([
            'nama' => $request->nama,
            // 'kategori' => $request->kategori,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'categories_id' => $request->categories_id,
            ]);
        }

        if($update) {
            Session::flash('pesan','Data berhasil diubah');
        }else{
            Session::flash('pesan','Data gagal diubah');
        }
        return redirect('produk');

    }

    // public function edit(Request $request)
    // {
    //     $data['categorie']=Categorie::all();   
    //     $data['produk'] = Produk::find($request->id);
    //     $data['pengguna'] = Auth::user()->name;
    //     $data['user'] = User::find($request->id);
    //     return view('update', $data);

    // }

    // public function update(Request $request)
    // {
    //    $update = User::where('id', $request->id)->update([
    //         'nama' => $request->nama,
    //         // 'kategori' => $request->kategori,
    //         'jumlah' => $request->jumlah,
    //         'harga' => $request->harga,
    //         'categories_id' => $request->categories_id,
    //         // 'gambar' => $filename
    //     ]);
    //     if($update) {
    //         Session::flash('pesan','Data berhasil diubah');
    //     }else{
    //         Session::flash('pesan','Data gagal diubah');
    //     }

    //     return redirect('produk');
    // }
    
    public function search(Request $request){
        $data['produk']=Produk::where('nama', 'LIKE', '%'.$request->cari.'%')
        ->orWhere('categories_id', 'LIKE','%'.$request->cari.'%')
        ->orWhere('jumlah', 'LIKE','%'.$request->cari.'%')
        ->orWhere('harga', 'LIKE','%'.$request->cari.'%')->get();

        $data['total']=$data['produk']->count();
        $data['pengguna']=Auth::user()->name;

        return view('produk', $data);
    }

}


