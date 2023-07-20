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
    <link href="{{ url('frontend/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">
         <h1 class="logo me-auto"><a href="{{ url('/') }}">Project</a></h1>
          <nav id="navbar" class="navbar">
            <ul>
                    <x-nav-bar liclass="" anchorclass="/" link="/" lilabel="Home" iclass="" /></li>
                    <x-nav-bar liclass="" anchorclass="about-us" link="/about-us" lilabel="About" iclass="" /></li>
                    <x-nav-bar liclass="" anchorclass="services" link="/services" lilabel="Services" iclass="" /></li>
                    <x-nav-bar liclass="" anchorclass="portfolio" link="/portfolio" lilabel="Portfolio" iclass="" /></li>
                    <x-nav-bar liclass="" anchorclass="team" link="/team" lilabel="Team" iclass="" /></li>
                    <x-nav-bar liclass="dropdown" anchorclass="" link="#" lilabel="Customers" iclass="bi bi-chevron-down" />
                        <ul>
                            <x-nav-bar liclass="" anchorclass="" link="{{ url('/customer/view') }}" lilabel="Customer Records" iclass="" /></li>
                            <x-nav-bar liclass="" anchorclass="" link="{{ route('customer.create') }}" lilabel="Customer Add" iclass="" /></li>
                        </ul>
                    </li>
                    <x-nav-bar liclass="dropdown" anchorclass="" link="#" lilabel="Groups" iclass="bi bi-chevron-down" />
                        <ul>
                            <x-nav-bar liclass="" anchorclass="" link="{{ url('/group/view') }}" lilabel="Group Records" iclass="" /></li>
                            <x-nav-bar liclass="" anchorclass="" link="{{ route('group.create') }}" lilabel="Group Add" iclass="" /></li>
                        </ul>
                    </li>
                    <li><x-anchor-button link="#" class="getstarted scrollto" iclass="" title="Button" /></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
