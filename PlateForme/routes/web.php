<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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

// Authentification
Route::get('/Register', [AuthController::class, 'registerView'])->name('Register');
// Route::get('/Login', [AuthController::class, 'loginView'])->name('Login');

Route::get('/login', function () {
    return view('pages.Auth.Login');
})->name('Login');

Route::post('/Register',[AuthController::class, 'Register'])->name('Form.Register');
Route::post('/Login', [AuthController::class, 'login'])->name('Form.Login');
// Route::post('/Logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/forget_password', function () {
    return view('pages.Auth.ResetPass');
})->name('forget.password');

Route::post('/forget_password_form', [AuthController::class, 'ForgetPassword'])->name('Reset.password.form');


// Route::get('/forget_password/{token}', function () {
//     return view('pages.Auth.ResetPass');
// })->name('reset.password.');
Route::get('/forget_password/{token}', function ($token) {
    return view('pages.Auth.newPassword', compact('token'));
})->name('Reset.password');
// Route::get('/forget_password/{token}', [AuthController::class, 'resetPassword'])->name('Reset.password');

Route::post('/forget_password', [AuthController::class, 'resetPassword'])->name('Reset.password.post');

Route::get('/Home', [AuthController::class, 'home'])->name('Home');


Route::resource('/Home',HomeController::class);
