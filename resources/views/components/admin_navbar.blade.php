


<div class="main-header sticky side-header nav nav-item">
    <div class="container-fluid">
        <div class="main-header-left ">
            <div class="responsive-logo"> <a class="navbar-brand" href="{{ url('/') }}">
                CMM Rental
                </a></div>
            <div class="app-sidebar__toggle" data-toggle="sidebar"> <a class="open-toggle" href="#"><i class="header-icon fe fe-align-left"></i></a> <a class="close-toggle" href="#"><i class="header-icons fe fe-x"></i></a> </div>

        </div>
        <div class="main-header-right">
            <ul class="navbar-nav ml-auto">
                @guest
     <!--            <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif -->
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
      
        </div>
    </div>
</div>