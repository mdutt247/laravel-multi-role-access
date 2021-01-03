<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum'])->group(function () {

    Route::middleware(['admin'])->group(function () {
        Route::get('dashboard/adminpage', [AdminController::class, 'index'])->name('adminpage');
        // More routes here belonging to admin role
    });

    Route::middleware(['author'])->group(function () {
        Route::get('dashboard/authorpage', [AuthorController::class, 'index'])->name('authorpage');
        // More routes here belonging to author role
    });
});
