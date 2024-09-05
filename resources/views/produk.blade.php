<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>
<body>
    @if (Session::get('pesan'))
    {{ Session::get('pesan') }}
@endif <br>
    <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark fixed-top" arial-label="Furni navigation bar">

        <div class="container">
            <a class="navbar-brand" href="index.html">BedStore<span>.</span></a>
    
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <ul class="custom-navbar-cta navbar-nav mb-3 mb-md-1 ms-5">
                        <li><a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                        </svg></a></li>
                    </ul>
                    <ul class="custom-navbar-cta navbar-nav mb-3 mb-md-1 ms-5">
                        <li><a class="nav-link" href="/logout"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                          </svg></a></li>
                    </ul>
            </div>
        </div>
    </nav>
    
    <div class="container pt-5" style="margin-top: 100px">
        @if (Session::has('pesan'))
            <div class="alert alert-succes">{{ Session::get('pesan') }}</div>
        @endif
        <div class="row">
            <div class="col-md-6">
                <a href="/home/create" class="btn btn-primary">Tambah Data</a><br>
            </div>
            
            <div class="col-md-6">
                <form action="/home" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" name="cari" class="form-control" placeholder="Search">
                        <button class="btn btn-success" type="submit">Go</button>
                      </div>
                </form>
            </div>
        </div>
        Total Data Produk: {{ $total }}
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>NO</th>
                    <th>PRODUK</th>
                    <th>JUMLAH</th>
                    <th>HARGA</th>
                    <th>KATEGORI</th>
                    <th>FOTO</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produk as $key => $item)           
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->jumlah }}</td>
                    <td>Rp.{{ $item->harga }}</td>
                    {{-- <td>{{ $item->categories_id }}</td>  --}}
                    <td>{{ $item->categorie->nama_categorie }}</td> 
                    
                        {{-- <td>{{ $item->categorie }}</td>  --}}
                    {{-- @foreach ($categorie as $key => $item)
                        <td>{{ $item->categorie->nama_categorie }}</td> 
                    @endforeach --}}
                    <td><img src="{{ asset('storage/gambar/'.$item->gambar) }}" alt="" style="width: 50px; height:50px"></td>
                    <td>
                        <a href="/home/delete/{{ $item->id }}" onclick="return window.confirm('Yakin hapus data ini?')" class="btn btn-danger">Hapus</a>
                        <a href="/home/update/{{ $item->id }}" class="btn btn-info">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div> 
</body>
</html>

