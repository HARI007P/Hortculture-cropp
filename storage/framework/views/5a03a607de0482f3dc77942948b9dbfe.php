

<?php $__env->startSection('content'); ?>
<style>
    .crop-card {
        max-width: 800px;
        margin: 30px auto;
        border: 1px solid #ddd;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        background-color: #fff;
    }

    .crop-card img {
        width: 100%; /* Make sure image is responsive */
        border-radius: 12px;
    }

    .crop-details {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .crop-image {
        width: 45%; /* Image width */
        margin-right: 20px; /* Space between image and details */
    }

    .crop-info {
        width: 50%; /* Text details width */
    }

    .list-group-item {
        padding: 12px 15px;
        font-size: 16px;
    }

    .back-btn {
        display: inline-block;
        margin-top: 20px;
    }

    /* Responsive design for small screens */
    @media (max-width: 768px) {
        .crop-details {
            flex-direction: column; /* Stack image and details on small screens */
            align-items: flex-start;
        }
        .crop-image {
            width: 100%; /* Image takes full width */
            margin-bottom: 20px; /* Space between image and details */
        }
        .crop-info {
            width: 100%; /* Text details take full width */
        }
    }
    /* Styling the back button */
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

<div class="container">
    <div class="crop-card">
    <a href="<?php echo e(route('crops.index')); ?>" class="btn btn-secondary back-btn">
    <i class="fas fa-arrow-left"></i> <!-- Using FontAwesome for left arrow icon -->
</a>
        <h2 class="text-center"><?php echo e($crop['name']); ?> Details</h2>
     
        <div class="crop-details">
        

            <!-- Image Section -->
            <div class="crop-image">
                <img src="<?php echo e(asset($crop['image'])); ?>" alt="<?php echo e($crop['name']); ?>">
            </div>

            <!-- Text Details Section -->
            <div class="crop-info">
                <ul class="list-group mt-3">

                    <li class="list-group-item"><strong>Description:</strong> <?php echo e($crop['description']); ?></li>
                    <li class="list-group-item"><strong>Season:</strong> <?php echo e($crop['season']); ?></li>
                    <li class="list-group-item"><strong>Harvest Time:</strong> <?php echo e($crop['harvest_time']); ?></li>
                    <li class="list-group-item"><strong>Climate:</strong> <?php echo e($crop['climate']); ?></li>
                    <li class="list-group-item"><strong>Soil Type:</strong> <?php echo e($crop['soil_type']); ?></li>
                    <li class="list-group-item"><strong>Irrigation:</strong> <?php echo e($crop['irrigation']); ?></li>
                    <li class="list-group-item"><strong>Nutrients:</strong> <?php echo e($crop['nutrients']); ?></li>
                    <li class="list-group-item"><strong>Value Addition:</strong> <?php echo e($crop['value_addition']); ?></li>
                    <li class="list-group-item"><strong>Price (₹/kg):</strong> ₹<?php echo e($crop['price']); ?></li>
                </ul>
            </div>
        </div>

       
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hari0\OneDrive\Desktop\project\Horticultural-Crop\agri-platform\resources\views/crop-detail.blade.php ENDPATH**/ ?>