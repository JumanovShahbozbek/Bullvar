@extends('layouts.main')
@section('menu', 'active')
@section('content')
       
    <!--  Headr  -->
    <x-headr name1="Food menu" name2="menu"></x-headr>
    <!--  Headr  End -->


    <!-- Menu Start -->
    @include('section.menu')
    <!-- Menu End -->
@endsection
