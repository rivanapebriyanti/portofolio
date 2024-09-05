<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class CategorieController extends Controller
{

    // public function index(){
    //     $data['categorie'] = Categorie::all();
    //     return view('home', $data);
    // }

    public function show(){
        $data['categorie']=Categorie::all();
        $data['categorie'] = Categorie::orderBy('nama_categorie', 'asc')->get();
        // $data['produk'] = Produk::all();


        $data['total'] = $data['categorie']->count();
        $data['pengguna'] = Auth::user()->name;
        return view('/categorie', $data);
    }

    // public function index(){
    //     return view ('home');
    // }
    // //
    // public function show()
    // {
    //      $data['categorie'] = Categorie::all();
    //      $data['pengguna'] = Auth::user()->name;
    //     $data['total'] = $data['produk']->count();

    //     $data['produk'] = Produk::orderBy('name', 'asc')->get();
    //     return view('produk', $data);
    // }

//     public function index(){
//         $categories = Categorie::all();
//         return view('home', compact('categories'));
// ;    }

    // public function produk(){
    //     $data['produk'] = Produk::all();
    //     $data['total'] = $data['produk']->count();
    //     $data['categorie'] = Categorie::all();

    //     $data['pengguna'] = Auth::user()->name;
    //     // return view('home', $data);
    //     return view('produk', $data);
    // }

    public function create(){
        $data['categorie'] = Categorie::all();
        $data['categorie']=Categorie::all();        
        $data['pengguna'] = Auth::user()->name;
        return view('categorie-create', $data);
    }
    public function add(Request $request){
        $data['categorie'] = Categorie::all();
        
        $categorie = Categorie::create([
            'nama_categorie' => $request->nama,
        ]);

        if ($categorie) {
            Session::flash('pesan', 'Data berhasil disimpan');
        } else {
            Session::flash('pesan', 'Data gagal disimpan');
        }

        return redirect('/categorie');
    }

    public function delete(Request $request){
        $hapus = Categorie::find($request->id);
        $hapus->delete();
        return redirect('categorie');
    }

    public function edit(Request $request){
        $data['categorie']=Categorie::all();        
        $data['produk'] = Categorie::find($request->id);
        $data['categorie'] = Categorie::find($request->id);
        $data['pengguna'] = Auth::user()->name;
        return view('categorie-update', $data);
    }

    public function update(Request $request, $id){
        $data['categorie'] = Categorie::find($request->id);      
        $data['pengguna'] = Auth::user()->name;

        // $update = Categorie::where('categories_id', $id)->first();
        
        $update = Categorie::where('id',$request->id)->update([
            'nama_categorie' => $request->nama_categorie,
        ]);
        return redirect('categorie');

        if($update) {
            Session::flash('pesan','Data berhasil diubah');
        }else{
            Session::flash('pesan','Data gagal diubah');
        }
        return redirect('categorie');

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
        $data['categorie']=Categorie::where('nama_categorie', 'LIKE', '%'.$request->cari.'%')->get();
        // ->orWhere('categories_id', 'LIKE','%'.$request->cari.'%')->get();

        $data['total']=$data['categorie']->count();
        $data['pengguna']=Auth::user()->name;

        return view('categorie', $data);
    }

}




