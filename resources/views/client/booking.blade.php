@extends('client.layouts.layout')
@section('content')
         <!-- Navbar & Hero Start -->
         <div class="container-fluid position-relative p-0">
            @include('client.partial.nav')

           @include('client.partial.header')
        </div>
        <!-- Navbar & Hero End -->

        <!-- Reservation Start -->
        <div class="container-fuild py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            @include("client.partial.booking")
        </div>
        <!-- Reservation Start -->

@endsection