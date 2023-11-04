<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ asset('assets/css/register-page.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg" style="background-color: white; height:75px;">
            <div class="container">
                <a class="navbar-brand" href="{{ route('dsb.index') }}">
                    <img src="{{ asset('assets/img/logo/logo.png') }}" alt="Logo" height="50">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link px-4 fw-bold" href="{{ route('dsb.index') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 fw-bold" href="#">Peluang Usaha</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 fw-bold" href="#">Artikel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 fw-bold" href="#">Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 fw-bold" href="{{ route('login') }}">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section class="container">
        <h1>Content</h1>
    </section>
    <footer class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <img src="{{ asset('assets/img/logo/logo.png') }}" alt="footerLogo" height="150">
                    <p class="fw-bold mt-3">
                        SuperMMInfinity adalah website Distributor British Propolis Resmi yang melayani pembelian retail
                        produk British Propolis .
                    </p>
                    <div class="row">
                        <div class="col-12">
                            <a href="#" target="_blank" class="sosmed-icon"><i class="fa-brands fa-facebook"
                                    style="font-size: 23px"></i></a>
                            <a href="#" target="_blank" class="sosmed-icon mx-3"><i class="fa-brands fa-youtube"
                                    style="font-size: 23px"></i></a>
                            <a href="#" target="_blank" class="sosmed-icon"><i class="fa-brands fa-instagram"
                                    style="font-size: 23px"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
