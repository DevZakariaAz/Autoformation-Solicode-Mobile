

<?php $__env->startSection('content'); ?>
    <h1> un Article </h1>
    <form action="/articles/<?php echo e($article['id']); ?>" method="POST">
        <?php echo csrf_field(); ?>
          <?php if(isset($article)): ?>
            <?php echo method_field('PUT'); ?>
        <?php endif; ?>

        <label for="title">Titre :</label>
        <input type="text" name="title" value="<?php echo e($article['title']); ?>" required>
        <label for="content">Contenu :</label>
        <textarea name="content" required><?php echo e($article['content']); ?> </textarea>
        <button type="submit">edit</button>
    </form>
    <div>
                <a href="/articles/<?php echo e($article['id']); ?>">Retour a l'article</a>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Autoformation-Solicode-Mobile\Laravel\Tuto_7\resources\views/articles/edit.blade.php ENDPATH**/ ?>