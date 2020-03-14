<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/fontawesome.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/slicknav.css">
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        {{-- <section class="app-layout">

            <div class="welcome-jumbo">
                <div class="welcome-jumbo__status">NEW</div>
                <h1 class="welcome-jumbo__title">Beef Burger</h1>
                <img src="img/hamburger-and-fries.png" class="welcome-jumbo__burger-fries">
            </div>
        </section> --}}

        <!-- header-start -->
        @include('includes.header')

        <!-- header-end -->

        <!-- slider_area_start -->
        <div class="slider_area">
            <div class="slider_active owl-carousel">
                <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-xl-9 col-md-9 col-md-12">
                                <div class="slider_text text-center">
                                    <div class="deal_text">
                                        <span>NEW</span>
                                    </div>
                                    <h3>Find Your Favorite</h3>
                                    <h4>Food</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single_slider  d-flex align-items-center slider_bg_2 overlay">
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-xl-9 col-md-9 col-md-12">
                                <div class="slider_text text-center">
                                    <div class="deal_text">
                                        <span>NEW</span>
                                    </div>
                                    <h3>Find Your Favorite</h3>
                                    <h4>Food</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider_area_end -->

        @yield('content')

    </body>

  <script src="js/jquery.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/main.js"></script>

</html>
