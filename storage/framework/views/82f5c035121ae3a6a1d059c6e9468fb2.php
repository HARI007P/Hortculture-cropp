

<?php $__env->startSection('content'); ?>
<h2>Cold Storages</h2>
<div class="grid-container">
<?php $__currentLoopData = $storages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $storage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card">
        <img src="<?php echo e(asset($storage['image'])); ?>" alt="<?php echo e($storage['name']); ?>">
        <h3><?php echo e($storage['name']); ?></h3>
        <p>Location: <?php echo e($storage['location']); ?></p>
        <p>Capacity: <?php echo e($storage['capacity']); ?></p>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hari0\OneDrive\Desktop\project\Horticultural-Crop\agri-platform\resources\views/storages.blade.php ENDPATH**/ ?>