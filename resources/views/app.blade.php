<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include ('components.head')
</head>

<body>
    @include('components.header')

    @include('components.sidebar')

    <main class="main container" id="main">
        <div class="content">
            <div class="section-header">
                <h1 class="section-title">@yield('section-title', 'Início')</h1>
                @yield('search')
            </div>
            @yield('content')
        </div>
    </main>
    <footer></footer>
    <script src="{{ asset('assets/js/nav.js') }}"></script>
    <script src="{{ asset('assets/js/notify.js') }}"></script>
    <script src="{{ asset('assets/js/dropdown.js') }}"></script>

</body>

</html>