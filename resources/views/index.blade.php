@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <strong>Employee List</strong>
                        <a href="{{route('employee.create')}}" class="btn btn-primary btn-xs float-end py-0">Create Employee</a>
                        <table class="table table-responsive table-bordered table-striped mt-3">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Joining Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>John Doe</td>
                                    <td>john.doe@example.com</td>
                                    <td>2024-01-10</td>
                                    <td><span class="btn btn-success btn-xs py-0">Active</span></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary btn-xs py-0 mx-1">Show</a>
                                            <a href="#" class="btn btn-warning btn-xs py-0 mx-1">Edit</a>
                                            <form action="#" method="POST" class="d-inline">
                                                <button type="submit" class="btn btn-danger btn-xs py-0">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
 @endsection