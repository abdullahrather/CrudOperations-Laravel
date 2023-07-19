@extends('frontend.layouts.main')
@section('main-container')
    @push('Title')
        <title>Home</title>
    @endpush
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Better Solutions For Your Business</h1>
                    <h2>We are team of talented designers making websites with Bootstrap</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#clients" class="btn-get-started scrollto">Get Started</a>
                        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i
                                class="bi bi-play-circle"></i><span>Watch Video</span></a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ url('frontend/assets/img/hero-img.png') }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container">

                <div class="row" data-aos="zoom-in">

                    <x-img-component src="{{ url('frontend/assets/img/clients/client-1.png') }}" alttext="client Image 1" />
                    <x-img-component src="{{ url('frontend/assets/img/clients/client-2.png') }}" alttext="client Image 2" />
                    <x-img-component src="{{ url('frontend/assets/img/clients/client-3.png') }}" alttext="client Image 3" />
                    <x-img-component src="{{ url('frontend/assets/img/clients/client-4.png') }}" alttext="client Image 4" />
                    <x-img-component src="{{ url('frontend/assets/img/clients/client-5.png') }}" alttext="client Image 5" />
                    <x-img-component src="{{ url('frontend/assets/img/clients/client-6.png') }}" alttext="client Image 6" />

                </div>

            </div>
        </section><!-- End Cliens Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <x-title-section heading="Registration"
                    para="Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                fugiat sit in iste officiis commodi quidem hic quas." />

                <div class="row">

                    <x-map-location />

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="{{ url('/') }}/register" method="post" class="customer-form"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="container">
                                <x-input type="text" name="name" label="Name" />
                                <x-input type="email" name="email" label="Email" />
                                <x-input type="password" name="password" label="Password" />
                                <x-input type="password" name="password_confirmation" label="Confirm Password" />
                                <x-input type="file" name="image" label="Upload File" />
                                <x-button buttonclass="btn btn-primary" title="Submit" />
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->
    </main><!-- End #main -->
@endsection
