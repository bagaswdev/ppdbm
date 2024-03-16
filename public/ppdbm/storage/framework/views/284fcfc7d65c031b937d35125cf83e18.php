<nav class="navbar">
    <a href="#" class="sidebar-toggler">
        <i data-feather="menu"></i>
    </a>
    <div class="navbar-content">
        
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <p class="">Anda Login Sebagai: <?php echo e(Auth::user()->username); ?></p>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a href="<?php echo e(route('logout')); ?>" class="text-white ms-0 btn btn-danger">
                    <i class="me-2 icon-md" data-feather="log-out"></i>
                    <span>Log Out</span>
                </a>
            </li>
        </ul>
    </div>
</nav><?php /**PATH C:\laragon\www\ppdb\resources\views/layout/header2.blade.php ENDPATH**/ ?>