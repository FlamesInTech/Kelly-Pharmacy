<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Callback page</title>
</head>
<body>
    <table>
        <tbody>
            <tr><td>Status:</td><td><?php echo e($data->status); ?></td></tr>
            <tr><td>Reference:</td><td><?php echo e($data->reference); ?></td></tr>
            <tr><td>Amount:</td><td><?php echo e($data->amount); ?></td></tr>
            <tr><td>Fees:</td><td><?php echo e($data->fees); ?></td></tr>
            <tr><td>Email:</td><td><?php echo e($data->customer->email); ?></td></tr>
        </tbody>
    </table>
    <a href="<?php echo e(route('pay')); ?>">Back home</a>
</body>
</html><?php /**PATH C:\xampp64\xampp22\htdocs\Hospital\resources\views/user/callback_page.blade.php ENDPATH**/ ?>