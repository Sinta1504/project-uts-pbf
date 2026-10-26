<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FitnessController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

// ===== Template Landing: Fitness =====
Route::get('/fitness', [FitnessController::class, 'index'])->name('fitness.index');
Route::get('/fitness/about', [FitnessController::class, 'about'])->name('fitness.about');
Route::get('/fitness/course', [FitnessController::class, 'course'])->name('fitness.course');
Route::get('/fitness/blog', [FitnessController::class, 'blog'])->name('fitness.blog');
Route::get('/fitness/feature', [FitnessController::class, 'feature'])->name('fitness.feature');
Route::get('/fitness/contact', [FitnessController::class, 'contact'])->name('fitness.contact');

// ===== Template Admin: Studio =====
Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/form-elements', [AdminController::class, 'formElements'])->name('admin.form');
Route::get('/admin/table-plugins', [AdminController::class, 'tablePlugins'])->name('admin.table');
Route::get('/admin/calendar', [AdminController::class, 'calendar'])->name('admin.calendar');
Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::get('/admin/modal-notification', [AdminController::class, 'modalNotification'])->name('admin.modal');