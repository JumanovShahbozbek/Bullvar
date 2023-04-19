@extends('layouts.main')
@section('carusel', 'active')
@section('booking', 'active')
@section('content')

    <!--  Headr  -->
    <x-headr name1=" Booking " name2="booking"></x-headr>
    <!--  Headr  End -->

    <!-- Reservation Start -->
    @include('section.booking')
    <!-- Reservation Start -->
@endsection
