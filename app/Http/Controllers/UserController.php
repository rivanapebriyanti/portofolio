<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Level;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function profile(){
        return view('profile');
    }

    public function show(){
       $data['user'] = User::all();
       $data['produk'] = Produk::all();

       $data['total'] = $data['produk']->count();
       $data['pengguna'] = Auth::user()->name;

       return view('user', $data);
    }
    
    public function create()
    {
        $data['user'] = User::all();
        $data['pengguna'] = Auth::user()->name;
        $data['level']=Level::all();
        return view('user_create',$data);
    }

    public function add(Request $request)
    {
        $data['user'] = User::all();
        // $validasi = $request->validate([
        //     // 'name' => ['required'],
        //     // 'email' => ['required'],
        //     // 'password' => ['required'],
        //     // 'levels_id'=>'required',
        //     // 'foto' => 'image'
        // ]);

        $filename='';
        if ($request->file('gambar')) {
            # code...
            $ext = $request->file('gambar')->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $request->file('gambar')->storeAs('gambar',$filename);
        }

        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'levels_id'=>$request->levels_id,
            'foto'=> $filename
        ]);

        if ($user) {
            Session::flash('pesan', 'Data berhasil disimpan');
        } else {
            Session::flash('pesan', 'Data gagal disimpan');
        }

        return redirect('user');
    }

    public function delete(Request $request){
        $hapus = User::find($request->id); 
        Storage::delete('gambar/'.$hapus->gambar);
        $hapus->delete();
        return redirect('/user');
    }

    public function search(Request $request){
        $data['user']=User::where('name', 'LIKE', '%'.$request->cari.'%')
        ->orWhere('email', 'LIKE','%'.$request->cari.'%')
        ->orWhere('alamat', 'LIKE','%'.$request->cari.'%')
        ->orWhere('levels_id', 'LIKE','%'.$request->cari.'%')->get();

        $data['pengguna']=Auth::user()->name;
        $data['total']=$data['user']->count();

        return view('user', $data);
    }

    public function edit(Request $request){
        $data['level']=Level::all();        
        $data['user'] = User::all();
        $data['user'] = User::find($request->id);
        $data['pengguna'] = Auth::user()->name;
        return view('user-update', $data);
    }

    public function update(Request $request, $id){
        $data['user'] = User::all();
        $data['level']=Level::all();        
        $data['pengguna'] = Auth::user()->name;

        // $validasi = $request->validate([
        //     'name' => ['required'],
        //     'email' => ['required'],
        //     // 'password' => ['required'],
        //     'levels_id'=>'required',
        //     'foto' => 'image'
        // ]);

        $update = User::where('id', $id)->first();
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
        $update = User::where('id', $id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            // 'password'=>$request->password,
            'levels_id'=>$request->levels_id,
            'foto'=> $filename
        ]);
        return redirect('user');

        }else {
            # code...
            $update = User::where('id', $id)->update([
                'name'=>$request->name,
                'email'=>$request->email,
                // 'password'=>$request->password,
                'levels_id'=>$request->levels_id,
            ]);
        }

        if($update) {
            Session::flash('pesan','Data berhasil diubah');
        }else{
            Session::flash('pesan','Data gagal diubah');
        }
        return redirect('user');

    }

}