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
                            <div class="form-group">
                                <label for="grp_name">Group Name</label>
                                <input type="text" name="grp_name" id="grp_name" class="form-control"
                                    value="{{ trim($group->grp_name) ?: old('grp_name') }}">
                                <span class="text-danger">
                                    @error('grp_name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="grp_desc">Group Description</label>
                                <textarea class="form-control" name="grp_desc" id="grp_desc" rows="3">{{ trim($group->grp_desc) ?: old('grp_desc') }}</textarea>
                                <span class="text-danger">
                                    @error('grp_desc')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="grp_logo">Group Logo</label>
                                <input type="file" name="grp_logo" id="grp_logo" class="form-control">
                                <span class="text-danger">
                                    @error('grp_logo')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
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
