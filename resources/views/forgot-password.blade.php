@extends('layouts.index')

@section('title', 'Esqueci minha senha | Bowl')

@section('content')
<section id="senha">
    <h2 class="section-title">Esqueci minha senha</h2>
    <h3 class="section-subtitle">Não se preocupe, vamos te ajudar a recuperar sua senha!</h3>

    <div class="login-form">
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <input type="email" name="email" placeholder="Digite seu email" required>

            <div class="buttons">
                <button type="submit">Enviar link</button>
                <button type="button" onclick="window.location='{{ url('/') }}'">Voltar</button>
            </div>

            @if(session('status'))
                <p style="color: green; margin-top: 10px;">{{ session('status') }}</p>
            @endif

            @error('email')
                <p style="color: red; margin-top: 10px;">{{ $message }}</p>
            @enderror
        </form>
    </div>
</section>
@endsection