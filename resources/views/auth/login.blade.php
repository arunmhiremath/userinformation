@extends('layouts.app')

@section('content')

<div class="form-body without-side">
    {{-- <div class="website-logo">
        
        <a href="{{ url('/') }}">
            <div class="logo">
                
                <img  class="logo" src="{{ url('images/Logo.png') }}" alt="">
            </div>
        </a>
    </div> --}}
    <div class="row">
        <div class="img-holder">
            <div class="bg"></div>
            <div >
                <img class="bg" src="{{ url('images/homepage.jpg') }}" alt="">
            </div>
        </div>
        <div class="form-holder">
            <div class="form-content">
                
                <div class="form-items">
                    <h1>Ich Bin Da App</h1>
                    <img  class="logo" src="{{ url('images/Logo.png') }}" width="100%" alt="">
                    
                    <br>
                    <h3>Login</h3>
                    
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Passwort">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        
                        <div class="form-button">
                            
                            <button id="submit" type="submit" class="ibtn">{{ __('Login') }}</button>
                        </div>
                    </form>
                    <div class="other-links">
                        
                    </div>
                    <div class="page-links">
                        <a href="{{ route('register') }}">Geschaftskonto erstellen</a>
                    </div>
                    <br>
                    @if (Route::has('password.request'))
                    <div class="page-links">
                        <a href="{{ route('password.request') }}">{{ __('Passwort vergessen?') }}</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
