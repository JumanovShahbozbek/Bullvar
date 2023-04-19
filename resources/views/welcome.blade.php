@extends('layouts.main')
@section('main', 'active')
@section('content')
        <div class="container-xxl py-5 bg-dark hero-header mb-5">
            <div class="container my-5 py-5">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6 text-center text-lg-start">
                        <h1 class="display-3 text-white animated slideInLeft">Enjoy Our<br>Delicious Meal</h1>
                        <p class="text-white animated slideInLeft mb-4 pb-2">Tempor erat elitr rebum at clita. Diam
                            dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed
                            stet lorem sit clita duo justo magna dolore erat amet</p>
                        <a href="" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Book A
                            Table</a>
                    </div>
                    <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                        <img class="img-fluid" src="/assets/img/hero.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                @include('section.service')
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    @include('section.about')
    <!-- About End -->


    <!-- Menu Start -->
    @include('section.menu')
    <!-- Menu End -->


    <!-- Reservation Start -->
    @include('section.booking')
    <!-- Reservation Start -->


    <!-- Team Start -->
    @include('section.team')
    <!-- Team End -->


    <!-- Testimonial Start -->
    @include('section.testimonial')
    <!-- Testimonial End -->
@endsection
