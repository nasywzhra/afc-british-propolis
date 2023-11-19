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
                    <a class="nav-link px-4 fw-bold @if(request()->is('/')) active-page @else '' @endif" href="{{ route('dsb.index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4 fw-bold {{ (request()->is('peluang-usaha') ? 'active-page' : '') }}" href="{{ route('dsb.peluang.usaha') }}">Peluang Usaha</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4 fw-bold {{ (request()->is('articles/guest-user') ? 'active-page' : '') }}" href="{{ route('articles.user.index') }}">Artikel</a>
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