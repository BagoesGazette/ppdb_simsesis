
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Login  Administrator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url("assets/images/image1.png") }}">

    <!-- Bootstrap Css -->
    <link href="{{ url("assets/css/bootstrap.min.css") }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ url("assets/css/app.min.css") }}" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>

    <div class="home-btn d-none d-sm-block">
        <a href="{{ url("/") }}" class="text-dark"><i class="ti-home h2"></i></a>
    </div>
    <div class="account-pages my-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-primary">
                            <div class="text-primary text-center p-4">
                                <h5 class="text-white font-size-20">Selamat Datang</h5>
                                <p class="text-white-50">Login Administrator</p>
                                <a href="#" class="logo logo-admin">
                                    <img src="assets/images/image1.png" height="50" alt="logo">
                                </a>
                            </div>
                        </div>

                        <div class="card-body p-4">
                            <div class="p-3">
                                <form class="form-horizontal mt-4" action="{{ route("postAdmin") }}" method="POST" autocomplete="off">@csrf
                                    @if (session('error'))
                                        <div class="alert alert-danger alert-dismissible show fade">
                                        <div class="alert-body">
                                            <button class="close" data-dismiss="alert">
                                            <span>x</span>
                                            </button>
                                            {{ session('error') }}
                                        </div>
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter email">
                                    </div>

                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Enter password">
                                    </div>
                                    
                                    <button class="btn btn-primary btn-block">Login Administrator</button>

                                </form>

                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
<!-- JAVASCRIPT -->
<script src="{{ url("assets/libs/jquery/jquery.min.js") }}"></script>
<script src="{{ url("assets/libs/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
<script src="{{ url("assets/libs/simplebar/simplebar.min.js") }}"></script>
<script src="{{ url("assets/libs/node-waves/waves.min.js") }}"></script>

</body>

</html>