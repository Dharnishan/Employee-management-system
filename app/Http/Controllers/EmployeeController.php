<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {  
        $data = $request->except('_token');
        //Employee::create($data);
        $employee = new Employee;
        $employee ->name = $data['name'];
        $employee ->email = $data['email'];
        $employee ->joining_date = $data['joining_date'];
        $employee ->salary = $data['salary'];
        $employee ->phone = $data['phone'];
        $employee ->is_active = $data['is_active'];
        $employee ->save();
        dd('successfully created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return view('update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return view('update');
    }
}
