<form action="{{ route('register') }}" method="POST">
    @csrf
    <input type="text" name="name" id="name" placeholder="Nome" required />
    <input type="email" name="email" id="email" placeholder="E-mail" required />
    <input type="password" name="password" id="password" placeholder="Senha" required />
    <button type="submit">Registrar</button>
</form>