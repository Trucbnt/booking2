@extends('client.layouts.layout')
@section('content')
         <!-- Navbar & Hero Start -->
         <div class="container-fluid position-relative p-0">
            @include('client.partial.nav')

           @include('client.partial.header')
        </div>
        <!-- Navbar & Hero End -->

        <!-- Menu Start -->
        <div class="container-fuild py-5">
            @include('client.partial.menu')
        </div>
        <!-- Menu End -->
   
@endsection