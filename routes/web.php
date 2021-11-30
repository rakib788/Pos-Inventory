<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CustomerController;

Route::group(['prefix' => 'admin'], function () {

Route::group(['middleware'=>'guest'],function(){
    Route::get('/',[LoginController::class, 'showLoginFrom'])->name('login');
    Route::post('/',[LoginController::class, 'loginproccess'])->name('login.proccess');
});

Route::group(['middleware' => 'auth'], function () {

        // Logout
        Route::get('logout',[LoginController::class, 'logout'])->name('logout');
        // Dashboard
        Route::get('/dashboard',[DashboardController::class, 'dashboard'])->name('dashboard');
        // Employee
        Route::get('add/employee',[EmployeeController::class,'addEmployee'])->name('addEmployee');
        Route::post('insert/employee',[EmployeeController::class,'insertEmployee'])->name('insertEmployee');
        Route::get('all/employee',[EmployeeController::class,'allEmployee'])->name('allEmployee');
        Route::get('delete/employee{id}',[EmployeeController::class,'deleteEmployee'])->name('deleteEmployee');
        Route::get('view/employee{id}',[EmployeeController::class,'viewEmployee'])->name('viewEmployee');
        Route::get('edit/employee{id}',[EmployeeController::class,'editEmployee'])->name('editEmployee');
        Route::post('update/employee{id}',[EmployeeController::class,'updateEmployee'])->name('updateEmployee');

        // Customer
        Route::get('add/customer',[CustomerController::class, 'addCustomer'])->name('addCustomer');
    });
});
