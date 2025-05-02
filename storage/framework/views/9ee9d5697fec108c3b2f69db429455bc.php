

<?php $__env->startSection('content'); ?>
<div class="home-container">
    <h1>Welcome to Horticultural Crop</h1>
    <p>Your one-stop platform for horticultural insights.</p>

    <div class="overview">
        <div class="section">
            <h2>Featured Crops</h2>
            <div class="grid-container">
                <?php $__currentLoopData = $crops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $crop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card">
                        <img src="<?php echo e(asset($crop['image'])); ?>" alt="<?php echo e($crop['name']); ?>">
                        <h3><?php echo e($crop['name']); ?></h3>
                        <p>Price: ₹<?php echo e($crop['price']); ?></p>
                        <p>Value Addition: <?php echo e($crop['value_addition']); ?></p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <a href="/crops" class="view-more">View All Crops</a>
        </div>

        <div class="section">
            <h2>Featured Markets</h2>
            <div class="grid-container">
                <?php $__currentLoopData = $markets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $market): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card">
                        <img src="<?php echo e(asset($market['image'])); ?>" alt="<?php echo e($market['name']); ?>">
                        <h3><?php echo e($market['name']); ?></h3>
                        <p>Location: <?php echo e($market['location']); ?></p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <a href="/markets" class="view-more">View All Markets</a>
        </div>

        <div class="section">
            <h2>Featured Cold Storages</h2>
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
            <a href="/storages" class="view-more">View All Cold Storages</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hari0\OneDrive\Desktop\MVC\Horticultural-Crop\Horticultural-Crop\agri-platform\resources\views/home.blade.php ENDPATH**/ ?>