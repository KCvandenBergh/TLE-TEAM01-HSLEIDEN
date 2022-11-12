<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
<body>
<table>
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th></th>
    </tr>
<?php $__currentLoopData = $storys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $story): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($story->title); ?></td>
        <td><?php echo e($story->description); ?></td>
        <td><button><a href="<?php echo e(route('cases.show', $story->id)); ?>">View</a></button></td>
    </tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</body>
</html>
<?php /**PATH C:\Users\Moises'95\PhpstormProjects\TLE-TEAM01-HSLEIDEN\resources\views/cases/index.blade.php ENDPATH**/ ?>