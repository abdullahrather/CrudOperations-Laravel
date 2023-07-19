@extends('frontend.layouts.main')
@section('main-container')
    @push('Title')
        <title>Customer Record</title>
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
                <form action="">
                    <x-search-bar />
                </form>
                <div class="button-container">
                    <a href="{{ route('customer.create') }}">
                        <x-button buttonclass="btn btn-primary d-inline-block m-2" title="Add Record" />
                    </a>
                    <a href="{{ route('customer.trash') }}">
                        <x-button buttonclass="btn btn-danger d-inline-block m-2" title="Go to Trash" />
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
                                <th>Group Name</th>
                                <th>Group Logo</th>
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
                                    <td>{{ $customer->group->grp_name }}</td>
                                    <td>
                                        @if ($customer->group->grp_logo)
                                            <img src="{{ asset('storage/' . $customer->group->grp_logo) }}" alt="Group Logo"
                                                width="100">
                                        @else
                                            No Logo
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
                                            <a href="{{ route('customer.delete', ['id' => $customer->id]) }}">
                                                <x-button buttonclass="btn btn-danger" title="Trash" />
                                            </a>
                                            <a href="{{ route('customer.edit', ['id' => $customer->id]) }}">
                                                <x-button buttonclass="btn btn-secondary" title="Edit" />
                                            </a>
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
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="pagination justify-content-center">
                            {{ $customers->links() }}
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </section>
@endsection
