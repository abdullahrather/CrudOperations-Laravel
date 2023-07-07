<!doctype html>
<html lang="en">

<head>
    <title>Customer Registration</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .container {
            background-color: #f7f7f7;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: 0 auto;
        }

        .form-group.row {
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    @include('index')
    <form action="{{ $url }}" method="post">
        @csrf
        <div class="container">
            <h1 class="text-center">{{ $title }}</h1>
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
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                    <span class="text-danger">
                        @error('password_confirmation')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="form-group">
                <label for="country">Country</label>
                <input type="text" name="country" id="country" class="form-control"
                    value="{{ trim($customer->country) ?: old('country') }}">

            </div>
            <div class="form-group">
                <label for="state">State</label>
                <input type="text" name="state" id="state" class="form-control"
                    value="{{ trim($customer->state) ?: old('state') }}">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea class="form-control" name="address" id="address" rows="3">{{ trim($customer->country) ?: old('country') }}</textarea>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="gender">Gender</label>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" id="male" value="M"
                                {{ (trim($customer->gender == 'M' ? 'checked' : '') ?: old('gender') === 'M') ? 'checked' : '' }}>
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" id="female" value="F"
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

</body>

</html>
