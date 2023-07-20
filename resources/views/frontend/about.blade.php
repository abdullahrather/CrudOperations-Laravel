@extends('frontend.layouts.main')
@section('main-container')
    @push('Title')
        <title>About Us</title>
    @endpush
    @push('li')
        <li>About Us</li>
    @endpush
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>About Us</h2>
            </div>

            <div class="row content">
                <div class="col-lg-6">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore
                        magna aliqua.
                    </p>
                    <ul>
                        <x-list-items-checklines listlabel="Ullamco laboris nisi ut aliquip ex ea commodo consequat" />
                        <x-list-items-checklines listlabel="Duis aute irure dolor in reprehenderit in voluptate velit" />
                        <x-list-items-checklines listlabel="Ullamco laboris nisi ut aliquip ex ea commodo consequat" />
                    </ul>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                        in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <x-anchor-button link="#" class="btn-learn-more" iclass="" title="Learn More" />
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
        <div class="container-fluid" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                    <x-div-content div="content" dataaos="" dataaosdelay="" h3="Eum ipsam laborum deleniti"
                        bold="velit pariatur architecto aut nihil"
                        para="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit" />
                </div>

                <div class="accordion-list">
                    <ul>
                        <x-accordion-list anchorClass="collapse" listNum="1" spanTitle="01"
                            anchorTitle="Non consectetur a erat nam at lectus urna duis?" divClass="show"
                            para=" Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus
                        laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor
                        rhoncus dolor purus non." />
                        <x-accordion-list anchorClass="collapsed" listNum="2" spanTitle="02"
                            anchorTitle="Feugiat scelerisque varius morbi enim
                            nunc?"
                            divClass=""
                            para="Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                            interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                            scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                            Mauris ultrices eros in cursus turpis massa tincidunt dui." />
                        <x-accordion-list anchorClass="collapsed" listNum="3" spanTitle="03"
                            anchorTitle="Dolor sit amet consectetur adipiscing elit?" divClass=""
                            para="Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci.
                            Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl
                            suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis
                            convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis" />
                    </ul>
                </div>

            </div>
            <x-div-image divClass="col-lg-5 align-items-stretch order-1 order-lg-2 img" dataAos="zoom-in" dataAosDelay="150"
                imgSrc="{{ url('frontend/assets/img/why-us.png') }}" />
        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <x-div-image divClass="col-lg-6 d-flex align-items-center" dataAos="fade-right" dataAosDelay="100"
                    imgSrc="{{ url('frontend/assets/img/skills.png') }}" />

                <x-div-content div="col-lg-6 pt-4 pt-lg-0 content" dataaos="fade-left" dataaosdelay="100"
                    h3="Voluptatem dignissimos provident quasi corporis voluptates" bold=""
                    para="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." />

                <div class="skills-content">
                    <x-div-skills-section title="HTML" progressPercent="100%" progressValue="100" />
                    <x-div-skills-section title="CSS" progressPercent="90%" progressValue="90" />
                    <x-div-skills-section title="JavaScript" progressPercent="75%" progressValue="75" />
                    <x-div-skills-section title="Photoshop" progressPercent="55%" progressValue="55" />
                </div>
            </div>
        </div>
        </div>
    </section><!-- End Skills Section -->
@endsection
