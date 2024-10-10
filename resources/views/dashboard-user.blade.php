{{-- <!DOCTYPE html>
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


		<!-- Start Hero Section -->
			<div class="hero mt-5">
				<div class="container mt-5">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Modern Interior <span clsas="d-block">Design Studio</span></h1>
								<p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>
								<p><a href="" class="btn btn-secondary me-2 text-white">Shop Now</a><a href="#" class="btn btn-white-outline">Explore</a></p>
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
		<div class="product-section" style="margin-top: 10%">
			<div class="container">
				<div class="row">
                    
                    {{-- <!-- Start Column 1 -->
					<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                        <h2 class="mb-4 section-title">Crafted with excellent material.</h2>
						<p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. </p>
						<p><a href="shop.html" class="btn">Explore</a></p>
					</div> 
					<!-- End Column 1 --> --}}
                    
					<!-- Start Column 2 -->
                    {{-- @foreach ($produk as $item)
					<div class="col-12 col-md-5 col-lg-3 mb-4 mb-md-0">
                        <a class="product-item" href="cart.html">
                            <img src="{{ asset('storage/gambar/'.$item->gambar) }}" class="img-fluid product-thumbnail">
							<strong class="product-title mt-2">{{ $item->nama }}</strong>
							<h3 class="product-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, repellendus!</h3>
							<strong class="product-price">Rp.{{ $item->harga }}</strong>
							<a href="/detail" class="btn btn-primary me-2 text-white mt-2">Detail</a><a href="" class="btn btn-secondary me-2 text-white">Check Out</a>
						</a>
					</div> 
                    @endforeach
				

					
                    
				</div>
			</div>
		</div>
	
       
</body>
</html> --}} --}}

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
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" aria-label="Furni navigation bar">
        <div class="container">
            <a class="navbar-brand" href="index.html">BedStore<span>.</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-person-fill"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logout"><i class="bi bi-box-arrow-right"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Start Hero Section -->
    <div class="hero mt-5">
        <div class="container mt-5">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Modern Interior <span class="d-block">Design Studio</span></h1>
                        <p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>
                        <p>
                            <a href="#" class="btn btn-secondary me-2 text-white">Shop Now</a>
                            <a href="#" class="btn btn-outline-dark">Explore</a>
                        </p>
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
    <div class="product-section" style="margin-top: 10%">
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
                <!-- End Column 2 -->
            </div>
        </div>
    </div>
    <!-- End Product Section -->

</body>
</html>
