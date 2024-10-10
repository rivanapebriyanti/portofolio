<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BedStore</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark fixed-top" arial-label="Furni navigation bar">

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

    <div class="hero mt-5 ">
        <div class="container mt-5">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Modern Interior <span class="d-block">Design Studio</span></h1>
                        <p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>
                        {{-- <p>
                            <a href="#" class="btn btn-secondary me-2 text-white">Shop Now</a>
                            <a href="#" class="btn btn-outline-dark">Explore</a>
                        </p> --}}
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hero-img-wrap">
                        <img src="{{ asset('storage/gambar/best (2).png') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <!-- Start Product Section -->
    {{-- <div class="product-section" style="margin-top: 10%">
        <div class="container">
            <div class="row">
                <!-- Start Column 2 -->
                @foreach ($produk as $item)
                <div class="col-12 col-md-6 col-lg-3 mb-4">
                    <a class="product-item" href="cart.html">
                        <img src="{{ asset('storage/gambar/'.$item->gambar) }}" class="img-fluid product-thumbnail">
                        <strong class="product-title mt-2">{{ $item->nama }}</strong>
                        <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, repellendus!</p>
                        <strong class="product-price">Rp.{{ $item->harga }}</strong>
                        <div class="mt-2">
                            <a href="/detail" class="btn btn-primary me-2 text-white">Detail</a>
                            <a href="" class="btn btn-secondary text-white">Check Out</a>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div> --}}

 {{-- <div class="product-section" style="margin-top: 10%">
        <div class="container">
            <div class="card-shadow">
                <div class="row">
                    <!-- Start Column 2 -->
                    @foreach ($produk as $item)
                    <div class="col-12 col-md-6 col-lg-3 mb-4">
                        <a class="product-item" href="cart.html">
                            <div class="product-image-wrap">
                                <img src="{{ asset('storage/gambar/'.$item->gambar) }}" class=" img-fluid product-thumbnail">
                            </div>
                            <strong class="product-title mt-2">{{ $item->nama }}</strong>
                            <p class="product-description text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, repellendus!</p>
                            <strong class="product-price">Rp.{{ $item->harga }}</strong>
                                <a href="/detail" class="btn btn-primary me-2 text-white">Detail</a>
                                <a href="" class="btn btn-second text-white">Check Out</a>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div> 
     --}}
<style>
    .product-image-wrap {
    width: 100%;
    height: 300px; /* Atur tinggi tetap untuk semua gambar */
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
}

.product-thumbnail {
    width: 100%;
    height:100%;
    object-fit: cover; /* Menjaga agar gambar tetap proporsional tanpa terpotong aneh */
}

</style>
     <div class="product-section" style="margin-top: 3%">
        <div class="container">
            <div class="card-shadow ">
                <div class="row">
                    <h1 class="text-center text-dark">PRODUK</h1>
                    <!-- Start Column 2 -->
                    @foreach ($produk as $item)
                    <div class="col-12 col-md-6 col-lg-3 mb-4">
                        <a class="product-item" href="cart.html">
                            <div class="product-image-wrap">
                                <img src="{{ asset('storage/gambar/'.$item->gambar) }}" class="product-thumbnail">
                            </div>
                            <strong class="product-title ">{{ $item->nama }}</strong>
                            <p class="product-description text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, repellendus!</p>
                            <strong class="product-price">Rp. {{ number_format($item->harga, 0, ',', '.') }}</strong>
                            <a href="/detail/{{ $item->id }}" class="btn btn-primary me-2 text-white">Detail</a>
                            <a href="/transaksi/{{ $item->id }}" class="btn btn-second text-white">Check Out</a>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
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

    <!-- End Product Section -->

</body>
</html>
