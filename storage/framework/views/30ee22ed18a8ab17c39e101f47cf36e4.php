<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        <?php echo $__env->yieldContent('title', 'T2P Test'); ?>
    </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

    <?php echo $__env->yieldContent('style'); ?>
</head>

<body>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->yieldContent('scripts'); ?>
</body>

</html>
<?php /**PATH /home/yanis/Desktop/test-technique-t2p-master/resources/views/layouts/root.blade.php ENDPATH**/ ?>