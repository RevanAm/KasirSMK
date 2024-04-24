<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);
Route::get('contact-us', [ContactUsController::class, 'index']);
Route::post('contact-us', [ContactUsController::class, 'submit']);

//Login
Route::get('login', [UserController::class, 'index'])->name('login');
Route::post('login/check', [UserController::class, 'CheckLogin'])->name('CheckLogin');
Route::get('logout', [UserController::class, 'logout'])->name('logout');
