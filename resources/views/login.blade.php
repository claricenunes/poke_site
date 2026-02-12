@extends('layouts.index')

@section('title', 'Login | Bowl')

@section('content')
    <div class="login-form">
        <h1>Página de Login</h1>

        <form method="POST" action="{{ route('login.process') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" class="form-input" type="email" name="email" placeholder="seu@email.com">
            </div>

            <div class="form-group">
                <label for="password">Senha</label>
                <input id="password" class="form-input" type="password" name="password" placeholder="••••••••">
            </div>
             </form>

        <div class="buttons">
    <button type="submit" class="btn-default btn-primary">
        Entrar
    </button>
</div>
</form>

<div class="buttons">
    <a href="{{ route('register.page') }}" class="btn-register">
        Registrar
    </a>
</div>

<div class="buttons">
    <a href="{{ route('senha.page') }}" class="btn-register">
        Esqueci minha senha
    </a>
</div>

    </div>
@endsection
