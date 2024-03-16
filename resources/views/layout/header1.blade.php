<nav class="navbar">
    <a href="#" class="sidebar-toggler">
        <i data-feather="menu"></i>
    </a>
    <div class="navbar-content">
        {{-- <form class="search-form">
            <div class="input-group">
                <div class="input-group-text">
                    <h4 class="mb-3 mb-md-0 text-start">Selamat Datang Bapak/Ibu {{ Auth::user()->username }}</h4>
                </div>
            </div>
        </form> --}}
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a href="{{ route('logout') }}" class="text-white ms-0 btn btn-danger">
                    <i class="me-2 icon-md" data-feather="log-out"></i>
                    <span>Log Out</span>
                </a>
            </li>
        </ul>
    </div>
</nav>