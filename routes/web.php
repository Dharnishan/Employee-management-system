<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Sample;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-us',[HomeController::class,'aboutUs']);

Route::get('/chumma',[Sample::class,'samp']);
Route::group(['prefix'=>'admin'],function(){
    Route::get('/user/{id}',function($id){
        return 'user id is <b>'.$id.'</b>';
    });
    Route::get('/settings',function(){
        return 'setting';
    });
});


Route::group(['prefix'=>'fruits'],function(){
    Route::get('/apple', function(){
        return '<h1>Apple</h1>';
    });
    
    Route::get('/banana',function(){
        return 'banana';
    });
});




Route::get('/article/technology/dharnish-100',function(){
    return 'I will do it :)';
})->name('article');
 
//Employee Routes
Route::get('/employees',[EmployeeController::class,'index']);
Route::get('/employees/create',[EmployeeController::class,'create'])->name('employee.create');
Route::post('/employees/store',[EmployeeController::class,'store'])->name('employees.store');