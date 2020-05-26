        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <meta name="description"
        content="{{$settings["seo"]->description}}">
        <meta name="robots" content="follow,index,max-snippet:-1,max-video-preview:-1,max-image-preview:large">
        {{-- <link rel="canonical" href="https://yoursite.com/"> --}}
        <meta property="og:locale" content="en_UK">
        <meta property="og:type" content="website">
        <meta property="og:title" content="{{$settings["general"]->site_title}}">
        <meta property="og:description"
        content="{{$settings["seo"]->description}}">
        {{-- <meta property="og:url" content="https://yoursite.com/"> --}}
        <meta property="og:site_name" content="{{$settings["general"]->site_title}}">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="@yield('title')">
        <meta name="twitter:description"
        content="{{$settings["seo"]->description}}">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nothing+You+Could+Do&display=swap" rel="stylesheet">        
        <link href="/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css">
        <link rel="stylesheet" href="/fonts/ionicons/css/ionicons.min.css">

        <!-- Bootstrap CSS File -->
        <link href="/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
        <link rel="stylesheet" href="/css/app.css">