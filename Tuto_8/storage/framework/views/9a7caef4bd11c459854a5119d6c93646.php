

<?php $__env->startSection('content'); ?>
    <h1> Créer un nouvel article</h1>
    <form action="/articles" method="POST">
        <?php echo csrf_field(); ?>
        <?php if(isset($article)): ?>
            <?php echo method_field('PUT'); ?>
        <?php endif; ?>
        <label for="title">Titre :</label>
        <input type="text" name="title" value="" required>
        <label for="content">Contenu :</label>
        <textarea name="content" required></textarea>
        <button type="submit">Create</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Autoformation-Solicode-Mobile\Laravel\Tuto_7\resources\views/articles/create.blade.php ENDPATH**/ ?>