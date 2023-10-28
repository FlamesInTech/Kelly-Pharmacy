<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Payment</title>
</head>
<body>
    <?php if(session()->has('error')): ?> <?php echo e(session()->get('error')); ?> <?php endif; ?>
    <h1>Start Payment</h1>

    <form action="<?php echo e(route('pay')); ?>" method="POST">
        <?php echo csrf_field(); ?> 
        <input type="text" name="email" placeholder="Email Address" required> <br><br>
        <input type="number" name="amount" placeholder="Enter amount" required> <br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html><?php /**PATH C:\xampp64\xampp22\htdocs\Hospital\resources\views/user/paystack.blade.php ENDPATH**/ ?>