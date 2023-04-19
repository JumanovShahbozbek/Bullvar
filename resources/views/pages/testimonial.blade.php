@extends('layouts.main')
@section('carusel', 'active')
@section('testimonial', 'active')
@section('content')
        
    <!--  Headr  -->
    <x-headr name1="Testimonial" name2="testimonial"></x-headr>
    <!--  Headr  End -->


    <!-- Testimonial Start -->
    @include('section.testimonial')
    <!-- Testimonial End -->
@endsection
