@extends('frontend.layouts.main')
@section('main-container')
    @push('Title')
        <title>Customer Trash</title>
    @endpush
    @push('li')
        <li>Customer Trash</li>
    @endpush
    <section id="#" class="d-flex align-items-center">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Customer Trash Records</h2>
            </div>
            <div class="row content">
                <div class="button-container">
                    <a href="{{ route('customer.view') }}">
                        <button class="btn btn-primary d-inline-block m-2 float-right">Go to Customers</button>
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm">
                        <thead class="thead-dark">
                            <tr>
                                <th>Sr.</th>
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
                            @php
                            $i = 1;
                        @endphp
                            @foreach ($customers as $customer)
                                <tr>
                                    <td scope="row">{{ $i }}</td>
                                    <td>{{ $customer->name }}</td>
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
                                            <a href="{{ route('customer.force.delete', ['id' => $customer->id]) }}"><button
                                                    class="btn btn-danger">Delete</button></a>
                                            <a href="{{ route('customer.restore', ['id' => $customer->id]) }}"><button
                                                    class="btn btn-secondary">Restore</button></a>
                                        </div>
                                    </td>
                                </tr>
                                @php
                                $i++;
                            @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
