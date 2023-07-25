@extends('frontend.layouts.main')
@section('main-container')
    @push('Title')
        <title>Account</title>
    @endpush
    @push('li')
        <li>Account</li>
    @endpush

    <div class="form-modal">

        <div class="form-toggle">
            <button id="login-toggle" onclick="toggleLogin()">log in</button>
            <button id="signup-toggle" onclick="toggleSignup()">sign up</button>
        </div>

        <div id="login-form">
            <form>
                <input type="text" placeholder="Enter email or username" />
                <input type="password" placeholder="Enter password" />
                <button type="button" class="btn login">login</button>
                <p><a href="javascript:void(0)">Forgotten account</a></p>
                <hr />
                <button type="button" class="btn -box-sd-effect"> <i class="fa fa-google fa-lg" aria-hidden="true"></i>
                    sign in with google</button>
                <button type="button" class="btn -box-sd-effect"> <i class="fa fa-linkedin fa-lg" aria-hidden="true"></i>
                    sign in with linkedin</button>
                <button type="button" class="btn -box-sd-effect"> <i class="fa fa-windows fa-lg" aria-hidden="true"></i>
                    sign in with microsoft</button>
            </form>
        </div>

        <div id="signup-form">
            <form>
                <input type="email" placeholder="Enter your email" />
                <input type="text" placeholder="Choose username" />
                <input type="password" placeholder="Create password" />
                <button type="button" class="btn signup">create account</button>
                <p>Clicking <strong>create account</strong> means that you are agree to our <a
                        href="javascript:void(0)">terms of services</a>.</p>
                <hr />
                <button type="button" class="btn -box-sd-effect"> <i class="fa fa-google fa-lg" aria-hidden="true"></i>
                    sign up with google</button>
                <button type="button" class="btn -box-sd-effect"> <i class="fa fa-linkedin fa-lg" aria-hidden="true"></i>
                    sign up with linkedin</button>
                <button type="button" class="btn -box-sd-effect"> <i class="fa fa-windows fa-lg" aria-hidden="true"></i>
                    sign up with microsoft</button>
            </form>
        </div>

    </div>
@endsection
