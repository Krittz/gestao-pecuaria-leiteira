<nav class="sidebar" id="sidebar">
    <div class="sidebar-container">
        <div class="sidebar-user">
            <div class="sidebar-img">
                <img src="https://plus.unsplash.com/premium_vector-1727135180441-3065f557afd9?q=80&w=2360&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="User Image">
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
                    <a href="{{ route('home') }}" class="sidebar-link active-link">
                        <ion-icon name="pie-chart-outline"></ion-icon>
                        <span>Dashboard</span>
                    </a>
                    <a href="{{ route('animals.index') }}" class="sidebar-link">
                        <ion-icon name="fish-outline"></ion-icon>
                        <span>Animais</span>
                    </a>
                </div>
            </div>

            <div>
                <h3 class="sidebar-title">AJUSTES</h3>
                <div class="sidebar-list">
                    <a href="#" class="sidebar-link">
                        <ion-icon name="settings-outline"></ion-icon>
                        <span>Settings</span>
                    </a>
                </div>
            </div>


        </div>
        <div class="sidebar-actions">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="sidebar-link">
                    <ion-icon name="power-outline" style="color: red;"></ion-icon>
                    <span>SAIR</span>
                </button>
            </form>
        </div>
    </div>
</nav>