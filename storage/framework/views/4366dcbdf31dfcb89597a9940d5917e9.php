

<?php $__env->startSection('content'); ?>
<h2>Markets</h2>
<div class="grid-container">
    <?php $__currentLoopData = $markets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $market): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card">
            <img src="<?php echo e(asset($market['image'])); ?>" alt="<?php echo e($market['name']); ?>">
            <h3><?php echo e($market['name']); ?></h3>
            <p>Location: <?php echo e($market['location']); ?></p>
            <a href="<?php echo e(route('markets.show', $market['id'])); ?>" class="btn btn-primary">View Details</a>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
<style>
    .grid-container {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 20px;
        margin-top: 30px;
    }
    .card {
        text-align: center;
        padding: 15px;
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        background-color: #fff;
    }
    .card img {
        width: 100%;
        height: auto;
        border-radius: 10px;
    }
    .card h3 {
        font-size: 1.25rem;
        margin-top: 15px;
    }
    .card p {
        font-size: 1rem;
        color: #555;
    }
    .btn-primary {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 14px;
        border-radius: 5px;
        text-decoration: none;
    }
    .btn-primary:hover {
        background-color: #0056b3;
    }
</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hari0\OneDrive\Desktop\project\Horticultural-Crop\agri-platform\resources\views/markets.blade.php ENDPATH**/ ?>