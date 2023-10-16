<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <style>
        .title_deg {
            text-align: center;
            font-size: larger;
            padding-bottom: 40px;
            overflow-x: auto; 
        }
        .table_deg {
            border: 2px solid white;
            margin: auto;
            text-align: center;
            width: 100%;
        }
        .th_deg th {
            background-color: skyblue;
            padding: 10px; 
        }
        .img_size {
            width: 100px;
            height: 70px;
        }
        .td_deg td {
             padding: 5px; 
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
            <div class="title_deg">All Orders</div>
            <div class="table-responsive">
            <table class="table_deg table-bordered">
                <tr class="th_deg">
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Product_title</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Payment Status</th>
                    <th>Delivery Status</th>
                    <th>Image</th>
                    <th>Delivered</th>
                </tr>
                <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="td_deg">
                    <td><?php echo e($order->name); ?></td>
                    <td><?php echo e($order->email); ?></td>
                    <td><?php echo e($order->address); ?></td>
                    <td><?php echo e($order->phone); ?></td>
                    <td><?php echo e($order->product_title); ?></td>
                    <td><?php echo e($order->quantity); ?></td>
                    <td><?php echo e($order->price); ?></td>
                    <td><?php echo e($order->payment_status); ?></td>
                    <td><?php echo e($order->delivery_status); ?></td>
                    <td>
                        <img class="img_size" src="/product/<?php echo e($order->image); ?>" >
                    </td>
                    <td>
                    <?php if($order->delivery_status=='processing'): ?>

                        <a href="<?php echo e(url('delivered',$order->id)); ?>" onclick="return confirm('Are you sure this product is delivered?')" class="btn btn-primary">Delivered</a>
                    <?php else: ?>
                    <p style="color: green">Delivered</p>
                    <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table> 
          </div>
          </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
        <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End custom js for this page -->
  </body>
</html><?php /**PATH C:\xampp64\xampp22\htdocs\Hospital\resources\views/admin/order.blade.php ENDPATH**/ ?>