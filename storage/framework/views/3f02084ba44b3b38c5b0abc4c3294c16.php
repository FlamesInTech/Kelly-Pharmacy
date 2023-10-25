<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Payment</title>
</head>
<body>
    <h1>Start Payment</h1>
    <form action="<?php echo e(route('pay')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <input type="text" name="email" placeholder="Email Address" required>

        <input type="number" name="amount" placeholder="Enter Amount" required>

        <input type="submit" value="Buy"><?php /**PATH C:\xampp64\xampp22\htdocs\Hospital\resources\views/user/paystack.blade.php ENDPATH**/ ?>