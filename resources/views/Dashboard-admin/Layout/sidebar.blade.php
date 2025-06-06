{{-- membuat sidebar --}}

<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse"
    style="background-color: #7DA3A1; position: fixed; top: 0; bottom: 0; height: 100vh; z-index: 1050;">
    <div class="container d-flex text-center">
        <div>
            <a href="/dashboard-admin">
                <img src="/img/logo.png" alt="logo">
            </a>
        </div>
    </div>
    <div class="container position-sticky pt-3 d-flex flex-column">
        <div class="sidebar-content flex-grow-1">
            <ul class="nav flex-column">
                <li class="nav-item dropdown">
                    <a class="nav-link text-center dropdown-toggle {{ Request::is('dashboard-admin/user*') ? 'active' : '' }}"
                        style="background-color: #374750; border-radius:50px; color:white" id="userDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span data-feather="home"></span>
                        User
                    </a>
                    <ul class="dropdown-menu dropdown-menu-custom" aria-labelledby="userDropdown"
                        data-bs-display="static">
                        <li><a class="dropdown-item" href="/dashboard-admin/user">User</a></li>
                        <li><a class="dropdown-item" href="/dashboard-admin/admin">Admin</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown mt-3 mb-3">
                    <a class="nav-link text-center dropdown-toggle {{ Request::is('dashboard-admin/tiket*') ? 'active' : '' }}"
                        style="background-color: #374750; border-radius:50px; color:white" id="ticketDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span data-feather="file"></span>
                        Tiket
                    </a>
                    <ul class="dropdown-menu dropdown-menu-custom" aria-labelledby="ticketDropdown"
                        data-bs-display="static">
                        <li><a class="dropdown-item" href="/dashboard-admin/tiket/masuk">Tiket Masuk</a></li>
                        <li><a class="dropdown-item" href="/dashboard-admin/tiket/proses">Tiket Proses</a></li>
                        <li><a class="dropdown-item" href="/dashboard-admin/tiket/ditolak">Tiket Ditolak</a></li>
                        <li><a class="dropdown-item" href="/dashboard-admin/tiket/selesai">Tiket Selesai</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="mt-auto">
            <ul class="nav flex-column">
                <li class="nav-item mb-3">
                    <a class="nav-link text-center {{ Request::is('dashboard/logout*') ? 'active' : '' }}"
                        style="background-color: #374750; border-radius:50px; color:white" href="{{ route('logout') }}">
                        <span data-feather="log-out"></span>
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
