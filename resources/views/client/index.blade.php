@extends('client.layouts.layout')
@section('content')
         <!-- Navbar & Hero Start -->
         <div class="container-fluid position-relative p-0">
            @include('client.partial.nav')

           @include('client.partial.banner')
        </div>
        <!-- Navbar & Hero End -->


        <!-- Service Start -->
        <div class="container-fuild py-5">
            @include('client.partial.service')
        </div>
        <!-- Service End -->


        <!-- About Start -->
        <div class="container-fuild py-5">
           @include('client.partial.about')
        </div>
        <!-- About End -->


        <!-- Menu Start -->
        <div class="container-fuild py-5">
            @include('client.partial.menu')
        </div>
        <!-- Menu End -->


        <!-- Reservation Start -->
        <div class="container-fuild py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            @include("client.partial.booking")
        </div>
        <!-- Reservation Start -->


        <!-- Team Start -->
        <div class="container-fuild pt-5 pb-3">
            @include("client.partial.team")
        </div>
        <!-- Team End -->


        <!-- Testimonial Start -->
        <div class="container-fuild py-5 wow fadeInUp" data-wow-delay="0.1s">
            @include("client.partial.testimonial")
        </div>
        <!-- Testimonial End -->
        
   
@endsection