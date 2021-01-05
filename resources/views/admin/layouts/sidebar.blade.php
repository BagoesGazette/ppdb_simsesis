            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">

                            @if (Auth::user()->role === "admin")
                            <li class="menu-title">Dashboard</li>
                            <li>
                                <a href="{{ route("dashboard") }}" id="waves-effect1">
                                    <i class="ti-home"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>

                            <li class="menu-title">Pendaftar</li>
                            <li>
                                <a href="{{ route("pendaftar") }}" id="waves-effect2">
                                    <i class="ti-user"></i>
                                    <span>Pendaftar</span>
                                </a>
                            </li>

                            <li class="menu-title">Verifikasi</li>
                            <li>
                                <a href="{{ route("verifikasi") }}" id="waves-effect3">
                                    <i class="ti-check-box"></i>
                                    <span>Verifikasi</span>
                                </a>
                            </li>
                            
                            <li class="menu-title">Status</li>
                            <li>
                                <a href="{{ route("statusTerima") }}" id="waves-effect4">
                                    <i class="ti-check"></i>
                                    <span>Diterima</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route("statusTolak") }}" id="waves-effect5">
                                    <i class="ti-close"></i>
                                    <span>Ditolak</span>
                                </a>
                            </li>
                            @elseif(Auth::user()->role === "adminKesiswaan")
                            <li class="menu-title">Siswa</li>
                            <li>
                                <a href="{{ route("kesiswaan") }}" id="waves-effect1">
                                    <i class="ti-user"></i>
                                    <span>Siswa</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route("ekstrakulikuler") }}" id="waves-effect2">
                                    <i class="ti-bookmark"></i>
                                    <span>Ekstrakulikuler</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route("proker") }}" id="waves-effect3">
                                    <i class="ti-file"></i>
                                    <span>Proker</span>
                                </a>
                            </li>
                            @endif

                            
                            <div class="mb-4 p-3">
                                <a href="{{ route("logout") }}" class="btn btn-primary btn-lg btn-block btn-icon-split">
                                  <i class="fas fa-rocket"></i> Logout
                                </a>
                            </div>   

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            <div class="main-content">