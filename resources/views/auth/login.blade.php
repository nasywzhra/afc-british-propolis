@extends('auth.master_auth')

@section('content-auth')
<div class="register-form">
    <form method="POST" action="{{ route('login') }}">
        @csrf


        <div class="mb-3">
            <label for="email"
                class="col-form-label text-md-end"><strong>{{ __('Email Address') }}</strong></label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                name="email" value="{{ old('email') }}" autocomplete="email">

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
                class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="mb-3 text-center">
            <button type="submit" class="btn-register">
                <strong>{{ __('Sign In') }}</strong>
            </button>
        </div>
</form>
<div class="text-center">
    <strong>Belum memiliki akun? Silahkan <a href="{{ route('register') }}">Register</a></strong>
</div>
</div>
@endsection

