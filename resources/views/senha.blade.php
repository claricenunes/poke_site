@extends('layouts.index')

@section('title', 'Esqueci minha senha | Bowl')

@section('content')
<section id="senha">
    <h2 class="section-title">
        Esqueci minha senha
    </h2>
    <h3 class="section-subtitle">
        Não se preocupe, vamos te ajudar a recuperar sua senha!
    </h3>

    <div class="login-form">
    <form method="POST" action="{{ route('password.email') }}">
    @csrf
    <input type="email" name="email" placeholder="Digite seu email" required>
    <button type="submit">Enviar link de recuperação</button>
</form>
</div>
</section>
@endsection