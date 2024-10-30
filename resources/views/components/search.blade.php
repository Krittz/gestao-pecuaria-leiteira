<form action="@yield('search-action', route('animals.index'))" method="GET">
    <input type="search"
        name="search"
        id="search"
        placeholder="@yield('search-placeholder', 'Pesquisar...')"
        value="{{ old('search', $search ?? '') }}">
    <button type="submit">
        <ion-icon name="search-outline"></ion-icon>
    </button>
</form>