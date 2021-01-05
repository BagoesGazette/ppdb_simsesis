<div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ url("/") }}">
                            <i class="ti-home mr-2"></i>Dashboard
                        </a>
                    </li>
                    @if (Auth::check())
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">
                            <i class="ti-user mr-2"></i>{{ Auth::user()->nama_lengkap }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ url("logout") }}">
                            <i class="ti-direction mr-2"></i>Logout
                        </a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ url("register") }}">
                            <i class="ti-user mr-2"></i>Buat Akun
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ url("login") }}">
                            <i class="ti-archive mr-2"></i>Login
                        </a>
                    </li>
                    @endif


                </ul>
            </div>
        </nav>
    </div>
</div>