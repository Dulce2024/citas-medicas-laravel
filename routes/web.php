<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AppointmentController;

Route::get('/doctors', [DoctorController::class, 'index']);
Route::get('/appointments', [AppointmentController::class, 'index']);