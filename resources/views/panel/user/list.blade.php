@extends('panel.layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Users</h1>

    </div>
    <section class="section">
        <div class="row">

            <div class="col-lg-10">
                @include('_message')
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="card-title">Users List</h5>
                            </div>
                            <div class="col-md-6" style="text-align: right;">
                                <a class="btn btn-primary" style="margin-top: 10px;"
                                    href="{{ url('panel/user/add') }}">Add</a>
                            </div>
                        </div>
                        <!-- Table with stripped rows -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($getRecord as $value)
                                    <tr>
                                        <th scope="row">{{ $value->id }}</th>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->email }}</td>
                                        <td>{{ $value->role_name }}</td>
                                        <td>{{ $value->created_at }}</td>
                                        <td>
                                            <a href="{{ url('panel/user/edit/' . $value->id) }}"
                                                class="btn btn-primary btn-sm">Edit</a>
                                            <a href="{{ url('panel/user/delete/' . $value->id) }}"
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
