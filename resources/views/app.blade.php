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
                <form action="#">
                    <input type="search" name="search" id="search">
                    <button type="submit"><ion-icon name="search-outline"></ion-icon></button>
                </form>
            </div>
            @yield('content')
        </div>
    </main>
    <footer></footer>
    <script src="{{ asset('assets/js/nav.js') }}"></script>

</body>

</html>