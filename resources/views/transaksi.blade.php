<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>
<body>
    @if (Session::get('pesan'))
    {{ Session::get('pesan') }}
@endif <br>
<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark  fixed-top" arial-label="Furni navigation bar">

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

    {{-- <div class="container py-5">
        <h1>Transaction Form</h1>
        <form action="/transaksi" method="POST">
            @csrf
            <div class="form-group">
                <label for="product_id">Product ID</label>
                <input type="text" class="form-control" id="product_id" name="product_id" required>
            </div>
            <div class="form-group">
                <label for="total">Total</label>
                <input type="text" class="form-control" id="total" name="total" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="alamat" required>
            </div>
            <div class="form-group">
                <label for="recipient_name">Recipient Name</label>
                <input type="text" class="form-control" id="recipient_name" name="nama_penerima" required>
            </div>
            <div class="form-group">
                <label for="price">Harga</label>
                <input type="text" class="form-control" id="price" name="harga" required>
            </div>
            <div class="form-group">
                <label for="transaction_method">Transaction Method</label>
                <input type="text" class="form-control" id="transaction_method" name="metode_transaksi" required>
            </div>
            <div class="form-group">
                <label for="transaction_method">Metode Transaksi</label>
                <select name="" id="country" class="form-select" required>
                    <option value="">COD</option>
                    <option value="">Dana</option>
                </select>
            </div>
            <div class="form-group">
                <label for="note">Note</label>
                <textarea class="form-control" id="note" name="note" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="{{ asset('js/app.js') }}"></script> --}}

    {{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Form</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-group input, .form-group select, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .order-summary {
            margin-top: 30px;
        }
        .order-summary h2 {
            font-size: 1.5em;
            margin-bottom: 20px;
        }
        .order-summary table {
            width: 100%;
            border-collapse: collapse;
        }
        .order-summary table, .order-summary th, .order-summary td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        .order-summary th {
            background-color: #f8f8f8;
            font-weight: bold;
        }
        .btn-submit {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 1.1em;
            cursor: pointer;
        }
        .btn-submit:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container" style="margin-top: 5%">
        <h1>Billing Details</h1>
        <form action="{{ url('/transactions') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="note">Note</label>
                <textarea id="note" name="note" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="transaction_method">Payment Method</label>
                <select id="transaction_method" name="transaction_method" required>
                    <option value="Bank Syariah Indonesia">Bank Syariah Indonesia</option>
                    <option value="Other Method">Other Method</option>
                </select>
            </div>
            <button type="submit" class="btn-submit">ORDER</button>
        </form>
        <div class="order-summary">
            <h2>Your Order</h2>
            <table>
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Garrick x 6</td>
                        <td>Rp. 513.270,00</td>
                    </tr>
                    <tr>
                        <td>Ronny x 6</td>
                        <td>Rp. 569.622,00</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Subtotal</th>
                        <td>Rp. 1.082.892,00</td>
                    </tr>
                    <tr>
                        <th>Shipping</th>
                        <td>Rp. 10.000,00</td>
                    </tr>
                    <tr>
                        <th>Total</th>
                        <td>Rp. 1.092.892,00</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container " style="margin-top:5%">
        <h1 class="mb-4">Rincian</h1>
        <form action="/transaksi/{{ $produk->id }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="address" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="address" name="alamat" required>
            </div>
            <div class="mb-3">
                <label for="note" class="form-label">Note</label>
                <textarea class="form-control" id="note" name="note" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="transaction_method" class="form-label">Metode Pembayaran</label>
                <select class="form-select" id="transaction_method" name="metode_pembayaran" required>
                    <option value="COD">COD</option>
                    <option value="Dana">Dana</option>
                    <option value="Bca">Bank BCA</option>
                </select>
            </div>
            <button type="submit" class="btn w-100 text-white" style="background-color: #3b5d50">ORDER</button>
        </form>
        <div class="order-summary mt-5">
            <h2 class="mb-4">Pesanan anda</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>{{ $produk->nama }}</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Ongkir</th>
                        <td>Rp. 50.000,00</td>
                    </tr>
                    <tr>
                        <th>Harga</th>
                        <td>Rp.{{$harga}}</td>
                    </tr>
                    <tr>
                        <th>Total</th>
                        <td>Rp.{{$total}}</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <footer class="footer-section ">
        <div class="container relative ">

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>