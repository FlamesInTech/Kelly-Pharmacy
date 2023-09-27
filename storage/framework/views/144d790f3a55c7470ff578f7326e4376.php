<section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>Products</span>
               </h2>
            </div>
            <div class="row">

            <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="<?php echo e(url('product_details',$products->id)); ?>" class="option1">
                           Product details
                           </a>
                           <form action="<?php echo e(url('add_cart', $products->id)); ?>" method="POST">

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
                     <div class="img-box">
                        <img src="product/<?php echo e($products->image); ?>" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           <?php echo e($products->title); ?>

                        </h5>

                        <?php if($products->discount_price!=null): ?> 
                  
                           <h6 style="color: red;">
                           <small>Discount Price</small> 
                           <br>
                              $<?php echo e($products->discount_price); ?>

                           </h6>

                           <h6 style="text-decoration:line-through;">
                           <small>Price</small> 
                           <br>
                               $<?php echo e($products->price); ?>

                           </h6>

                           <?php else: ?>
                           <h6 style="color: blue;">
                           <small>Price</small> 
                           <br>
                               $<?php echo e($products->price); ?>

                           </h6>
                        <?php endif; ?>

                       
                     </div>
                  </div>
               </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

               <span style="padding-top: 20px">
                  <?php echo $product->withQueryString()->links('pagination::bootstrap-5'); ?>

               </span>

               
               
            </div>
         </div>
      </section><?php /**PATH C:\xampp64\xampp22\htdocs\Hospital\resources\views/user/product.blade.php ENDPATH**/ ?>