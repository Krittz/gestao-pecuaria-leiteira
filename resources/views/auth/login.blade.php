<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krittz | Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    <!-- Icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.4.0/fonts/remixicon.css" rel="stylesheet" />
    <!-- // Icons -->
</head>

<body>
    @if ($errors->any())
    <div class="notify">
        <div class="notify-header">
            <div class="notify-title">
                <ion-icon name="notifications-outline"></ion-icon>
                <h1>Notificação</h1>
            </div>
            <div class="notify-close">
                <ion-icon name="close-outline"></ion-icon>
            </div>
        </div>
        <div class="notify-content">
            @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
        </div>
    </div>
    @endif
    <div class="auth">
        <div class="auth-title">
            <div class="title">
                <ion-icon name="code-slash-outline"></ion-icon>
                <h1>Krittz</h1>
            </div>
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
                <ion-icon name="eye-off-outline" id="show-pass"></ion-icon>
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