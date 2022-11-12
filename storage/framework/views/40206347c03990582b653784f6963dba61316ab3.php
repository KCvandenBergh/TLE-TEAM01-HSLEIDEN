

    <a href="create" class="button">Maak een nieuwe casus</a>
    <table class="table">
        <tr>
            <th>Naam casus</th>
            <th>Description casus</th>
            <th>Scenario's</th>
            <th>Aanpassen</th>
            <th>Verwijderen</th>
        </tr>
        <?php $__currentLoopData = $stories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $story): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($story->title); ?></td>
                <td><?php echo e($story->description); ?></td>
                <td><a href="<?php echo e(route('story', $story->id)); ?>">Scenario's</a></td>
                <td><a href="stories.edit">Casus informatie aanpassen</a></td>
                <td><a href="delete">Verwijderen</a></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

<?php /**PATH C:\xampp\htdocs\TLE-TEAM01-HSLEIDEN\resources\views/admin/index.blade.php ENDPATH**/ ?>