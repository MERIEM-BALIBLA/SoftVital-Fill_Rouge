<?php

use App\Http\Controllers\Authentification\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\medecin\dashboard\PostController;
use App\Http\Controllers\medecin\dashboard\ProfileController;
use App\Http\Controllers\medecin\profil\ProfilController;
use Illuminate\Support\Facades\Route;

Route::resource('/', HomeController::class)->names([
    'index' => '/'
]);

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



// Medecin Route 

Route::get('dash',function(){
    return view('medecin/index');
});

// 

// post
Route::resource('post', PostController::class)->names([
    'index' => 'dashboard_medecin',
    'create' => 'create',
    'store' => 'store',
    'edit' => 'edit',
    'update' => 'update',
    'destroy' => 'destroy',
]);

// profil
Route::get('/dashboard/profile', [ProfileController::class, 'index'])->name('dash.profile');
Route::put('/modifier_mes_informations_personnelles', [ProfileController::class, 'update_InfoPersonnelle'])->name('update_InfoPersonnelle');
Route::put('/modifier_mes_informations_professionnel', [ProfileController::class, 'update_Proffesionnel'])->name('updateProffesionInfo');
Route::match(['put', 'post'], '/modifier_image', [ProfileController::class, 'uploadProfileImage'])->name('uploadProfileImage');

// page profil de medecin
// Route::get('profile',function(){
//     return view("medecin.profil.index");
// });
// Route::get('profile', [ProfilController::class, 'index']);
Route::get('mon_profil', [ProfilController::class, 'index']);