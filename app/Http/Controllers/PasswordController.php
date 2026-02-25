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
    public function sendResetLink(Request $request)
{
    dd($request->all());
}

    // 🔹 Mostrar tela de reset
    public function showResetForm($token)
    {
        return view('auth.reset-password', [
            'token' => $token
        ]);
    }

    // 🔹 Atualizar senha
    public function resetPassword(Request $request)
    {
        $request->validate([
            'password' => 'required|min:6|confirmed'
        ]);

        $user = User::where('reset_token', $request->token)
                    ->where('reset_token_expiry', '>', Carbon::now())
                    ->first();

        if (!$user) {
            return back()->with('error', 'Token inválido ou expirado.');
        }

        $user->update([
            'password' => Hash::make($request->password),
            'reset_token' => null,
            'reset_token_expiry' => null
        ]);

        return redirect('/login')->with('success', 'Senha redefinida com sucesso!');
    }
}