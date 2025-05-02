

<?php $__env->startSection('content'); ?>
<h2>Markets</h2>
<div class="grid-container">
    <?php $__currentLoopData = $markets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $market): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e(route('markets.show', $market['id'])); ?>" class="card-link" title="<?php echo e($market['name']); ?>">
            <div class="card">
                <img src="<?php echo e(asset($market['image'])); ?>" alt="<?php echo e($market['name']); ?>">
                <h3><?php echo e($market['name']); ?></h3>
                <p>Location: <?php echo e($market['location']); ?></p>
            </div>
        </a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
<style>
    .grid-container {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
        gap: 20px;
        margin-top: 30px;
    }

    .card-link {
        text-decoration: none;
        color: inherit;
    }

    .card {
        cursor: pointer;
        text-align: center;
        padding: 15px;
        border: 1px solid #ddd;
        border-radius: 12px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        background-color: #fff;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        position: relative;
    }

    .card:hover {
        transform: translateY(-8px) scale(1.03);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    .card img {
        width: 100%;
        height: auto;
        border-radius: 10px;
    }

    .card h3 {
        font-size: 1.2rem;
        margin-top: 15px;
    }

    .card p {
        font-size: 1rem;
        color: #555;
    }
</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hari0\OneDrive\Desktop\MVC\Horticultural-Crop\Horticultural-Crop\agri-platform\resources\views/markets/index.blade.php ENDPATH**/ ?>