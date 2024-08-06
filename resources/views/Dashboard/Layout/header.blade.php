{{-- membuat header --}}

<header class="navbar navbar-dark sticky-top  p-4 shadow" style="background-color: #7DA3A1">
    <a class=" col-md-3 col-lg-2 me-0 px-3" href="/dashboard">
        <img src="/img/logo.png" alt="" width="25%">
    </a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    {{-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> --}}

    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="nav-link px-3 bg-dark border-0"> Logout
                    <span data-feather="log-out"></span>
                </button>
            </form>
        </div>
    </div>
</header>
