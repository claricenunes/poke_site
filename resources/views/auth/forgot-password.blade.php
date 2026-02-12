<form method="POST" action="/forgot-password">
    @csrf
    <input type="email" name="email" placeholder="Digite seu email">
    <button type="submit">Recuperar senha</button>
</form>
