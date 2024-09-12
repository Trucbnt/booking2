@extends('client.layouts.layout')
@section('content')
         <!-- Navbar & Hero Start -->
         <div class="container-fluid position-relative p-0">
            @include('client.partial.nav')

           @include('client.partial.header')
        </div>
        <!-- Navbar & Hero End -->

        <!-- About Start -->
        <div class="container-fuild py-5">
           @include('client.partial.about')
        </div>
        <!-- About End -->
        <!-- Team Start -->
        <div class="container-fuild pt-5 pb-3">
            @include("client.partial.team")
        </div>
        <!-- Team End -->
        
   
@endsection