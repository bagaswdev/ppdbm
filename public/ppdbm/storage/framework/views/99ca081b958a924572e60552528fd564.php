<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            Noble<span>UI</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item ">
                <a href="<?php echo e(url('/')); ?>" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">web apps</li>
            <li class="nav-item ">
                <a class="nav-link" data-bs-toggle="collapse" href="#email" role="button" aria-expanded=""
                    aria-controls="email">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Email</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse " id="email">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="<?php echo e(url('/email/inbox')); ?>" class="nav-link">Inbox</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(url('/email/read')); ?>" class="nav-link ">Read</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(url('/email/compose')); ?>" class="nav-link">Compose</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>
<?php /**PATH C:\xampp\htdocs\ppdb\resources\views/layout/sidebar.blade.php ENDPATH**/ ?>