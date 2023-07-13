<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    @stack('Title')
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ url('frontend/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ url('frontend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ url('frontend/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Arsha
  * Updated: Jul 05 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="{{ url('/') }}">Project</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="{{ url('frontend/assets/img/logo.png') }}" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="{{ Request::is('/') ? 'active' : '' }}" class="nav-link scrollto" href="{{ url('/') }}">Home</a></li>
                    <li><a class="{{ Request::is('about-us') ? 'active' : '' }}" class="nav-link scrollto" href="{{ url('/about-us') }}">About</a></li>
                    <li><a class="{{ Request::is('services') ? 'active' : '' }}" class="nav-link scrollto" href="{{ url('/services') }}">Services</a></li>
                    <li><a class="{{ Request::is('portfolio') ? 'active' : '' }}" class="nav-link   scrollto" href="{{ url('/portfolio') }}">Portfolio</a></li>
                    <li><a class="{{ Request::is('team') ? 'active' : '' }}" class="nav-link scrollto" href="{{ url('/team') }}">Team</a></li>
                    <li class="dropdown"><a href="#"><span>Customers</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ url('/customer/view') }}">Customer Records</a></li>
                            <li><a href="{{ route('customer.create') }}">Customer Add</a></li>
                        </ul>
                    </li>
                    <li><a class="getstarted scrollto" href="#">Button</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
