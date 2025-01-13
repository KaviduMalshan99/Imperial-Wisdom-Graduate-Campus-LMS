<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edukon</title>
    <link rel="shortcut icon" href="frontend/assets/images/x-icon.png" type="image/x-icon">

    <link rel="stylesheet" href="frontend/assets/css/animate.css">
    <link rel="stylesheet" href="frontend/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="frontend/assets/css/icofont.min.css">
    <link rel="stylesheet" href="frontend/assets/css/swiper.min.css">
    <link rel="stylesheet" href="frontend/assets/css/lightcase.css">
    <link rel="stylesheet" href="frontend/assets/css/style.css">
</head>

<body>

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    <!-- Scroll to Top -->
    <a href="#" class="scrollToTop"><i class="icofont-rounded-up"></i></a>

    <!-- Header -->
    @include('frontend.header')

    <!-- Content -->
    <div id="content">
        @yield('content')
    </div>

    <!-- Footer -->
    @include('frontend.footer')

    <script src="{{ asset('frontend/assets/js/jquery.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/lightcase.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/functions.js') }}"></script>

</body>
</html>