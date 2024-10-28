<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krittz | @yield('title', 'Home')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">


    <!-- Icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.4.0/fonts/remixicon.css" rel="stylesheet" />
    <!-- // Icons -->

</head>

<body>
    @include('components.header')

    @include('components.sidebar')

    <main class="main container" id="main">

        @yield('content')
    </main>
    <footer></footer>
    <script src="{{ asset('assets/js/nav.js') }}"></script>

</body>

</html>