<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LocaleController;

Route::get('locale/{lang}', [LocaleController::class, 'setLocale'])->name('locale');

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/ms-aerosol', [IndexController::class, 'aerosol'])->name('aerosol');
Route::get('/ms-supervisor', [IndexController::class, 'supervisor'])->name('supervisor');
Route::get('/ms-dust', [IndexController::class, 'dust'])->name('dust');
Route::get('/ms-waste', [IndexController::class, 'waste'])->name('waste');  
Route::get('/kontakt', [IndexController::class, 'contact'])->name('contact'); 
Route::get('/blog', [IndexController::class, 'blog'])->name('blog');

Route::resource('admin/blog', BlogController::class)->except('show')->middleware('auth');
Route::resource('blog', BlogController::class)->only('show');

Route::get('/admin/login', [AuthController::class, 'create'])->name('login');
Route::post('/admin/login.store',[AuthController::class, 'store'])->name('login.store');
Route::delete('logout',[AuthController::class, 'destroy'])->name('logout');

Route::post('/submit-form', [FormController::class, 'submit'])->name('form.submit');
Route::get('/sprava-odoslana', [IndexController::class, 'thankyouPage'])->name('form.submitted');
