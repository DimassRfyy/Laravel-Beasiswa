<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\FrontController;

Route::get('/', [FrontController::class, 'home'])->name('home');
Route::get('/sponsorship', [FrontController::class, 'sponsorship'])->name('sponsorship');
Route::get('/partnership', [FrontController::class, 'partnership'])->name('partnership');
Route::get('/mentor', [FrontController::class, 'mentor'])->name('mentor');
Route::get('/coach', [FrontController::class, 'coach'])->name('coach');
Route::get('/donation', [FrontController::class, 'donation'])->name('donation');
Route::get('/blog', [FrontController::class, 'blog'])->name('blog');
Route::get('/blog/example', [FrontController::class, 'blogDetail'])->name('blog.detail');
