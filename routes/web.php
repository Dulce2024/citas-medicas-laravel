<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AppointmentController;

Route::get('/', function () {
    return view('welcome');
});

// Rutas CRUD para Doctores
Route::get('/doctors', [DoctorController::class, 'index']);
Route::post('/doctors', [DoctorController::class, 'store']);
Route::get('/doctors/{id}', [DoctorController::class, 'show']);
Route::put('/doctors/{id}', [DoctorController::class, 'update']);
Route::delete('/doctors/{id}', [DoctorController::class, 'destroy']);

// Rutas Citas (index)
Route::get('/appointments', [AppointmentController::class, 'index']);

Route::get('/doctors-view', function () {
    $doctors = \App\Models\Doctor::all();
    return view('doctors', compact('doctors'));
});