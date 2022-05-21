<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ env('APP_NAME') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="/assets/front/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/assets/front/css/animate.css">

    <link rel="stylesheet" href="/assets/front/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/front/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/assets/front/css/magnific-popup.css">

    <link rel="stylesheet" href="/assets/front/css/aos.css">

    <link rel="stylesheet" href="/assets/front/css/ionicons.min.css">

    <link rel="stylesheet" href="/assets/front/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/assets/front/css/jquery.timepicker.css">


    <link rel="stylesheet" href="/assets/front/css/flaticon.css">
    <link rel="stylesheet" href="/assets/front/css/icomoon.css">
    <link rel="stylesheet" href="/assets/front/css/style.css">
</head>

<body>

    @include('partials.navbar')

    @yield('content')

    @include('partials.footer')

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="/assets/front/js/jquery.min.js"></script>
    <script src="/assets/front/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="/assets/front/js/popper.min.js"></script>
    <script src="/assets/front/js/bootstrap.min.js"></script>
    <script src="/assets/front/js/jquery.easing.1.3.js"></script>
    <script src="/assets/front/js/jquery.waypoints.min.js"></script>
    <script src="/assets/front/js/jquery.stellar.min.js"></script>
    <script src="/assets/front/js/owl.carousel.min.js"></script>
    <script src="/assets/front/js/jquery.magnific-popup.min.js"></script>
    <script src="/assets/front/js/aos.js"></script>
    <script src="/assets/front/js/jquery.animateNumber.min.js"></script>
    <script src="/assets/front/js/bootstrap-datepicker.js"></script>
    <script src="/assets/front/js/jquery.timepicker.min.js"></script>
    <script src="/assets/front/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="/assets/front/js/google-map.js"></script>
    <script src="/assets/front/js/main.js"></script>

    @yield('scripts')

</body>

</html>
