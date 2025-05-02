

<?php $__env->startSection('content'); ?>
<h2>Crops List</h2>
<div class="grid-container">
<?php $__currentLoopData = $crops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $crop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a href="<?php echo e(route('crops.show', $crop['id'])); ?>" class="card-link">
        <div class="card">
            <img src="<?php echo e(asset($crop['image'])); ?>" alt="<?php echo e($crop['name']); ?>">
            <h3><?php echo e($crop['name']); ?></h3>
            <p>Type: <?php echo e($crop['type']); ?></p>
            <p>Price: ₹<?php echo e($crop['price']); ?></p>
            <p>Value Addition: <?php echo e($crop['value_addition']); ?></p>
        </div>
    </a>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hari0\OneDrive\Desktop\project\Horticultural-Crop\agri-platform\resources\views/crops.blade.php ENDPATH**/ ?>