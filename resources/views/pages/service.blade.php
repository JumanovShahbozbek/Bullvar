@extends('layouts.main')
@section('service', 'active')
@section('content')
        
    <!--  Headr  -->
    <x-headr name1="Services" name2="service"></x-headr>
    <!--  Headr  End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Our Services</h5>
                <h1 class="mb-5">Explore Our Services</h1>
            </div>
            <div class="row g-4">
                @include('section.service')
                @include('section.service')
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection
