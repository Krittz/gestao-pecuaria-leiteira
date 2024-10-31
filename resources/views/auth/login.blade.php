<form action="{{ route('login') }}" method="POST">

    @csrf
    <input type="email" name="email" id="email" placeholder="Email" required />
    <input type="password" name="password" id="password" placeholder="Senha" required />
    <button type="submit">Entrar</button>
    <a href="{{ route('register') }}">Registrar-se</a>
</form>