{{-- membuat sidebar --}}

<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block  sidebar collapse mt-5 " style="background-color: #7DA3A1">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link text-center {{ Request::is('dashboard/ajukan-tiket*') ? 'active' : '' }} "
                    style="background-color: #557586; border-radius:50px; color:white" aria-current="page"
                    href="/dashboard/ajukan-tiket">
                    <span data-feather="home"></span>
                    Ajukan Tiket
                </a>
            </li>
            <li class="nav-item mt-3 mb-3">
                <a class="nav-link text-center {{ Request::is('dashboard/tiket-proses*') ? 'active' : '' }} "
                    style="background-color: #557586; border-radius:50px; color:white" href="/dashboard/tiket-proses">
                    <span data-feather="file"></span>
                    Tiket Proses
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-center {{ Request::is('dashboard/tiket-selesai*') ? 'active' : '' }}"
                    style="background-color: #557586; border-radius:50px; color:white" href="/dashboard/tiket-selesai">
                    <span data-feather="shopping-cart"></span>
                    Tiket Selesai
                </a>
            </li>


    </div>
</nav>
