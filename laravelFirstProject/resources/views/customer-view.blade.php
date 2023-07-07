<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    @include('index')
    <div class="container">
        <h1 class="text-center">Customer Records</h1>
        <a href="{{ route('customer.create') }}">
            <button class="btn btn-primary d-inline-block m-2 float-right">Add Record</button>
        </a>
        <a href="{{ route('customer.trash') }}">
            <button class="btn btn-danger d-inline-block m-2 float-right">Go to Trash</button>
        </a>
        <table class="table table-bordered table-inverse">
            <thead class="thead-dark">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Country</th>
                    <th>State</th>
                    <th>Date of Birth</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td scope="row">{{ $customer->name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>
                            @if ($customer->gender == 'M')
                                Male
                            @else
                                Female
                            @endif
                        </td>
                        <td>{{ $customer->address }}</td>
                        <td>{{ $customer->country }}</td>
                        <td>{{ $customer->state }}</td>
                        <td>{{ $customer->DOB }}</td>
                        <td>
                            @if ($customer->status == '1')
                                <a href="">
                                    <span class="badge badge-success">Active</span>
                                </a>
                            @else
                                <a href="">
                                    <span class="badge badge-danger">Inactive</span>
                                </a>
                            @endif
                        </td>
                        <td>

                            {{-- <a href="{{url('/customer/delete/')}}/{{$customer->id}}"><button class="btn btn-danger">Delete</button></a> --}}
                            <a href="{{ route('customer.delete', ['id' => $customer->id]) }}"><button
                                    class="btn btn-danger">Trash</button></a>
                            <a href="{{ route('customer.edit', ['id' => $customer->id]) }}"><button
                                    class="btn btn-secondary">Edit</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
