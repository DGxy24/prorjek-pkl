{{-- dashboard header admin --}}
<header class="navbar navbar-dark sticky-top px-3" style="background-color: #7DA3A1; z-index: 1000;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarMenu"
        aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div></div>

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
