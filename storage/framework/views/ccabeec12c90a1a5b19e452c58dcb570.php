<header>
   <div class="topbar">
     <div class="container">
       <div class="row">
         <div class="col-sm-8 text-center text-sm-left">
           <div class="site-info">
             <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
             <span class="divider d-none d-sm-inline">|</span>
             <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
           </div>
         </div>
         <div class="col-sm-4 text-center text-sm-right">
           <div class="social-mini-button">
             <a href="#"><span class="mai-logo-facebook-f"></span></a>
             <a href="#"><span class="mai-logo-twitter"></span></a>
             <a href="#"><span class="mai-logo-dribbble"></span></a>
             <a href="#"><span class="mai-logo-instagram"></span></a>
           </div>
         </div>
       </div> <!-- .row -->
     </div> <!-- .container -->
   </div> <!-- .topbar -->

   <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
     <div class="container">
       <a class="navbar-brand" href="<?php echo e(url('/')); ?>"><span class="text-primary">Emma</span>_ Side</a>

       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>

       <div class="collapse navbar-collapse" id="navbarSupport">
         <form class="form-inline ml-auto mb-2 mb-lg-0">
           <div class="input-group">
             <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Search" aria-describedby="button-addon2">
             <div class="input-group-append">
               <button class="btn btn-primary" type="button" id="button-addon2"><span class="mai-search"></span></button>
             </div>
           </div>
         </form>

         <ul class="navbar-nav ml-auto">
           <li class="nav-item active">
             <a class="nav-link" href="<?php echo e(url('/')); ?>">Home <span class="sr-only">(current)</span></a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="">About</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="<?php echo e(url('products')); ?>">Products</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="">Contact</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="<?php echo e(url('show_cart')); ?>">Cart</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="<?php echo e(url('show_order')); ?>">Order</a>
           </li>
           <?php if(auth()->guard()->guest()): ?>
           <li class="nav-item">
             <a class="nav-link btn btn-primary text-white" style="margin-right: 6px;" href="<?php echo e(route('login')); ?>">login</a>
           </li>
           <li class="nav-item">
             <a class="nav-link btn btn-primary text-white" href="<?php echo e(route('register')); ?>">Register</a>
           </li>
           <?php else: ?>
           <li class="nav-item">
             <a class="nav-link" href="<?php echo e(route('profile.show')); ?>">Profile</a>
           </li>
           <li class="nav-item">
             <form method="POST" action="<?php echo e(route('logout')); ?>">
               <?php echo csrf_field(); ?>
               <a class="nav-link btn btn-danger text-white" href="#" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
             </form>
           </li>
           <?php endif; ?>
         </ul>
       </div> <!-- .navbar-collapse -->
     </div> <!-- .container -->
   </nav>
</header>
<?php /**PATH C:\xampp64\xampp22\htdocs\Hospital\resources\views/user/header.blade.php ENDPATH**/ ?>