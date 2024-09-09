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
@endsection