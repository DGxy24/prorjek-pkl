{{-- membuat sidebar --}}



<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse mt-5" style="background-color: #7DA3A1">
    <div class="container position-sticky pt-3 d-flex flex-column h-100">
        <div class="sidebar-content flex-grow-1">
            <ul class="nav flex-column">
                <li class="nav-item dropdown">
                    <a class="nav-link text-center dropdown-toggle {{ Request::is('dashboard/ajukan-tiket*') ? 'active' : '' }}"
                        style="background-color: #374750; border-radius:50px; color:white" id="userDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span data-feather="home"></span>
                        User
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="/dashboard-admin/user">User</a></li>
                        <li><a class="dropdown-item" href="#">Admin</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown mt-3 mb-3">
                    <a class="nav-link text-center dropdown-toggle {{ Request::is('dashboard/tiket-proses*') ? 'active' : '' }}"
                        style="background-color: #374750; border-radius:50px; color:white" id="ticketDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span data-feather="file"></span>
                        Tiket
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="ticketDropdown">
                        <li><a class="dropdown-item" href="#">Tiket Masuk</a></li>
                        <li><a class="dropdown-item" href="#">Tiket Proses</a></li>
                        <li><a class="dropdown-item" href="#">Tiket Ditolak</a></li>
                        <li><a class="dropdown-item" href="#">Tiket Selesai</a></li>
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
