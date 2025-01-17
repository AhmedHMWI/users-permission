@extends('panel.layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Roles</h1>

    </div>
    <section class="section">
        <div class="row">

            <div class="col-lg-10">
                @include('_message')
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="card-title">Roles List</h5>
                            </div>
                            <div class="col-md-6" style="text-align: right;">
                                @if (!empty($PermissionAdd))
                                    <a class="btn btn-primary" style="margin-top: 10px;"
                                        href="{{ url('panel/role/add') }}">Add</a>
                                @endif
                            </div>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>name</th>
                                    <th>Date</th>
                                    @if (!empty($PermissionEdit) || !empty($PermissionDelete))
                                    <th>Action</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($getRecord as $value)
                                    <tr>
                                        <th scope="row">{{ $value->id }}</th>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->created_at }}</td>
                                        <td>
                                            @if (!empty($PermissionEdit))
                                                <a href="{{ url('panel/role/edit/' . $value->id) }}"
                                                    class="btn btn-primary btn-sm">Edit</a>
                                            @endif
                                            @if (!empty($PermissionDelete))
                                                <a href="{{ url('panel/role/delete/' . $value->id) }}"
                                                    class="btn btn-danger btn-sm">Delete</a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
