@extends('layouts.app')

@section('title')
    Truevell
@endsection

@section('navbar')
    @include('frontend.body.navbar_home')
@endsection

@section('content')
    <!-- Header -->
    <header class="text-center">

        <h1>
            Travel, enjoy and live a new
            <br>
            and full life
        </h1>

        <p class="mt-3">
            Built Wicket longer admire do barton vanity itself do in it.
            <br>
            Preferred to sportsmen it engrossed listening.
            <br>
            Park gate sell they west hard for the.
        </p>

        <a href="#" class="btn btn-get-started px-4 mt-4">Get Started</a>
    </header>

    <main>
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <div class="div col-3 col-md-2 stats-detail">
                    <h2>20K</h2>
                    <p>Members</p>
                </div>

                <div class="div col-3 col-md-2 stats-detail">
                    <h2>25</h2>
                    <p>Countries</p>
                </div>

                <div class="div col-3 col-md-2 stats-detail">
                    <h2>5K</h2>
                    <p>Hotels</p>
                </div>

                <div class="div col-3 col-md-2 stats-detail">
                    <h2>120</h2>
                    <p>Partners</p>
                </div>
            </section>
        </div>

        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>
                            Popular Destinations
                        </h2>

                        <p>
                            Visit our top testinations
                            <br>
                            and feel something you never feel before!
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-popular-content" id="pupular-content">
            <div class="container">
                <div class="section-popular-travel row justify-text-center">

                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url('/frontend/images/travel-1.jpg') ;">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">DERATAN - BALI</div>
                            <div class="travel-button mt-auto">
                                <a href="#" class="btn btn-travel-details px-4">View Details</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url('/frontend/images/travel-2.jpg') ;">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">BROMO</div>
                            <div class="travel-button mt-auto">
                                <a href="#" class="btn btn-travel-details px-4">View Details</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url('/frontend/images/travel-3.jpg') ;">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">NUSA PENIDA</div>
                            <div class="travel-button mt-auto">
                                <a href="#" class="btn btn-travel-details px-4">View Details</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url('/frontend/images/travel-4.jpg') ;">
                            <div class="travel-country">MIDDLE EAST</div>
                            <div class="travel-location">DUBAI</div>
                            <div class="travel-button mt-auto">
                                <a href="#" class="btn btn-travel-details px-4">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-networks">
            <div class="container">
                <div class="row">

                    <div class="col-md-4">
                        <h2>Our Networks</h2>

                        <p>
                            Companies are trusted us
                            <br>
                            more than just a trip.
                        </p>
                    </div>

                    <div class="col-md-8 text-center">
                        <img src="/frontend/images/partner.png" alt="Logo Partners" class="img-parter">
                    </div>

                </div>
            </div>
        </section>

        <section class="section-testimonial-heading" id="testimonialHeading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>
                            Customer Stories
                        </h2>

                        <p>
                            Customer satisfaction is our priority.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <div class="section section-testimonial-content" id="testimonialContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="/frontend/images/avatar-1.jpg" alt="User" class="rounded-circle">

                                <h3 class="mb-4 mt-3">Jane Curty</h3>
                                <p class="testimonial">
                                    "It feels really good to be able to travel with Truevell services."
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">Trip to Nusa Penida</p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="/frontend/images/avatar-2.jpg" alt="User" class="rounded-circle">

                                <h3 class="mb-4 mt-3">Rapinha</h3>
                                <p class="testimonial">
                                    "It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout."
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">Trip to Bromo</p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="/frontend/images/avatar-3.jpg" alt="User" class="rounded-circle">

                                <h3 class="mb-4 mt-3">Margot Robbie</h3>
                                <p class="testimonial">
                                    "Lorem Ipsum is simply dummy text of the printing and typesetting industry."
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">Trip to Nusa Penida</p>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">I Need Help</a>
                        <a href="#" class="btn btn-get-started px-4 mt-4 mx-1">Get Started</a>

                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
