@extends('frontend.layouts.main')
@section('main-container')
    @push('Title')
        <title>Customer Add</title>
    @endpush
    @push('li')
        <li>Customer Add</li>
    @endpush
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <x-title-section heading="Customers"
                para="Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                fugiat sit in iste officiis commodi quidem hic quas." />

            <div class="row">
                <x-map-location />

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
                            <x-form-select-group :options="$groups" :table="$customer" />

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
                                <x-form-component class="col-md-6" for="dob" label="Date of Birth" type="date"
                                    name="DOB" id="DOB" value="{{ trim($customer->DOB) ?: old('DOB') }}" />
                            </div>
                            <x-button buttonclass="btn btn-primary" title="Submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
