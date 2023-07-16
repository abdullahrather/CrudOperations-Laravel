@extends('frontend.layouts.main')
@section('main-container')
    @push('Title')
        <title>Group Trash</title>
    @endpush
    @push('li')
        <li>Group Trash</li>
    @endpush
    <section id="#" class="d-flex align-items-center">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Group Trash Records</h2>
            </div>
            <div class="row content">
                <div class="button-container">
                    <a href="{{ route('group.view') }}">
                        <button class="btn btn-primary d-inline-block m-2 float-right">Go to Groups</button>
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm">
                        <thead class="thead-dark">
                            <tr>
                                <th>Sr.</th>
                                <th>Group Name</th>
                                <th>Group Description</th>
                                <th>Group Logo</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i = 1;
                        @endphp
                            @foreach ($groups as $group)
                                <tr>
                                    <td scope="row">{{ $i }}</td>
                                    <td>{{ $group->grp_name }}</td>
                                    <td>{{ $group->grp_desc }}</td>
                                    <td>
                                        @if ($group->grp_logo)
                                            <img src="{{ asset('storage/' . $group->grp_logo) }}" alt="Group Logo"
                                                width="100">
                                        @else
                                            No Image
                                        @endif
                                    </td>
                                    <td>
                                        @if ($group->status == '1')
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
                                            <a href="{{ route('group.force.delete', ['grp_id' => $group->grp_id]) }}"><button
                                                    class="btn btn-danger">Delete</button></a>
                                            <a href="{{ route('group.restore', ['grp_id' => $group->grp_id]) }}"><button
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
