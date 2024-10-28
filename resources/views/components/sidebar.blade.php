<nav class="sidebar" id="sidebar">
    <div class="sidebar-container">
        <div class="sidebar-user">
            <div class="sidebar-img">
                <img src="https://via.placeholder.com/100" alt="User Image">
            </div>
            <div class="sidebar-info">
                <h3>Rix Methil</h3>
                <span>rix123@email.com</span>
            </div>
        </div>

        <div class="sidebar-content">
            <div>
                <h3 class="sidebar-title">MANAGE</h3>
                <div class="sidebar-list">
                    <a href="{{ route('home') }}" class="sidebar-link active-link">
                        <ion-icon name="pie-chart-outline"></ion-icon>
                        <span>Dashboard</span>
                    </a>
                    <a href="{{ route('animals.index') }}" class="sidebar-link">
                        <ion-icon name="albums-outline"></ion-icon>
                        <span>Animais</span>
                    </a>
                </div>
            </div>

            <div>
                <h3 class="sidebar-title">SETTINGS</h3>
                <div class="sidebar-list">
                    <a href="#" class="sidebar-link">
                        <ion-icon name="settings-outline"></ion-icon>
                        <span>Settings</span>
                    </a>
                </div>
            </div>


        </div>
        <div class="sidebar-actions">


            <button class="sidebar-link">
                <i class="ri-logout-box-r-fill"></i>
                <span>Log Out</span>
            </button>
        </div>
    </div>
</nav>