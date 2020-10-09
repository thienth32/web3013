<table>
<thead>
    <th>ID</th>
    <th>Name</th>
    <th>Total product</th>
    <th><a href="add-cate">Add</th>
</thead>
<tbody>
    <?php $__currentLoopData = $cates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($item->id); ?></td>
        <td><?php echo e($item->cate_name); ?></td>
        <td>0</td>
        <td><a href="remove-cate?id=<?php echo e($item->id); ?>">Remove</td>
           <td> <a href="edit-cate?id=<?php echo e($item->id); ?>">Edit</td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table><?php /**PATH C:\xampp\htdocs\web3013\mvc\app\views/categories/index.blade.php ENDPATH**/ ?>