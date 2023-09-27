<!DOCTYPE html>
<html>
   <head>

      <base href="/public">
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Kelly Pharmacy | Home</title>
      <link rel="stylesheet" href="assets/css/maicons.css">

      <link rel="stylesheet" href="assets/vendor/owl-carousel/css/owl.carousel.css">

      <link rel="stylesheet" href="assets/vendor/animate/animate.css">

      <link rel="stylesheet" href="assets/css/theme.css">




      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="assets/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="assets/css/responsive.css" rel="stylesheet" />
   
      <style>
         @media (max-width: 700px) {
            .box ~ div {
               width: 100%;
            }
         }
      </style>
   </head>
   <body>
      <!-- <div class="hero_area"> -->
         <!-- header section strats -->
            <?php echo $__env->make('user.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <!-- end header section -->
         
         <div class="col-sm-6 col-md-4 col-lg-4" style="margin:auto; padding:30px;">
                  <div class="box">
                     
                     <div class="img-box" style="padding: 30px;">
                        <img style="height: 200px; width: 200px" src="product/<?php echo e($product->image); ?>" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           <?php echo e($product->title); ?>

                        </h5>

                        <?php if($product->discount_price!=null): ?> 
                  
                           <h6 style="color: red;">
                           <small>Discount Price</small> 
                           <br>
                              $<?php echo e($product->discount_price); ?>

                           </h6>

                           <h6 style="text-decoration:line-through;">
                           <small>Price</small> 
                           <br>
                               $<?php echo e($product->price); ?>

                           </h6>

                           <?php else: ?>
                           <h6 style="color: blue;">
                           <small>Price</small> 
                           <br>
                               $<?php echo e($product->price); ?>

                           </h6>
                        <?php endif; ?>
                        <h6> <b>Product Category : </b> <?php echo e($product->category); ?></h6>
                        <h6><b>Product Description : </b>  <?php echo e($product->description); ?></h6>
                        <h6><b>Available Quantity :  </b><?php echo e($product->quantity); ?></h6>

                        <br>
                        <form action="<?php echo e(url('add_cart', $product->id)); ?>" method="POST">

                        <?php echo csrf_field(); ?>
                           <div class="column">
                              <div class="col-md-4">
                              <input type="number" name="quantity" value="1" min="1" style="width:80px">
                              </div>
                              <div class="col-md-4">
                                 <input type="submit" value="Add To Cart">
                              </div>
                        
                           </div>
                        
                        </form>
                     </div>
                  </div>
               </div>


      <!-- footer start -->
      <?php echo $__env->make('user.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- footer end -->

      <!-- jQery -->
      <script src="assets/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="assets/js/popper.min.js"></script>
      <!--   bootstrap js -->
      <script src="assets/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="assets/js/custom.js"></script>


      <script src="assets/js/jquery-3.5.1.min.js"></script>

      <script src="assets/js/bootstrap.bundle.min.js"></script>

      <script src="assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

      <script src="assets/vendor/wow/wow.min.js"></script>

      <script src="assets/js/theme.js"></script>

   </body>
</html><?php /**PATH C:\xampp64\xampp22\htdocs\Hospital\resources\views/user/product_details.blade.php ENDPATH**/ ?>