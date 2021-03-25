@extends('layouts.app')

@section('content')

<div class="form-body without-side">
    {{-- <div class="website-logo">
        <a href="index.html">
            <div class="logo">
                <img class="logo-size" src="{{ url('homepage/logo-light.svg" alt="">
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
                    <br><br>
                    <h3>Anmelden</h3>
                    
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" required autofocus placeholder="Vorname">

                        <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" required autofocus placeholder="Nachname">


                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">
                        <div class="form-button">
                            
                            <button id="submit" type="submit" class="ibtn">{{ __('Anmelden') }}</button>
                        </div>
                    </form>
                    <div class="other-links">
                        
                    </div>
                    <div class="page-links">
                        <a href="{{ route('login') }}">Login</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>





@endsection
