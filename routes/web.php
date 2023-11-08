<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('signup',[SignupController::class,'index'])->name('signup');
Route::post('signup',[SignupController::class,'store']);

Route::get('login',[LoginController::class,'index'])->name('login');
Route::post('login',[LoginController::class,'store']);

Route::get('client', function () {
    return view('client');
});


Route::middleware(['auth','is_admin'])->prefix('admin')->group(function(){
    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
});
