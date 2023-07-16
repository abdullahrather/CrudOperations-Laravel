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
                                <div class="col-md-6">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="{{ trim($customer->name) ?: old('name') }}">
                                    <span class="text-danger">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        value="{{ trim($customer->email) ?: old('email') }}">
                                    <span class="text-danger">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control">
                                    <span class="text-danger">
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-md-6">
                                    <label for="password_confirmation">Confirm Password</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation"
                                        class="form-control">
                                    <span class="text-danger">
                                        @error('password_confirmation')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="grp_id">Group</label>
                                <select name="grp_id" id="grp_id" class="form-control">
                                    <option value="">Select Group</option>
                                    @foreach ($groups as $group)
                                        <option value="{{ $group->grp_id }}"
                                            {{ $customer->grp_id == $group->grp_id || old('grp_id') == $group->grp_id ? 'selected' : '' }}>
                                            {{ $group->grp_name }}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="text-danger">
                                    @error('grp_id')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="form-group">
                                <label for="country">Country</label>
                                <select name="country" id="country" class="form-control">
                                    <option value="">Select Country</option>
                                    @foreach ($countries as $country)
                                        <option value="{{ $country }}"
                                            {{ trim($customer->country) == $country || old('country') == $country ? 'selected' : '' }}>
                                            {{ $country }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">
                                    @error('country')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="form-group">
                                <label for="state">State</label>
                                <input type="text" name="state" id="state" class="form-control"
                                    value="{{ trim($customer->state) ?: old('state') }}">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea class="form-control" name="address" id="address" rows="3">{{ trim($customer->address) ?: old('address') }}</textarea>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="gender">Gender</label>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="gender" id="male"
                                                value="M"
                                                {{ (trim($customer->gender == 'M' ? 'checked' : '') ?: old('gender') === 'M') ? 'checked' : '' }}>
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="gender" id="female"
                                                value="F"
                                                {{ (trim($customer->gender == 'F' ? 'checked' : '') ?: old('gender') === 'F') ? 'checked' : '' }}>
                                            Female
                                        </label>
                                    </div>
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
