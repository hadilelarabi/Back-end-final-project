<nav id="navbar" class="navbar">
    <ul>
        <li><a href="#hero">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#team">Team</a></li>
        <li><a href="#blog.html">Blog</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
         @if(Auth::check())
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ url('logout') }}"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">logout <i class="fa-solid fa-arrow-right-to-bracket"></i></a>
                <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
        @if (Auth::user()->role_as == 1)
                <li><a href="admin/dashboard">Dashboard</a></li>
            </ul>
        @endif

        @endif
</nav><!-- .navbar -->