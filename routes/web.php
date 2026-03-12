<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Logout;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\CardapioController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\RegisterController as RegisterController;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\SenhaController;



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

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('password.request');

Route::post('/enviar-codigo', [SenhaController::class, 'enviarCodigo'])
    ->name('enviar.codigo');

Route::post('/verificar-codigo',[SenhaController::class,'verificarCodigo'])->name('verificar.codigo');

Route::get('/nova-senha',function(){
    return view('nova-senha');
})->name('nova.senha');

Route::post('/atualizar-senha',[SenhaController::class,'atualizarSenha'])->name('atualizar.senha');

// Route::get('/enviar.codigo/{email}', function ($email) {

//     $codigo = rand(100000, 999999);

//     // salva código e tempo de expiração
//     session([
//         'codigo_verificacao' => $codigo,
//         'codigo_expira_em' => now()->addMinutes(5)
//     ]);

//     Mail::raw("Seu código de verificação é: $codigo", function ($message) use ($email) {
//         $message->to($email)
//                 ->subject('Código de verificação');
//     });

//     return "Código enviado para $email";
// });

Route::get('/verificar-codigo/{codigo}', function ($codigoDigitado) {

    $codigo = session('codigo_verificacao');
    $expiracao = session('codigo_expira_em');

    if (!$codigo || !$expiracao) {
        return "Nenhum código foi gerado.";
    }

    if (now()->greaterThan($expiracao)) {
        return "Código expirado.";
    }

    if ($codigoDigitado == $codigo) {
        return "Código correto!";
    }

    return "Código inválido.";
});