<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class PasswordController extends Controller
{
    // 🔹 Enviar email com código de recuperação
    public function sendResetLink(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->with('error', 'Se o email existir, enviaremos o código.');
        }

        $code = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);

        $user->update([
            'reset_token' => $code,
            'reset_token_expiry' => Carbon::now()->addHour()
        ]);

        Mail::raw("Seu código de recuperação de senha é: $code\n\nEste código expira em 1 hora.", function ($message) use ($user) {
            $message->to($user->email)
                    ->subject('Código de Recuperação de Senha');
        });

        return back()->with('success', 'Se o email existir, enviaremos o código.');
    }

    // 🔹 Tela de reset
 public function showResetForm()
{
    return view('auth.reset-password');
}

    // 🔹 Atualizar senha
    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'code' => 'required|string|size:6',
            'password' => 'required|min:6|confirmed'
        ]);

        $user = User::where('email', $request->email)
                    ->where('reset_token', $request->code)
                    ->where('reset_token_expiry', '>', Carbon::now())
                    ->first();

        if (!$user) {
            return back()->with('error', 'Código inválido, expirado ou email incorreto.');
        }

        $user->update([
            'password' => Hash::make($request->password),
            'reset_token' => null,
            'reset_token_expiry' => null
        ]);

        return redirect('/login')->with('success', 'Senha redefinida com sucesso!');
    }
}
