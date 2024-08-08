{{-- membuat header --}}

<header class="navbar navbar-dark sticky-top px-3" style="background-color: #7DA3A1">
    <div>
        <a class href="/dashboard">
            <img src="/img/logo.png" alt="" width="13%" class="mr-6">
        </a>
    </div>

    {{-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> --}}

    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a href="#" type="submit" class="nav-link px-3 border-none">
                <span class="mr-2 d-none d-lg-inline text-black me-2"
                    style="color: black">{{ auth()->user()->name }}</span>
                <img src="/img/profile-user.png" alt="" width="35px" height="35px">
            </a>
        </div>
    </div>

</header>
