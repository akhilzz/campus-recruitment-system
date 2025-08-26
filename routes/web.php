<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentRegController;
use App\Http\Controllers\DashboardController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});





// CREATE USER user WITH PASSWORD 'password' SUPERUSER;


use App\Http\Middleware\PublicMiddleware;

Route::middleware([PublicMiddleware::class])->group(function () {
    // Signup and login routes here

Route::get('/signup', [AuthController::class, 'showSignupForm']);
Route::post('/signup', [AuthController::class, 'submitSignupForm'])->name('signup.submit');
Route::get('/login', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'processLogin']);
Route::get('/stud_reg', [StudentRegController::class, 'create']);
Route::get('/dashboard', [DashboardController::class, 'dashboard']);

});