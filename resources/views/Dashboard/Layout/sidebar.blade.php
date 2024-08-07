{{-- membuat sidebar --}}

<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse mt-5" style="background-color: #7DA3A1">
    <div class="container position-sticky pt-3 d-flex flex-column h-100">
        <div class="sidebar-content flex-grow-1">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link text-center {{ Request::is('dashboard/ajukan-tiket*') ? 'active' : '' }}"
                        style="background-color: #374750; border-radius:50px; color:white" aria-current="page"
                        href="/dashboard/ajukan-tiket">
                        <span data-feather="home"></span>
                        Ajukan Tiket
                    </a>
                </li>
                <li class="nav-item mt-3 mb-3">
                    <a class="nav-link text-center {{ Request::is('dashboard/tiket-proses*') ? 'active' : '' }}"
                        style="background-color: #374750; border-radius:50px; color:white"
                        href="/dashboard/tiket-proses">
                        <span data-feather="file"></span>
                        Tiket Proses
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center {{ Request::is('dashboard/tiket-selesai*') ? 'active' : '' }}"
                        style="background-color: #374750; border-radius:50px; color:white"
                        href="/dashboard/tiket-selesai">
                        <span data-feather="shopping-cart"></span>
                        Tiket Selesai
                    </a>
                </li>
            </ul>
        </div>
        <div class="mt-auto">
            <ul class="nav flex-column">
                <li class="nav-item mb-3">
                    <a class="nav-link text-center {{ Request::is('dashboard/logout*') ? 'active' : '' }}"
                        style="background-color: #374750; border-radius:50px; color:white" href="#">
                        <span data-feather="log-out"></span>
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
