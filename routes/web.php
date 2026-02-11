<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Logout;
use App\Http\Controllers\LogoutController;

use App\Http\Controllers\Auth\RegisterController as RegisterController;

Route::get('/', function () {
    return view('welcome');
});

// ORDER PAGE
Route::get('/order', function () {
    return view('order');
})->name('order.page');

// LOGIN
Route::get('/login', [AuthController::class, 'showLoginForm'])
    ->name('login.page');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');

// REGISTER
Route::get('/register', [AuthController::class, 'registerForm'])->name('register.page');
Route::post('/register', [AuthController::class, 'register'])->name('register.store');

// endereço
Route::get('/endereco', function(){
   return view('endereco');
})
->name('endereco.page');
 
// delivery
//Route::get('/delivery', function(){
  // return view('delivery');
//})
//->name('delivery.page');

Route::post('/logout', [LogoutController::class, 'logout'])
    ->name('logout');
