<?php
    // $initial = strtoupper(auth()->user()->name[0]);
    $nameParts = explode(' ', auth()->user()->name);
    $initials = strtoupper($nameParts[0][0] . (isset($nameParts[1]) ? $nameParts[1][0] : ''));
?>


<header class="navbar navbar-dark sticky-top px-3" style="background-color: #7DA3A1; z-index: 1000;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarMenu"
        aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div></div>

    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a href="#" type="submit" class="nav-link px-3 border-none">
                <div class="container d-flex align-items-center">
                    <span class="mr-2 d-inline text-black me-2" style="color: black"><?php echo e(auth()->user()->name); ?></span>
                    
                    <div class="profile-circle">
                        <?php echo e($initials); ?>

                    </div>
                </div>
            </a>
        </div>
    </div>

</header>
<?php /**PATH D:\Program\PKL\prorjek-pkl\resources\views/dashboard-admin/layout/header.blade.php ENDPATH**/ ?>