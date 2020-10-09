<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Total</th>
            <th>
                <a href="add-cate">Add</a>
            </th>
        </thead>
        <tbody>
            <?php $__currentLoopData = $cates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($item->id); ?></td>
                <td><?php echo e($item->cate_name); ?></td>
                <td><?php echo e(count($item->products)); ?></td>
                <td>
                    <a href="remove-cate?id=<?php echo e($item->id); ?>">Remove</a>
                </td>
                <td>
                    <a href="edit-cate?id=<?php echo e($item->id); ?>">Edit</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        </tbody>
    </table>
</body>
</html><?php /**PATH C:\xampp\htdocs\php2\web3013\mvc\app\views/categories/index.blade.php ENDPATH**/ ?>