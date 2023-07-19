@extends('frontend.layouts.main')
@section('main-container')
    @push('Title')
        <title>Group Add</title>
    @endpush
    @push('li')
        <li>Group Add</li>
    @endpush
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <x-title-section heading="Groups" para="Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                fugiat sit in iste officiis commodi quidem hic quas." />

            <div class="row">
                <x-map-location />

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
