<div class="container-fluid page-body-wrapper">
<!-- partial:partials/_navbar.html -->
<nav class="navbar p-0 fixed-top d-flex flex-row">
    <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
    <a class="navbar-brand brand-logo-mini" href="<?php echo e(url('/')); ?>">Kelly Pharm</a>
    </div>
    <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="mdi mdi-menu"></span>
    </button>
    <ul class="navbar-nav w-100">
        <li class="nav-item w-100">
        <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
            <input type="text" class="form-control" placeholder="Search products">
        </form>
        </li>
    </ul>
    <ul class="navbar-nav navbar-nav-right">
        <li>
        <form method="POST" action="<?php echo e(route('logout')); ?>">
               <?php echo csrf_field(); ?>
               <a class="nav-link btn btn-danger" style="padding: 10px;" href="#" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
             </form>
        </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-format-line-spacing"></span>
    </button>
    </div>
</nav><?php /**PATH C:\xampp64\xampp22\htdocs\Hospital\resources\views/admin/header.blade.php ENDPATH**/ ?>