<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class SenhaController extends Controller
{
    public function enviarCodigo(Request $request)
    {
        $email = $request->email;

        // verificar se o email existe
        $user = User::where('email', $email)->first();

        if (!$user) {
            return back()->with('erro', 'Este email não está cadastrado.');
        }

        // gerar código
        $codigo = rand(100000, 999999);

        session([
            'codigo_verificacao' => $codigo,
            'codigo_expira_em' => now()->addMinutes(5),
            'email_recuperacao' => $email
        ]);

        // enviar email
        Mail::raw("Seu código de recuperação de senha é: $codigo", function ($message) use ($email) {
            $message->to($email)
                    ->subject('Código de recuperação de senha');
        });

        return back()->with('sucesso', 'Código enviado para seu email!');
    }
    public function verificarCodigo(Request $request)
    {
        if($request->codigo == session('codigo_verificacao')){
            return redirect()->route('nova.senha');
        }

        return back()->with('erro','Código inválido');
    }

    public function atualizarSenha(Request $request)
    {
        $request->validate([
            'senha'=>'required|min:6|confirmed'
        ]);

        $user = User::where('email', session('email_recuperacao'))->first();

        $user->password = Hash::make($request->senha);
        $user->save();

        session()->forget(['codigo_verificacao','email_recuperacao']);

        return redirect('/login')->with('sucesso','Senha alterada com sucesso!');
    }
}