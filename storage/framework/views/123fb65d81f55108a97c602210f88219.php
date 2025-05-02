

<?php $__env->startSection('content'); ?>
<div class="container text-center">

    <!-- Back Arrow -->
    <a href="<?php echo e(route('storages.index')); ?>" class="btn btn-secondary back-btn mb-3">
        <i class="fas fa-arrow-left"></i>
    </a>

    <!-- Storage Card -->
    <div class="card mx-auto storage-card" style="max-width: 700px;">
        <div class="row no-gutters align-items-center">
            <div class="col-md-5">
                <img src="<?php echo e(asset($storage['image'])); ?>" class="card-img p-3" alt="<?php echo e($storage['name']); ?>">
            </div>
            <div class="col-md-7">
                <div class="card-body text-start">
                    <h4 class="card-title"><?php echo e($storage['name']); ?></h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Location:</strong> <?php echo e($storage['location']); ?></li>
                        <li class="list-group-item"><strong>Capacity:</strong> <?php echo e($storage['capacity']); ?></li>
                        <li class="list-group-item"><strong>Storage Type:</strong> <?php echo e($storage['type']); ?></li>
                        <li class="list-group-item"><strong>Climate Control:</strong> <?php echo e($storage['climate_control']); ?></li>
                        <li class="list-group-item"><strong>Contact:</strong> <?php echo e($storage['contact']); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hari0\OneDrive\Desktop\project\Horticultural-Crop\agri-platform\resources\views/storages/storage-detail.blade.php ENDPATH**/ ?>