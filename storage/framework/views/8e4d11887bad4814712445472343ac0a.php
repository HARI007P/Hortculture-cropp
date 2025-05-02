

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Storage List</h2>
    <div class="row">
        <?php $__currentLoopData = $storages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $storage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="<?php echo e(asset($storage['image'])); ?>" class="card-img-top" alt="<?php echo e($storage['name']); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($storage['name']); ?></h5>
                        <p class="card-text"><?php echo e($storage['location']); ?></p>
                        <a href="<?php echo e(route('storages.show', $storage['id'])); ?>" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hari0\OneDrive\Desktop\project\Horticultural-Crop\agri-platform\resources\views/storages/index.blade.php ENDPATH**/ ?>