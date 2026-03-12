@extends('layouts.index')

@section('title', 'Definir nova senha | Bowl')

@section('content')

<div class="nova-senha-wrapper">
    <form method="POST" action="{{ route('atualizar.senha') }}" class="form-container">
        @csrf

        <h2>Definir nova senha</h2>

        <input type="hidden" name="email" value="{{ session('email_recuperacao') }}">

        <input type="password" name="senha" placeholder="Nova senha" required>

        <input type="password" name="senha_confirmation" placeholder="Confirmar senha" required>

        <button type="submit">
            Alterar senha
        </button>
    </form>
</div>

@endsection