

<?php $__env->startSection('content'); ?>
    <h3>Title :<strong><?php echo e($article['title']); ?></strong> </h1>
    <p> Content :<strong><?php echo e($article['content']); ?></strong> </p>
    <button>    <a href="/articles/<?php echo e($article['id']); ?>/edit">Modifier</a></button>
    <form action="/articles/<?php echo e($article['id']); ?>" method="POST" style="display:inline;">
        <?php echo csrf_field(); ?> 
        <?php echo method_field('DELETE'); ?> 
        <button type="submit">Supprimer</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Autoformation-Solicode-Mobile\Laravel\Tuto_8\resources\views/articles/show.blade.php ENDPATH**/ ?>