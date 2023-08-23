    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-light navbar-light sticky-top">
        <div class="container  mt-3 mb-3">
            <a href="{{route('index')}}" class="navbar-brand"><img src="photo/logo.png" width="12%" height="12%"></a>

            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mymenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="mymenu" >
                <ul class="navbar-nav">
                    <li class="nav-item {{ request()->routeIs('index') ? 'active' : '' }}"><a href="{{route('index')}}" class="nav-link">HOME</a></li>
                    <li class="nav-item {{ request()->routeIs('work') ? 'active' : '' }}"><a href="{{ route('work') }}" class="nav-link">WORK</a></li>

                    <li class="nav-item {{ request()->routeIs('service') ? 'active' : '' }}"><a href="{{ route('service') }}" class="nav-link">SERVICES</a></li>
                    <li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}"><a href="{{ route('about') }}" class="nav-link">ABOUT</a></li>
                    <!-- <li class="nav-item dropdown"><a  class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                        Our Services</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item">S</a></li>
                            <li><a class="dropdown-item">S</a></li>
                            <li><a class="dropdown-item">S</a></li>
                        </ul>
                    </li> -->
                    <li class="nav-item {{ request()->routeIs('blog') ? 'active' : '' }}"><a href="{{ route('blog') }}" class="nav-link">BLOG</a></li>
                    <li class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}" class="nav-link">CONTACT</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>