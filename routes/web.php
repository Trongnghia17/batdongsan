<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ConsultationController as AdminConsultationController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/properties', [PageController::class, 'properties'])->name('properties');
Route::get('/property/{id}', [PageController::class, 'propertySingle'])->name('property.single');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// News Routes
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');

// Consultation submission
Route::post('/consultation', [ConsultationController::class, 'store'])->name('consultation.store');

// Admin Authentication Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login.submit');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});

// Admin Routes (Protected)
Route::prefix('admin')->name('admin.')->middleware('admin')->group(function () {
    Route::get('/', function() {
        return redirect()->route('admin.properties.index');
    });
    Route::resource('properties', PropertyController::class);
    Route::resource('consultations', AdminConsultationController::class);
    Route::resource('news', AdminNewsController::class);
});
