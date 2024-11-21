

<?php $__env->startSection('content'); ?>
    <h1>Liste des Articles</h1>
    <a href="/articles/create/">Créer un nouvel article</a>
    <ul>
        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <a href="/articles/<?php echo e($article['id']); ?>">
                    <?php echo e($article["id"]); ?>

                </a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Autoformation-Solicode-Mobile\Laravel\Tuto_7\resources\views/articles/index.blade.php ENDPATH**/ ?>