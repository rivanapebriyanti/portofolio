{{-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Transaksi</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
    
    <div class="container mt-5">
        <h1 class="mb-4">Detail Transaksi</h1>
    
        <div class="card">
            <div class="card-header">
                Informasi Transaksi
            </div>
            <div class="card-body">
                <h5 class="card-title">Nama Produk: {{ $transaksi->nama }}</h5>
                <p class="card-text">Jumlah: {{ $transaksi->jumlah }}</p>
                <p class="card-text">Harga Satuan: Rp. {{ number_format($transaksi->harga, 0, ',', '.') }}</p>
                <p class="card-text">Total Harga: Rp. {{ number_format($transaksi->total, 0, ',', '.') }}</p>
                <p class="card-text">Alamat Pengiriman: {{ $transaksi->alamat }}</p>
                <p class="card-text">Metode Pembayaran: {{ $transaksi->metode_pembayaran }}</p>
                <p class="card-text">Catatan: {{ $transaksi->note ?? 'Tidak ada catatan' }}</p>
                
                <div class="mt-3">
                    <h5>Foto Produk:</h5>
                    <img src="{{ asset('storage/gambar/'. $transaksi->foto) }}" alt="Foto Produk" class="img-fluid" style="max-width: 300px;">
                </div>
            </div>
        </div>
    
        <a href="/dashboard" class="btn btn-primary mt-4">Kembali</a>
    </div>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Transaksi</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <style>
        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: none;
            border-radius: 10px;
        }
        .card-header {
            background-color: #f8f9fa;
            font-weight: bold;
        }
        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .product-img {
            max-width: 400px;
            height: auto;
            border-radius: 10px;
        }
        .order-summary th, .order-summary td {
            font-size: 1rem;
            padding: 10px;
        }
        .order-summary th {
            text-align: left;
            background-color: #f8f9fa;
            font-weight: bold;
        }
        .order-summary td {
            text-align: right;
        }
        .btn-back {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .btn-back:hover {
            background-color: #0056b3;
            color: white;
        }
    </style>
</head>
<body>
    <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark fixed-top " arial-label="Furni navigation bar">

        <div class="container">
            <a class="navbar-brand" href="index.html">BedStore<span>.</span></a>
    
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="/dashboard">Home</a>
                    </li>
                    <ul class="custom-navbar-cta navbar-nav mb-3 mb-md-1 ms-5">
                        <li><a class="nav-link" href="/kontak">Kontak</a></li>
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

    <div class="container mt-5" style="margin-top: 20%">
        <h1 class="mb-4 text-center">Detail Transaksi</h1>

        <div class="row">
            <!-- Bagian gambar produk -->
            <div class="col-md-6">
                <div class="card">
                    <img src="{{ asset('storage/gambar/'.$transaksi->produk->gambar) }}" alt="Foto Produk" class="card-img-top product-img">
                </div>
            </div>

            <!-- Bagian informasi transaksi -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Informasi Transaksi
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Nama Produk: {{ $transaksi->produk->nama }}</h5>
                        <p class="card-text">Jumlah: {{ $transaksi->jumlah }} unit</p>
                        <p class="card-text">Harga Satuan: Rp. {{ number_format($transaksi->harga, 0, ',', '.') }}</p>
                        <p class="card-text">Total Harga: <strong>Rp. {{ number_format($transaksi->total, 0, ',', '.') }}</strong></p>
                        <p class="card-text">Alamat Pengiriman: {{ $transaksi->alamat }}</p>
                        <p class="card-text">Metode Pembayaran: {{ $transaksi->metode_pembayaran }}</p>
                        <p class="card-text">Catatan: {{ $transaksi->note ?? 'Tidak ada catatan' }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Rincian pesanan -->
        <div class="card mt-5">
            <div class="card-header">
                Ringkasan Pesanan
            </div>
            <div class="card-body">
                <table class="table order-summary">
                    <tbody>
                        <tr>
                            <th>Produk</th>
                            <td>{{ $transaksi->produk->nama }}</td>
                        </tr>
                        <tr>
                            <th>Harga Satuan</th>
                            <td>Rp. {{ number_format($transaksi->harga, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <th>Jumlah</th>
                            <td>1</td>
                        </tr>
                        <tr>
                            <th>Total Harga</th>
                            <td>Rp. {{ number_format($transaksi->total, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <th>Ongkir</th>
                            <td>Rp. 50.000,00</td> <!-- Tambahkan ongkir jika diperlukan -->
                        </tr>
                        <tr>
                            <th>Total Pembayaran</th>
                            <td><strong>Rp. {{ number_format($transaksi->total + 50000, 0, ',', '.') }}</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Tombol kembali -->
        <div class="mt-4 text-center">
            <a href="/dashboard" class="btn-back">Kembali ke Dashboard</a>
        </div>
    </div>
    <footer class="footer-section">
        <div class="container relative">

            <div class="border-top copyright">
                <div class="row pt-4">
                    <div class="col-lg-6">
                        <p class="mb-2 text-center text-lg-start">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a> Distributed By <a hreff="https://themewagon.com">Rivana Pebriyanti</a></p>
                    </div>

                    <div class="col-lg-6 text-center text-lg-end">
                        <ul class="list-unstyled d-inline-flex ms-auto">
                            <li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </footer>

    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
