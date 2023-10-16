<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <style>
        .div_center{
            text-align: center;  
            padding: 30px;
        }
        .div_center h2{
            font-size: 30px;
            padding-bottom: 30px;
        }
        .add_category_btn{
            /* height: 30px; */
            padding: 13px;
        }
        .input_color{
            color: black;
            padding: 12px;
        }
        .table-center{
            padding: 20px;
            /* width: 100%; */
            margin: auto;
            text-align: center;
            border: 2px solid white;
        }
        .table-center th{
          background: skyblue;
          border: 1px solid white;
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
                <h2>Add Categories</h2>
                <form action="<?php echo e(url('/add_category')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="category_cover">
                        <input class="input_color" type="text" name="category" placeholder="Write Category name">
                        <input type="submit" class="btn btn-primary add_category_btn" name="submit" value="Add Category">
                    </div>
                    
                </form>
            </div>

            <table class="table-center">
                <tr>
                    <th>Category Name</th>
                    <th>Action</th>
                </tr>

                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <tr>
                    <td><?php echo e($data->category_name); ?></td>
                    <td>
                        <a onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger" href="<?php echo e(url('delete_category',$data->id)); ?>">Delete</a>
                    </td>
                </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
            
          </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
        <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End custom js for this page -->
  </body>
</html><?php /**PATH C:\xampp64\xampp22\htdocs\Hospital\resources\views/admin/category.blade.php ENDPATH**/ ?>