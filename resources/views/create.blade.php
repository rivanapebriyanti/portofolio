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
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header text-center">
                        Form Produk
                    </div>
                    <div class="card-body">
                        <form action="/home/create" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group pt-2">
                                <label for="productName">Nama Produk</label>
                                <input type="text" name="nama" class="form-control" id="productName" placeholder="Masukkan nama produk" >
                            </div>
                            {{-- <div class="form-group pt-2">
                                <label for="category">Kategori</label>
                                <input type="text" name="kategori" class="form-control" id="category" placeholder="Masukkan kategori produk">
                            </div> --}}
                            <div class="form-group pt-2">
                                <label for="price">Harga</label>
                                <input type="text" name="harga" class="form-control" id="price" placeholder="Masukkan harga produk">
                            </div>
                            <tr class="mb-3">
                                <td class="form-label">Kategori</td>
                                <td><select name="categories_id" id="" class="form-select border-dark">
                                    @foreach ($categorie as $item)
                                        <option value="{{$item->id}}">{{$item->nama_categorie}}</option>
                                    @endforeach
                                    </select>
                                </td>
                            </tr>
                            {{-- <div class="form-group pt-2">
                                <label for="quantity">Jumlah</label>
                                <input type="number" name="jumlah" class="form-control" id="quantity" placeholder="Masukkan jumlah produk">
                            </div> --}}
                            <div class="form-group pt-2">
                                <label for="quantity">Stok</label>
                                <input type="number" name="stok" class="form-control" id="quantity" placeholder="Masukkan stok produk">
                            </div>
                            <div class="form-group pt-2">
                                <label for="image">Gambar</label>
                                <input type="file" name="gambar" class="form-control-file" id="image">
                            </div>
                            <input type="submit" class="btn btn-secondary w-100 btn-block mt-5 text-white"></input>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
<script src="bootstrap/js/bootstrap.min.js"></script>