<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>

    @stack('prepend-style')

    <link rel="stylesheet" href="frontend/libraries/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="frontend/styles/main.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Volkhov&display=swap" rel="stylesheet">

    @stack('addon-style')
</head>

<body>
    <!-- Navbar -->
    @yield('navbar')

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

    @stack('prepend-script')

    <script src="frontend/libraries/retina/retina.js"></script>
    <script src="frontend/libraries/jquery/jquery-3.4.1.min.js"></script>
    <script src="frontend/libraries/bootstrap/js/bootstrap.js"></script>
    @stack('addon-script')
</body>

</html>
