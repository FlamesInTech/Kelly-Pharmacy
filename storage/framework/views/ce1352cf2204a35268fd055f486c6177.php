<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <!-- Required meta tags -->
    <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <style>
        label{
            display: inline-block;
            width: 200px;
            font-size: 15px;
            font-weight: bold;
        }
        
    </style>
  </head>
  <body>
    <?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      
        <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- partial -->
         <?php echo $__env->make('admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <h1 style="text-align: center;">Send Email to <?php echo e($order->email); ?></h1>
          
            <form action="{{url('send_user_email', $order->id)}" method="POST">

            <?php echo csrf_field(); ?>
            
                <div style="padding: 10px;">
                    <label >Email Greeting :</label>

                    <input style="color: black;" type="text" name="greeting">
                </div>

                <div style="padding: 10px;">
                    <label >Email Firstline :</label>

                    <input style="color: black;" type="text" name="firstline">
                </div>

                <div style="padding: 10px;">
                    <label >Email Body :</label>

                    <input style="color: black;" type="text" name="body">
                </div>

                <div style="padding: 10px;">
                    <label >Email Button :</label>

                    <input style="color: black;" type="text" name="button">
                </div>

                <div style="padding: 10px;">
                    <label >Email Url :</label>

                    <input style="color: black;" type="text" name="url">
                </div>

                <div style="padding: 10px;">
                    <label >Email Lastline :</label>

                    <input style="color: black;" type="text" name="lastline">
                </div>

                <div style="padding: 10px;">
                   
                    <input type="submit" value="Send Email" class="btn btn-primary">
                </div>
            </form>
            
        
          </div>
        </div>
        

    <!-- container-scroller -->
    <!-- plugins:js -->
        <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End custom js for this page --> 
   <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
  </body>
</html>
<?php /**PATH C:\xampp64\xampp22\htdocs\Hospital\resources\views/admin/email_info.blade.php ENDPATH**/ ?>