@extends('frontend.layouts.main')
@section('main-container')
    @push('Title')
        <title>Custoemr Record</title>
    @endpush
    @push('li')
        <li>Customer Record</li>
    @endpush
    <section id="#" class="d-flex align-items-center">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Customer Records</h2>
            </div>
            <div class="row content">
                <div class="button-container">
                    <a href="{{ route('customer.create') }}">
                        <button class="btn btn-primary d-inline-block m-2">Add Record</button>
                    </a>
                    <a href="{{ route('customer.trash') }}">
                        <button class="btn btn-danger d-inline-block m-2">Go to Trash</button>
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm">
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
                                        <div class="button-container">
                                            <a href="{{ route('customer.delete', ['id' => $customer->id]) }}"><button
                                                    class="btn btn-danger">Trash</button></a>
                                            <a href="{{ route('customer.edit', ['id' => $customer->id]) }}"><button
                                                    class="btn btn-secondary">Edit</button></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>
@endsection
