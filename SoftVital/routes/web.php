<?php

use App\Http\Controllers\Authentification\AuthController;
use Illuminate\Support\Facades\Route;

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
    return view('Home');
})->name('/');

Route::get('/home', function () {
    return view('SoftVital.index');
})->name('home');


Route::resource('/Authentification',AuthController::class);

Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/auth', [AuthController::class, 'login'])->name('login');

Route::get('/forget_password', function () {
    return view('Authentification.resset_form');
})->name('forget_password');

Route::post('/resset_form',[AuthController::class,'ForgetPassword'])->name('resetPassword');

Route::post('/forget_password_form', [AuthController::class, 'ForgetPassword'])->name('Reset.password.form');

Route::get('/reset-password/{token}', function ($token) {
    return view('Authentification.new_password', compact('token'));
})->name('new_pass');

Route::post('/new_password',[AuthController::class, 'resetPassword'])->name('pass_form');
