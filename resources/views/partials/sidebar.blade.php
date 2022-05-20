<nav class="sidebar ">
    <header>
        <div class="image-text">
            <span class="image">
                <!--<img src="logo.png" alt="">-->
            </span>

            <div class="text logo-text">
                <span class="name">{{ env('APP_NAME') }}</span>
                <span class="profession">Agadir</span>
            </div>
        </div>
        <i class="bx bx-chevron-right toggle"></i>
    </header>
    <div class="menu-bar">
        <div class="menu">
            <li class="search-box">
                <i class="bx bx-search icon"></i>
                <input type="text" placeholder="Search...">
            </li>
            <ul class="menu-links">
                <li class="nav-link">
                    <a href="{{ route('users.index') }}">
                        <i class="bx bx-home-alt icon"></i>
                        <span class="text nav-text">Gestion utlisateur</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="{{ route('clients.index') }}">
                        <i class="bx bx-bar-chart-alt-2 icon"></i>
                        <span class="text nav-text">Gestion client</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="{{ route('products.index') }}">
                        <i class="bx bx-bell icon"></i>
                        <span class="text nav-text">Gestion produit</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="#">
                        <i class="bx bx-pie-chart-alt icon"></i>
                        <span class="text nav-text">Gestion commande</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="bottom-content">
            <li class="">
                <a href="javascript:;"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                    <i class="bx bx-log-out icon"></i>
                    <span class="text nav-text">Logout</span>
                </a>
                <form action="/logout" method="POST" id="logout-form">
                    @csrf
                </form>
            </li>
            <li class="mode">
                <div class="sun-moon">
                    <i class="bx bx-moon icon moon"></i>
                    <i class="bx bx-sun icon sun"></i>
                </div>
                <span class="mode-text text">Dark mode</span>

                <div class="toggle-switch">
                    <span class="switch"></span>
                </div>
            </li>
        </div>
    </div>
</nav>
