@extends('layouts.app')
@section('content')
        <div class="card">
            <div class="card-body">
                <p style="font-size:20px; font-weight:bold;">Employee Details</p>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" value="John Doe" readonly>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" value="johndoe@example.com" readonly>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" value="123-456-7890" readonly>
                </div>
                <div class="form-group">
                    <label for="joining_date">Joining Date</label>
                    <input type="date" class="form-control" value="2024-01-01" readonly>
                </div>
                <div class="form-group">
                    <label for="joining_salary">Joining Salary</label>
                    <input type="number" class="form-control" value="50000" readonly>
                </div>
                <div class="form-group">
                    <label for="is_active">Active</label><br>
                    <input type="checkbox" checked readonly>
                </div>
                <a href="#" class="btn btn-primary mt-3">Back</a>
            </div>
        </div>
    </div>
@endsection