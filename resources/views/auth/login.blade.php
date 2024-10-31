<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krittz | Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="icon" href="{{ asset('assets/img/favicon.ico') }}" type="image/x-icon">

    <!-- Icons -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <!-- // Icons -->
</head>

<body>
    @if ($errors->any())
    <div class="notify">
        <div class="notify-header">
            <div class="notify-title">
                <i class="ph ph-bell"></i>
                <h1>Notificação</h1>
            </div>
            <div class="notify-close">
                <i class="ph ph-x-circle"></i>
            </div>
        </div>
        <div class="notify-content">
            @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
        </div>
    </div>
    @endif
    <img src="{{ asset('assets/img/Logo-Cran.svg')}}" alt="Logo-CrAn" id="logo-cran">

    <div class="auth">
        <div class="auth-title">
            <span>Login</span>
        </div>
        <form action="{{ route('login') }}" method="POST">

            @csrf

            <div class="auth-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required />
            </div>
            <div class="auth-group">
                <label for="password">Senha</label>
                <input type="password" name="password" id="password" required />
                <i class="ph ph-eye-slash" id="show-pass"></i>
            </div>
            <div class="auth-buttons">
                <button type="submit">Entrar</button>
                <span>ou</span>
                <a href="{{ route('register') }}">Registrar-se</a>
            </div>
        </form>
    </div>

    <script src="{{ asset('assets/js/show-pass.js') }}"></script>
    <script src="{{ asset('assets/js/notify.js') }}"></script>
</body>

</html>