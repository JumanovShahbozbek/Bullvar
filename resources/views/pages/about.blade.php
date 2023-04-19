@extends('layouts.main')
@section('about', 'active')
@section('content')

    <!--  Headr  -->
    <x-headr name1="About Us" name2="about"></x-headr>
    <!--  Headr  End -->


    <!-- About Start -->
    @include('section.about')
    <!-- About End -->


    <!-- Team Start -->
    @include('section.team')
    <!-- Team End -->
@endsection
