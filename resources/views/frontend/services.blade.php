@extends('frontend.layouts.main')
@section('main-container')
    @push('Title')
        <title>Services</title>
    @endpush
    @push('li')
        <li>Services</li>
    @endpush
    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <x-title-section heading="Services"
                para="Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
            consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
            fugiat sit in iste officiis commodi quidem hic quas." />

            <div class="row">
                <x-div-services-section mainDivClass="" dataAosDelay="100" iconDivClass="bx bxl-dribbble" h4="Lorem Ipsum"
                    p="Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi" />
                <x-div-services-section mainDivClass="mt-4 mt-md-0" dataAosDelay="200" iconDivClass="bx bx-file"
                    h4="Sed ut perspici"
                    p="Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturiDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore" />
                <x-div-services-section mainDivClass="mt-4 mt-xl-0" dataAosDelay="300" iconDivClass="bx bx-tachometer"
                    h4="Magni Dolores" p="Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia" />
                <x-div-services-section mainDivClass="mt-4 mt-xl-0" dataAosDelay="400" iconDivClass="bx bx-layer"
                    h4="Nemo Enim" p="At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis" />
            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">

            <div class="row">
                <x-div-content div="col-lg-9 text-center text-lg-start" dataaos="" dataaosdelay="" h3="Call To Action"
                    bold=""
                    para="Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                    mollit anim id est laborum." />
                </div>

                <div class="col-lg-3 cta-btn-container text-center">
                    <x-anchor-button link="#" class="cta-btn align-middle" iclass="" title="Call To Action" />
                </div>
            </div>
        </div>
    </section><!-- End Cta Section -->
@endsection
