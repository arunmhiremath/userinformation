<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            Ich Bin Da
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                
                <li class="nav-item ">                                                                
                    <a class="dropdown-item" href="{{ route('home') }}">
                        {{empty(Auth::user()->firstname) ? Auth::user()->firstname: decrypt(Auth::user()->firstname)}} 
                        {{empty(Auth::user()->lastname) ? Auth::user()->lastname: decrypt(Auth::user()->lastname)}}
                    </a>
                </li>
                <li class="nav-item ">                                                                
                    <a class="dropdown-item" href="{{ route('profile') }}">
                        {{ __('Profil') }}
                    </a>
                </li>

                <li class="nav-item ">                                                                
                    <a class="dropdown-item" href="{{ route('premiumplans') }}">
                        {{ __('Tariff') }}
                    </a>
                </li>
                {{-- <li class="nav-item ">                                                                
                    <a class="dropdown-item" href="{{ route('payment') }}">
                        {{ __('Zahlungen') }}
                    </a>
                </li> --}}
            
                    <li class="nav-item ">                                                                
                            <a class="dropdown-item" href="{{ route('guestreport') }}">
                                {{ __('Gastbericht') }}
                            </a>
                    </li>
                    <li class="nav-item">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                    
                @endguest
            </ul>
        </div>
    </div>
</nav>