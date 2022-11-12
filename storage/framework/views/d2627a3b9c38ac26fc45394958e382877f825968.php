<?php $__env->startSection('content'); ?>

    <h1><?php echo e($story->title); ?></h1>
    <h2><?php echo e($story->id); ?></h2>
    <p><?php echo e($story->description); ?></p>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TLE-TEAM01-HSLEIDEN\resources\views/cases/show.blade.php ENDPATH**/ ?>