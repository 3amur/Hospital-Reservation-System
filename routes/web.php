<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ContactController;

// Front Routes
Route::controller('HomeController')->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/home', [HomeController::class, 'redirect']);
    Route::get('/about', [AboutController::class, 'index'])->name('about');
    Route::get('/doctors', [DoctorController::class, 'index'])->name('doctors');
    Route::get('/contact-us', [ContactController::class, 'index'])->name('contact');
    Route::post('/send-message', [ContactController::class, 'sendMessage'])->name('contact.sendMessage');
    Route::get('/contact/store', [ContactController::class, 'store'])->name('contact-store');
    Route::post('/user/appointment', [HomeController::class, 'storeAppointment'])->name('appointment');
    Route::get('/myappointment', [HomeController::class, 'showAppointment'])->name('allappointment');
    Route::get('cancelAppointment/{id}', [HomeController::class, 'cancelAppointment'])->name('cancel_Appointment');
    Route::get('/user/logout', [HomeController::class, 'logout'])->name('user.logout');
});

// Admin Routes
Route::name('doctor.')->prefix('admin')->group(function(){
    Route::get('/doctors', [AdminController::class, 'index'])->name('all');
    Route::get('/create', [AdminController::class, 'create'])->name('create');
    Route::post('/add_doctor',[AdminController::class, 'addDoctor'])->name('addDoctor');
    Route::get('/editDoctor/{id}', [AdminController::class, 'editDoctor'])->name('edit');
    Route::post('/updateDoctor/{id}',[AdminController::class, 'updateDoctor'])->name('update');
    Route::delete('/deleteDoctor/{id}', [AdminController::class, 'deleteDoctor'])->name('delete');
    Route::get('/allAppointments',[AdminController::class, 'allAppointments'])->name('appointments');
    Route::get('/approved/{id}',[AdminController::class, 'approveAppointment'])->name('approved');
    Route::get('/canceled/{id}',[AdminController::class, 'cancelAppointment'])->name('canceled');
});

Route::middleware([
    'auth:sanctum',
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});