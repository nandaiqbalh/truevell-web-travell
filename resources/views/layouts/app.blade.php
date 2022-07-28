<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="frontend/libraries/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="frontend/styles/main.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Volkhov&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Semantic elements -->
    <!-- https://www.w3schools.com/html/html5_semantic_elements.asp -->

    <!-- Bootstrap navbar example -->
    <!-- https://www.w3schools.com/bootstrap4/bootstrap_navbar.asp -->

    <!-- Navbar -->
    <div class="container">
        <nav class="row navbar navbar-expand-lg navbar-light"
            style="border-bottom-left-radius: 8px; border-bottom-right-radius: 8px;">
            <a class="navbar-brand" href="#">
                <img src="frontend/images/logo.png" alt="" />
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navb">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navb">
                <ul class="navbar-nav ml-auto mr-3">
                    <li class="nav-item mx-md-2">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a class="nav-link" href="#">Paket Travel</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Services
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Link 1</a>
                            <a class="dropdown-item" href="#">Link 2</a>
                            <a class="dropdown-item" href="#">Link 3</a>
                        </div>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a class="nav-link" href="#">Testimonial</a>
                    </li>
                </ul>

                <!-- Mobile button -->
                <form class="form-inline d-sm-block d-md-none">
                    <button class="btn btn-login">
                        Sign In
                    </button>
                </form>
                <!-- Desktop Button -->
                <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                    <button class="btn btn-login">
                        Sign In
                    </button>
                </form>
            </div>
        </nav>
    </div>

    @yield('content')

    <footer class="section-footer mt-5 mb-4 border-top">
        <div class="container pt-5 pb-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12 col-lg-3">
                                    <h5>FEATURES</h5>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#">Reviews</a>
                                        </li>
                                        <li>
                                            <a href="#">Community</a>
                                        </li>
                                        <li>
                                            <a href="#">Social Media Kit</a>
                                        </li>
                                        <li>
                                            <a href="#">Affiliate</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <h5>ACCOUNT</h5>
                                    <ul class="list-unstyled">
                                        <li><a href="#">Refund</a></li>
                                        <li><a href="#">Security</a></li>
                                        <li><a href="#">Rewards</a></li>
                                    </ul>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <h5>COMPANY</h5>
                                    <ul class="list-unstyled">
                                        <li><a href="#">Career</a></li>
                                        <li><a href="#">Help Center</a></li>
                                        <li><a href="#">Media</a></li>
                                    </ul>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <h5>Get Connected</h5>
                                    <ul class="list-unstyled">
                                        <li>Kulon Progo</li>
                                        <li>Indonesia</li>
                                        <li>0831 - 0148 - 7741</li>
                                        <li>support@truevell.id</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row border-top justify-content-center align-items-center pt-4">
                <div class="col-auto text-gray-500 font-weight-light">
                    2022 Copyright Truevell • All rights reserved • Made in Kulon Progo
                </div>
            </div>
        </div>
    </footer>

    <main></main>
    <footer></footer>
    <script src="frontend/libraries/retina/retina.js"></script>
    <script src="frontend/libraries/jquery/jquery-3.4.1.min.js"></script>
    <script src="frontend/libraries/bootstrap/js/bootstrap.js"></script>
</body>

</html>
