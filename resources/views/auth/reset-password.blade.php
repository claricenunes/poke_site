<form method="POST" action="/reset-password">
    @csrf

    <input type="email" name="email" placeholder="Digite seu email" required>
    <input type="text" name="code" placeholder="Código de recuperação (6 dígitos)" maxlength="6" required>
    <input type="password" name="password" placeholder="Nova senha" required>
    <input type="password" name="password_confirmation" placeholder="Confirmar nova senha" required>

    <button type="submit">Alterar senha</button>
</form>
