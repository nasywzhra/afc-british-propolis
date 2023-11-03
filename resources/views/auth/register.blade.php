@extends('auth.master_auth')
@section('content-auth')
<div class="register-form">
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class=" mb-3">
            <label for="name"
                class="col-form-label text-md-end"><strong>{{ __('Name') }}</strong></label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="phone"
                class="col-form-label text-md-end"><strong>{{ __('Phone') }}</strong></label>
            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror"
                name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

            @error('phone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email"
                class="col-form-label text-md-end"><strong>{{ __('Email Address') }}</strong></label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password"
                class="col-form-label text-md-end"><strong>{{ __('Password') }}</strong></label>
            <input id="password" type="password"
                class="form-control @error('password') is-invalid @enderror" name="password" required
                autocomplete="new-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password-confirm"
                class="col-form-label text-md-end"><strong>{{ __('Confirm Password') }}</strong></label>
            <input id="password-confirm" type="password" class="form-control"
                name="password_confirmation" required autocomplete="new-password">
        </div>

        <div class="mb-3 text-center">
            <button type="submit" class="btn-register">
                <strong>{{ __('Register') }}</strong>
            </button>
        </div>
</form>
<div class="text-center">
    <strong>Sudah memiliki akun? <a href="{{ route('login') }}">Sign In</a></strong>
</div>
</div>
@endsection
