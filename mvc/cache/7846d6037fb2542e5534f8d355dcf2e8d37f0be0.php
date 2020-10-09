<table>
<thead>
    <th>ID</th>
    <th>Name</th>
    <th>image</th>
    <th>price</th>
    <th>short_desc</th>
    <th><a href="add-cate">Add</th>
</thead>
<tbody>
    <?php $__currentLoopData = $cates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($item->id); ?></td>
        <td><?php echo e($item->name); ?></td>
        <td><?php echo e($item->image); ?></td>
        <td><?php echo e($item->price); ?></td>
        <td><?php echo e($item->short_desc); ?></td>
        <td><a href="remove-cate?id=<?php echo e($item->id); ?>">Remove</td>
           <td> <a href="edit-cate?id=<?php echo e($item->id); ?>">Edit</td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table><?php /**PATH C:\xampp\htdocs\web3013\mvc\app\views/products/index.blade.php ENDPATH**/ ?>