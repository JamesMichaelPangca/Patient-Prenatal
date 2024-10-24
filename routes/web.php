<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientEnrollmentRecordController;
use App\Http\Controllers\PrenatalVisitRecordController;



Route::get('/', function () {
    return redirect('/login');
});
Route::get('/dashboard', function () {
    return view('/pages.customers.index');
});


Route::get('/prenatalVisitRecord', [PrenatalVisitRecordController::class, 'index']);
Route::post('/prenatalVisitRecord/registration', [PrenatalVisitRecordController::class, 'store'])->name('prenatal.save');


Route::get('/patientEnrollmentRecord', [PatientEnrollmentRecordController::class, 'index']);
Route::post('/patientEnrollmentRecord/registration', [PatientEnrollmentRecordController::class, 'store'])->name('patient.save');


