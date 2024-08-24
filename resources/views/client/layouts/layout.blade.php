<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Restoran - Bootstrap Restaurant Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    @include('client.partial.css')
</head>

<body>
    <div class="container-fuild bg-white p-0">
        <!-- Spinner Start -->
        @include('client.partial.loading')
        <!-- Spinner End -->

        @yield('content')
        <!-- Footer Start -->
        @include("client.partial.footer")
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    @include("client.partial.js")
</body>

</html>