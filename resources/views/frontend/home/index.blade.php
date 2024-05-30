@extends('frontend.layouts.master')
@section('content')
    @include('frontend.home.search_box')
    <!-- Category Start -->
    @include('frontend.home.category')


    <!-- About Start -->
    @include('frontend.home.about')


    <!-- Property List Start -->
    @include('frontend.home.property_list')


    <!-- Call to Action Start -->
    @include('frontend.home.action')


    <!-- Team Start -->
    @include('frontend.home.team')

    <!-- Testimonial Start -->
    @include('frontend.home.testimonial')
@endsection
