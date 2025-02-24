@extends('layouts.app')
@section('content')
        <a href="#" class="btn btn-secondary mb-3">Back to List</a>
        <div class="card">
            <div class="card-body">
                <p style="font-size:20px; font-weight:bold;">Update Employee</p>
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="John Doe" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="johndoe@example.com" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control" value="123-456-7890" required>
                    </div>
                    <div class="form-group">
                        <label for="joining_date">Joining Date</label>
                        <input type="date" name="joining_date" id="joining_date" class="form-control" value="2024-01-01" required>
                    </div>
                    <div class="form-group">
                        <label for="joining_salary">Joining Salary</label>
                        <input type="number" name="salary" id="joining_salary" class="form-control" value="50000" required>
                    </div>
                    <div class="form-group">
                        <label for="is_active">Active</label><br>
                        <input type="checkbox" name="is_active" id="is_active" value="1" checked>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Update Employee</button>
                </form>
            </div>
        </div>
@endsection