@extends('frontend.layouts.main')
@section('main-container')
    @push('Title')
        <title>Customer Add</title>
    @endpush
    @push('li')
        <li>Customer Add</li>
    @endpush
    <section id="contact" class="scontact">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Customers</h2>
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

                    <form action="{{ $url }}" method="post" class="customer-form">
                        @csrf
                        <div class="container">

                            <div class="section-title">

                                <h2>{{ $title }}</h2>
                            </div>
                            <div class="form-group row">
                                <x-form-component class="col-md-6" for="name" label="Name" type="text"
                                    name="name" id="name" value="{{ trim($customer->name) ?: old('name') }}" />
                                <x-form-component class="col-md-6" for="email" label="Email" type="email"
                                    name="email" id="email" value="{{ trim($customer->email) ?: old('email') }}" />
                            </div>
                            <div class="form-group row">
                                <x-form-component class="col-md-6" for="password" label="Password" type="password"
                                    name="password" id="password" value="" />
                                <x-form-component class="col-md-6" for="password_confirmation" label="Confirm Password"
                                    type="password" name="password_confirmation" id="password_confirmation"
                                    value="" />
                            </div>
                            <x-form-select class="form-group" label="Group" for="grp_id" name="grp_id" id="grp_id"
                                option="Select Group" :options="$groups->pluck('grp_name', 'grp_id')" :selectedvalue="trim($customer->grp_id)" />
                            <div class="form-group row">
                                <x-form-select class="col-md-6" label="Country" for="country" name="country" id="country"
                                    option="Select Country" :options="$countries" :selectedvalue="trim($customer->country)" />
                                <x-form-component class="col-md-6" for="state" label="State" type="text"
                                    name="state" id="state" value="{{ trim($customer->state) ?: old('state') }}" />
                            </div>
                            <x-form-textarea class="form-group" for="address" label="Address" rows="3" name="address"
                                id="address" :selectedvalue="trim($customer->address)" />
                            <div class="form-group row">

                                <div class="col-md-6">
                                    <label for="gender">Gender</label>
                                    <x-form-check label="Male" name="gender" id="male" value="M"
                                        :ischecked="trim($customer->gender) === 'M' || old('gender') === 'M'" type="radio" />
                                    <x-form-check label="Female" name="gender" id="female" value="F"
                                        :ischecked="trim($customer->gender) === 'F' || old('gender') === 'F'" type="radio" />
                                </div>
                                <div class="col-md-6">
                                    <label for="dob">Date of Birth</label>
                                    <input type="date" name="DOB" id="DOB" class="form-control"
                                        value="{{ trim($customer->DOB) ?: old('DOB') }}">
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
