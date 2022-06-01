
    <nav class="sidebar">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="{{ asset('images/logo.png') }}" alt=""/>
                </span>
                
                <div class="text header-text">
                    <span class="name">Perpuskuy</span>
                    <span class="profession">SDN 123456</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>
        <div class="menu_bar">
            <div class="menu">
                <ul class="menu-links">
                    <li class="nav-link {{ 'dashboard' == request()->path() ? 'active' : '' }}">
                        <a href="{{ route('dashboard') }}">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
                    @if (auth()->user()->level=="admin")
                    <li class="nav-link {{ 'user' == request()->path() ? 'active' : '' }}">
                        <a href="{{ route('user') }}">
                            <i class='bx bx-user icon'></i>
                            <span class="text nav-text">Users</span>
                        </a>
                    </li>
                    <li class="nav-link {{ 'books' == request()->path() ? 'active' : '' }}">
                        <a href="{{ route('books') }}">
                            <i class='bx bx-library icon'></i>
                            <span class="text nav-text">Books</span>
                        </a>
                    </li>
                    <li class="nav-link {{ 'borrows' == request()->path() ? 'active' : '' }}">
                        <a href="{{ route('borrows') }}">
                            <i class='bx bx-time-five icon'></i>
                            <span class="text nav-text">Peminjaman</span>
                        </a>
                    </li>
                    <li class="nav-link {{ 'returns' == request()->path() ? 'active' : '' }}">
                        <a href="{{ route('returns') }}">
                            <i class='bx bx-check icon'></i>
                            <span class="text nav-text">Pengembalian</span>
                        </a></li>
                    @else
                    <li class="nav-link {{ 'user' == request()->path() ? 'active' : '' }}">
                        <a href="{{ route('user') }}">
                            <i class='bx bx-user icon'></i>
                            <span class="text nav-text">{{ auth()->user()->name }}</span>
                        </a>
                    </li>
                    <li class="nav-link {{ 'books' == request()->path() ? 'active' : '' }}">
                        <a href="{{ route('books') }}">
                            <i class='bx bx-library icon'></i>
                            <span class="text nav-text">Books</span>
                        </a>
                    </li>
                    <li class="nav-link {{ 'borrows' == request()->path() ? 'active' : '' }}">
                        <a href="{{ route('borrows') }}">
                            <i class='bx bx-time-five icon'></i>
                            <span class="text nav-text">Peminjaman</span>
                        </a>
                    </li>
                    <li class="nav-link {{ 'returns' == request()->path() ? 'active' : '' }}">
                        <a href="{{ route('returns') }}">
                            <i class='bx bx-check icon'></i>
                            <span class="text nav-text">Pengembalian</span>
                        </a></li>
                    @endif
                </ul>
            </div>
            <div class="bottom-content">
                <li class="nav-link">
                    <a href="{{ route('logout') }}">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Log Out</span>
                    </a>
                </li>
            </div>
        </div>
    </nav>
    
