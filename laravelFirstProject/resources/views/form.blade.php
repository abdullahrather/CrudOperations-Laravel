@extends('frontend.layouts.main')
@push('Title')
    <title>Register</title>
@endpush
@push('li')
    <li>Register</li>
@endpush
@section('main-container')
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h1>Register</h1>
            </div>

            <form action="{{ url('/') }}/register" method="post" class="customer-form">
                @csrf
                <x-input type="text" name="name" label="Name" />
                <x-input type="email" name="email" label="Email" />
                <x-input type="password" name="password" label="Password" />
                <x-input type="password" name="password_confirmation" label="Confirm Password" />
                {{-- <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" id="" class="form-control" value="{{old('name')}}">
                    <span class="danger">
                        @error('name')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                <input type="email" name="email" id="" class="form-control" value="{{old('email')}}">
                <span class="danger">
                    @error('email')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" id="" class="form-control">
                    <span class="danger">
                        @error('password')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="form-group">
                    <label for="">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="" class="form-control">
                    <span class="danger">
                        @error('password_confirmation')
                        {{$message}}
                        @enderror
                    </span>
                </div> --}}
                <button class="btn btn-primary">
                    Submit
                </button>
            </form>
    </section>
@endsection
