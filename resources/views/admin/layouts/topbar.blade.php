<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ url("assets/images/logo.svg") }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ url("assets/images/logo-dark.png") }}" alt="" height="17">
                    </span>
                </a>

                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ url("assets/images/image1.png") }}" alt="" height="40">
                        <span class="ml-3 text-white"></span>
                    </span>
                    <span class="logo-lg">
                        <img src="{{ url("assets/images/image1.png") }}" alt="" height="50">
                        @if (Auth::user()->role === "admin")
                            <span class="ml-3 text-white">Administrator</span>
                        @elseif(Auth::user()->role === "adminKesiswaan")
                            <span class="ml-3 text-white">Admin Kesiswaan</span>
                        @endif
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="ti-menu"></i>
            </button>
        </div>

        <div class="d-flex">


            <div class="dropdown d-inline-block">
                {{ Auth::user()->username }}
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{ url("assets/images/image1.png") }}"
                        alt="Header Avatar">
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item text-danger" href="{{ route("logout") }}"><i class="bx bx-power-off font-size-17 align-middle mr-1 text-danger"></i> Logout</a>
                </div>
            </div>


        </div>
    </div>
</header>