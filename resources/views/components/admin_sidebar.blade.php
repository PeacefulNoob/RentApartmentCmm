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
<aside class="app-sidebar sidebar-scroll ps ps--active-y">
    <div class="main-sidebar-header  active"> 
        <a class="desktop-logo logo-light active" href="index.html">
            <img src="/assets/images/logow.png" class="main-logo" alt="logo"></a> 
           
            </div>
    <div class="main-sidemenu active">
        <div class="app-sidebar__user clearfix">
            <div class="dropdown user-pro-body">
                <div class=""> <img alt="user-img" class="avatar avatar-xl brround" src="/assets/images/cetinje.png"><span class="avatar-status profile-status bg-green"></span> </div>
                <div class="user-info">
                    <h4 class="font-weight-semibold mt-3 mb-0">     {{ Auth::user()->name }} </h4> <span class="mb-0 text-muted">Hello !</span>
                </div>
            </div>
        </div>
        <ul class="side-menu">
            <li class="side-item side-item-category">Main</li>
            @can('manage-users')
            <li class="slide"> <a class="side-menu__item" href="{{ route('admin.users.index') }}"><span class="side-menu__label">User Management</span></a> </li>
            @endcan
            <li class="side-item side-item-category">General</li>
            @can('adman')

            <li class="slide"> <a class="side-menu__item" data-toggle="slide" href="#"><span class="side-menu__label dropdown-toggle">Properties</span><i class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="/properties/create">Add Property</a></li>
                    <li><a class="slide-item" href="/properties">List of all properties      </a></li>
                </ul>
            </li>
            <li class="slide"> <a class="side-menu__item " data-toggle="slide" href="#"><span class="side-menu__label dropdown-toggle">Blog posts</span><i class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                <li><a class="slide-item" href="/blogs/create">Add Blog Post</a></li>
                    <li><a class="slide-item" href="/blogs">List of all Blog Posts     </a></li>
                </ul>
            </li>
           
            @endcan

        </ul>
    </div>
    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
    </div>
    <div class="ps__rail-y" style="top: 0px; height: 937px; right: 0px;">
        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 610px;"></div>
    </div>
</aside>

@endguest