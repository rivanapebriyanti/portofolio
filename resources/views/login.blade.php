
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
    @if ($errors->any())
        @foreach ( $errors->all() as $item)
            <ul>
                <li>{{ $item }}</li>
            </ul>
        @endforeach
    @endif

    <div class="container">
        @if (Session::has('pesan'))
            <div class="alert alert-danger">{{ Session::get('pesan') }}</div>
        @endif
        <div class="card shadow" style="width: 100%; height:90vh; margin-top:50px; background-color: #3b5d50;">
            <h2 class="bold text-center text-white" style="margin-top: 80px">BedStore</h2>

            <div class="row " style="margin-bottom: 25%; margin-top:5%; margin-left:90px;">
                <div class="col-md-4 " style="margin-top:60px">
                    <div class="card shadow">
                        <h4 class="bold text-center mt-3">Login Page</h4>
                        <div class="card-body" style="margin-top: -40px">
                            <form action="/auth" method="post">
                                @csrf
                                <div class="form-group mt-5">
                                    <label for="password">Email</label>
                                    <input type="email" name="email" style="border:none; border-bottom:2px solid black; padding:5px 0; width:100%; 
                                    box-sizing:border-box;" onfocus="this.style.outline='none'; this.style.borderBottomColor='#007bff';"
                                    onblur="this.style.borderBottomColor='black'">
                                </div>
                                <div class="form-group mt-1">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" style="border:none; border-bottom:2px solid black; padding:5px 0; width:100%; 
                                    box-sizing:border-box;" onfocus="this.style.outline='none'; this.style.borderBottomColor='#007bff';"
                                    onblur="this.style.borderBottomColor='black'">
                                </div>
                                <button type="submit" class="btn btn-secondary btn-block mt-5  w-100" style="background-color: #3b5d50;">Login</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7" style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8))," style="margin-left: 20px">
                    <h2 class="mb-5 text-white" style="margin-left: 50px; margin-top: 50px"><a href="/">LOGIN / </a><a href="/register"><span class="text-white">REGISTER</span></a></h2>
                    <p class="mb-5 text-white" style="margin-left: 50px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, dolorum, doloribus sunt dicta, officia voluptatibus libero necessitatibus natus impedit quam ullam assumenda? Id atque iste consectetur. Commodi odit ab saepe!</p>
                    <p class="mb-5 text-white" style="margin-left: 50px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quos voluptatem suscipit neque enim, doloribus ipsum rem eos distinctio, dignissimos nisi saepe nulla? Libero numquam perferendis provident placeat molestiae quia?</p>
                    <div class="row gy-2 gx-4 mb-4">
            </div>
        </div>
    </div>
</div>
    </div>

</body>
</html>
<script src="bootstrap/js/bootstrap.min.js"></script>
