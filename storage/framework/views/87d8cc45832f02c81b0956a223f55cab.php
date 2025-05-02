
<style>
/* Styling the back button */
.back-btn {
        display: inline-block;
        margin-top: 20px;
    }
.back-btn {
    font-size: 24px; /* Size of the arrow */
    padding: 10px 15px; /* Button padding */
    display: inline-block; /* Ensures the arrow is centered in the button */
    background-color: #6c757d; /* Secondary background color */
    color: white; /* White color for the icon */
    border-radius: 50%; /* Circular button */
    text-decoration: none; /* Removes underline */
    transition: background-color 0.3s ease; /* Smooth hover effect */
}

.back-btn:hover {
    background-color: #5a6268; /* Darken the button color on hover */
}

/* Add some space if needed between the arrow and the edge of the button */
.back-btn i {
    margin-right: 0; /* Optional: adjust this to your design needs */
}
</style>

<?php $__env->startSection('content'); ?>
<div class="container d-flex justify-content-center align-items-center min-vh-100">
<a href="<?php echo e(route('markets.index')); ?>" class="btn btn-secondary back-btn">
    <i class="fas fa-arrow-left"></i> <!-- Using FontAwesome for left arrow icon -->
</a>
    <div class="market-detail-card">
        <img src="<?php echo e(asset($market['image'])); ?>" alt="<?php echo e($market['name']); ?>" class="market-image">
        <h2 class="market-name"><?php echo e($market['name']); ?></h2>
        <p><strong>📍 Location:</strong> <?php echo e($market['location']); ?></p>
        <p><strong>📞 Contact:</strong> <?php echo e($market['contact']); ?></p>
        <p><strong>📝 Description:</strong> <?php echo e($market['description']); ?></p>
        <p><strong>⏰ Opening Hours:</strong> <?php echo e($market['opening_hours']); ?></p>
        <p><strong>✅ Facilities:</strong> <?php echo e($market['facilities']); ?></p>

       
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f2f4f8;
        }

        .market-detail-card {
            width: 100%;
            max-width: 600px;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 16px;
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.1);
            text-align: left;
            transition: all 0.3s ease;
        }

        .market-detail-card:hover {
            transform: translateY(-5px);
        }

        .market-image {
            width: 100%;
            max-height: 300px;
            object-fit: cover;
            border-radius: 12px;
            margin-bottom: 25px;
        }

        .market-name {
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 15px;
            color: #2c3e50;
        }

        .market-detail-card p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 10px;
            color: #555;
        }

        .btn-back {
            display: inline-block;
            margin-top: 20px;
            background-color: #0d6efd;
            color: #fff;
            padding: 12px 24px;
            font-size: 16px;
            border-radius: 6px;
            text-decoration: none;
            transition: background-color 0.2s;
        }

        .btn-back:hover {
            background-color: #0b5ed7;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hari0\OneDrive\Desktop\MVC\Horticultural-Crop\Horticultural-Crop\agri-platform\resources\views/markets/show.blade.php ENDPATH**/ ?>