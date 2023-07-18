@extends('frontend.layouts.main')
@section('main-container')
    @push('Title')
        <title>Group Add</title>
    @endpush
    @push('li')
        <li>Group Add</li>
    @endpush
    <section id="contact" class="scontact">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Groups</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>
            <div class="row">
                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>info@example.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+1 5589 55488 55s</p>
                        </div>

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                            frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">

                    <form action="{{ $url }}" method="post" class="customer-form" enctype="multipart/form-data">
                        @csrf
                        <div class="container">

                            <div class="section-title">

                                <h2>{{ $title }}</h2>
                            </div>
                            <x-form-component class="form-group" for="grp_name" label="Group Name" type="text"
                                name="grp_name" id="grp_name" value="{{ trim($group->grp_name) ?: old('grp_name') }}" />

                            <x-form-textarea class="form-group" for="grp_desc" label="Group Description" rows="3"
                                name="grp_desc" id="grp_desc" :selectedvalue="trim($group->grp_desc)" />

                            <x-form-component class="form-group" for="grp_logo" label="Group Logo" type="file"
                                name="grp_logo" id="grp_logo" value="{{ $group->grp_logo ?: old('grp_logo') }}" />
                        </div>
                        <button class="btn btn-primary">
                            Submit
                        </button>
                </div>
                </form>
            </div>
        </div>
        </div>
    </section>
@endsection
