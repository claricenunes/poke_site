<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Logout;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\CardapioController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\RegisterController as RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;


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

Route::get('/cardapio', function(){
   return view('cardapiovejamais');
})
->name('cardapio.page');

Route::get('/esqueci minha senha', function(){
   return view('senha');
})
->name('senha.page');

Route::get('/cardapio-veja-mais', function () {
    return view('cardapiovejamais');
})->name('cardapio.vejamais');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
});



Route::get('/reset-password', [PasswordController::class, 'showResetForm']);


Route::post('/reset-password', [PasswordController::class, 'resetPassword']);

Route::get('/mais-avaliacoes', function(){
   return view('maisavaliacoes');
})
->name('avaliacoes.page');



Route::get('/welcome', function(){
   return view('welcome');
})
->name('welcome.page');



// Mostrar formulário de email
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('password.request');

// Enviar email com token
Route::post('/forgot-password', [PasswordController::class, 'sendResetLink'])
    ->name('password.email');

// Mostrar formulário de nova senha
Route::get('/reset-password/{token}', [PasswordController::class, 'showResetForm'])
    ->name('password.reset');

// Atualizar senha
Route::post('/reset-password', [PasswordController::class, 'resetPassword'])
    ->name('password.update');