<nav class="sidebar" id="sidebar">
    <div class="sidebar-container">
        <div class="sidebar-user">
            <div class="sidebar-img">
                <img src="{{ asset('assets/img/Logo-Cran.svg') }}" alt="User Image">
            </div>
            <div class="sidebar-info">
                @if (Auth::check())
                <h3>{{ Auth::user()->name }}</h3>
                <span>{{ Auth::user()->email }}</span>
                @else
                <h3>Usuário não autenticado</h3>
                @endif
            </div>
        </div>


        <div class="sidebar-content">
            <div>
                <h3 class="sidebar-title">PAINEL</h3>
                <div class="sidebar-list">
                    <a href="{{ route('home') }}" class="sidebar-link {{ request()->routeIs('home') ? 'active-link' : '' }}">
                        <i class="ph ph-house"></i>
                        <span>Início</span>
                    </a>
                    <a href="{{ route('animals.index') }}" class="sidebar-link {{ request()->routeIs('animals.index') ? 'active-link' : '' }}">
                        <i class="ph ph-cow"></i>
                        <span>Animais</span>
                    </a>
                </div>
            </div>

            <div>
                <h3 class="sidebar-title">AJUSTES</h3>
                <div class="sidebar-list">
                    <a href="#" class="sidebar-link">
                        <i class="ph ph-gear-six"></i>
                        <span>Settings</span>
                    </a>
                </div>
            </div>


        </div>
        <div class="sidebar-actions">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="sidebar-link">
                    <i class="ph ph-power" style="color: red;"></i>
                    <span>SAIR</span>
                </button>
            </form>
        </div>
    </div>
</nav>