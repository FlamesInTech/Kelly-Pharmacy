<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">

    <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <style>
        .div_center{
            text-align: center;
            padding-top: 40px;
        }
        .div_center h1{
            padding-bottom: 20px;
            font-size: larger;
        }
        .text_color {
            color: black;
            padding-bottom: 40px;
        }
        label{
            display: inline-block;
            width: 200px;
        }
       .div_design{
            padding-bottom: 20px;
       }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
        <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- partial -->
        <?php echo $__env->make('admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

          <?php if(session()->has('message')): ?>

            <div class="alert alert-success">

            <button type="button" class="close" data-dismiss="alert" arial-hidden="true">x</button>
            <?php echo e(session()->get('message')); ?>

            </div>

            <?php endif; ?>
            <div class="div_center">
                <h1>Update Product</h1>

                <form action="<?php echo e(url('/update_product_confirm', $product->id)); ?>" method="POST" enctype="multipart/form-data">

                <?php echo csrf_field(); ?>
                    
                    <div class="div_design">
                        <label>Product title :</label>
                        <input class="text_color" type="text" name="title" placeholder="Write a title" required="" value="<?php echo e($product->title); ?>">
                    </div>

                    <div class="div_design">
                        <label>Product Description :</label>
                        <input class="text_color" type="text" name="description" placeholder="Write a description" required="" value="<?php echo e($product->description); ?>">
                    </div>

                    <div class="div_design">
                        <label>Product Price :</label>
                        <input class="text_color" type="text" name="price" placeholder="Write a price" required="" value="<?php echo e($product->price); ?>">
                    </div>

                    <div class="div_design">
                        <label>Discount Price :</label>
                        <input class="text_color" type="text" name="dis_price" placeholder="Write the discount price" value="<?php echo e($product->discount_price); ?>">
                    </div>

                    <div class="div_design">
                        <label>Product Quantity :</label>
                        <input class="text_color" type="text" name="quantity" placeholder="Write the quantity" required="" value="<?php echo e($product->quantity); ?>">
                    </div>

                    <div class="div_design">
                        <label>Product Cateory :</label>
                        <select class="text_color" name="category" required="" value="<?php echo e($product->category); ?>">
                            <option value="<?php echo e($product->category); ?>" selected><?php echo e($product->category); ?></option>
                            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <option value="<?php echo e($category->category_name); ?>"><?php echo e($category->category_name); ?></option>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          
                        </select>
                    </div> 

                    <div class="div_design">
                        <label>Current Product Image Here :</label>
                        <img style="margin:auto;" height="100" width="100" src="/product/<?php echo e($product->image); ?>">
                    </div>
                    
                    <div class="div_design">
                        <label>Change Product Image Here :</label>
                        <input type="file" name="image">
                    </div>

                    <div class="div_design">
                    <input type="submit" value="Update Product" class="btn btn-primary">
                    </div>

                </form>
                
            </div>
          </div>
        </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
        <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End custom js for this page -->
  </body>
</html><?php /**PATH C:\xampp64\xampp22\htdocs\Hospital\resources\views/admin/update_product.blade.php ENDPATH**/ ?>