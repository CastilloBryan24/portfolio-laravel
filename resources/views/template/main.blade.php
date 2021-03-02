<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

      <!-- Favicons -->
    {{-- <link href="assets/img/favicon.png" rel="icon"> --}}
    <link href="{{asset("img/favicon.png")}}" rel="icon">
    {{-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}
    <link href="{{asset("img/apple-touch-icon.png")}}" rel="apple-touch-icon">

        <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
    {{-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link href="{{asset("vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">

    {{-- <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet"> --}}
    <link href="{{asset("vendor/icofont/icofont.min.css")}}" rel="stylesheet">

    {{-- <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet"> --}}
    <link href="{{asset("vendor/owl.carousel/assets/owl.carousel.min.css")}}" rel="stylesheet">

    {{-- <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet"> --}}
    <link href="{{asset("vendor/boxicons/css/boxicons.min.css")}}" rel="stylesheet">

    {{-- <link href="assets/vendor/venobox/venobox.css" rel="stylesheet"> --}}
    <link href="{{asset("vendor/venobox/venobox.css")}}" rel="stylesheet">

    {{-- <link href="assets/vendor/aos/aos.css" rel="stylesheet"> --}}
    <link href="{{asset("vendor/aos/aos.css")}}" rel="stylesheet">


        <!-- Template Main CSS File -->
    {{-- <link href="assets/css/style.css" rel="stylesheet"> --}}
    <link href="{{asset("css/style.css")}}" rel="stylesheet">

    <title>Bryan</title>
</head>
<body>

    @include('partials.nav')
    @yield('content')
    @include('partials.footer')



    <div id="preloader"></div>
    <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  
    <!-- Vendor JS Files -->
    {{-- <script src="assets/vendor/jquery/jquery.min.js"></script> --}}
    <script src="{{asset("vendor/jquery/jquery.min.js")}}"></script>

    {{-- <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
    <script src="{{asset("vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>

    {{-- <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script> --}}
    <script src="{{asset("vendor/jquery.easing/jquery.easing.min.js")}}"></script>

    {{-- <script src="assets/vendor/php-email-form/validate.js"></script> --}}
    <script src="{{asset("vendor/php-email-form/validate.js")}}"></script>

    {{-- <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script> --}}
    <script src="{{asset("vendor/waypoints/jquery.waypoints.min.js")}}"></script>

    {{-- <script src="assets/vendor/counterup/counterup.min.js"></script> --}}
    <script src="{{asset("vendor/counterup/counterup.min.js")}}"></script>

    {{-- <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script> --}}
    <script src="{{asset("vendor/owl.carousel/owl.carousel.min.js")}}"></script>

    {{-- <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script> --}}
    <script src="{{asset("vendor/isotope-layout/isotope.pkgd.min.js")}}"></script>

    {{-- <script src="assets/vendor/venobox/venobox.min.js"></script> --}}
    <script src="{{asset("vendor/venobox/venobox.min.js")}}"></script>

    {{-- <script src="assets/vendor/aos/aos.js"></script> --}}
    <script src="{{asset("vendor/aos/aos.js")}}"></script>
  
    <!-- Template Main JS File -->
    {{-- <script src="assets/js/main.js"></script> --}}
    <script src="{{asset("js/main.js")}}"></script>
  
</body>
</html>