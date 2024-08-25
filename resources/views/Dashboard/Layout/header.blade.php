{{-- membuat header --}}
<header class="navbar navbar-dark sticky-top px-3" style="background-color: #7DA3A1; z-index: 1000;">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarMenu"
        aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div></div>
    {{-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> --}}
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a href="#" type="submit" class="nav-link px-3 border-none">
                <span class="mr-2 d-inline text-black me-2" style="color: black">{{ auth()->user()->name }}</span>
                <img src="/img/profile-user.png" alt="" width="35px" height="35px">
            </a>
        </div>
    </div>

</header>
