

<?php
    /**
     * @var \App\Models\Drawing[] $drawings
     */
?>

    <h1>Scenario's - <?php echo e($story->title); ?></h1>

<table class="table">
    <tr>
        <th>Scenario's</th>
        <th>Keuzes</th>
    </tr>
    <?php $__currentLoopData = $scenarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scenario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($scenario->dialogue); ?></td>

            <?php $__currentLoopData = $scenario->choices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $choice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <td><?php echo e($choice->name); ?></td>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <td><a href="scenarios.edit">Scenario aanpassen</a></td>
            <td><a href="choices.edit">Keuzes aanpassen</a></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<?php /**PATH C:\xampp\htdocs\TLE-TEAM01-HSLEIDEN\resources\views/admin/story.blade.php ENDPATH**/ ?>