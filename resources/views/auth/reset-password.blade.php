<form method="POST" action="/reset-password">
    @csrf
    <input type="hidden" name="token" value="{{ $token ?? '' }}">


    <input type="password" name="password" placeholder="Nova senha">
    <input type="password" name="password_confirmation" placeholder="Confirmar senha">

    <button type="submit">Alterar senha</button>
</form>
