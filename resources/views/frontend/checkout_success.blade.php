@extends('layouts.app')

@section('title')
    Checkout Success
@endsection

@section('navbar')
    @include('frontend.body.navbar_alter')
@endsection

@section('content')

<main>
    <div class="section-success d-flex aling-items-center">
        <div class="col text-center">
            <img src="{{asset('frontend/images/ic_mail.png')}}" alt="">
            <h1>Yey! Success!</h1>
            <p>Success to checkout your trip!</p>
            <a href="{{route('home')}}" class="btn btn-home-page mt-3 px-5">Home Page</a>
        </div>
    </div>
</main>
@endsection

