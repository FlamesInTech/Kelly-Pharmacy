<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <style>
        .center {
            margin: auto;
            width: 100%;
            overflow-x: auto; /* Add horizontal scroll for smaller screens */
            text-align: center;
            margin-top: 40px;
        }

        .font_size {
            text-align: center;
            font-size: 40px;
            padding-top: 20px;
        }

        .img_size {
            width: 100px;
            height: 100px;
        }

        .th_color {
            background: skyblue;
        }

        .th_color th {
            padding: 20px; /* Reduce padding for smaller screens */
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
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    <?php echo e(session()->get('message')); ?>

                </div>
            <?php endif; ?>
            <h2 class="font_size">All Products</h2>
            <div class="table-responsive">
                <table class="center table-bordered"> <!-- Add 'table' and 'table-bordered' classes for table styling -->
                    <tr class="th_color">
                        <th>Product title</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Discount Price</th>
                        <th>Product Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>

                    <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($product->title); ?></td>
                            <td><?php echo e($product->description); ?></td>
                            <td><?php echo e($product->quantity); ?></td>
                            <td><?php echo e($product->category); ?></td>
                            <td><?php echo e($product->price); ?></td>
                            <td><?php echo e($product->discount_price); ?></td>
                            <td>
                                <img class="img_size" src="/product/<?php echo e($product->image); ?>">
                            </td>
                            <td><a class="btn btn-success" href="<?php echo e(url('update_product',$product->id)); ?>">Edit</a></td>
                            <td><a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this?')" href="<?php echo e(url('delete_product',$product->id)); ?>">Delete</a></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- End custom js for this page -->
</body>
</html>
<?php /**PATH C:\xampp64\xampp22\htdocs\Hospital\resources\views/admin/show_product.blade.php ENDPATH**/ ?>