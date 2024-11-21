<?php $__env->startSection('content'); ?>
    <h1>Créer un nouvel article</h1>
    <form action="/articles" method="POST">
        <?php echo csrf_field(); ?>
        <label for="title">Titre :</label>
        <input type="text" name="title" required>

        <label for="content">Contenu :</label>
        <input type="text" name="content" required>

        <label for="categorie">Catégorie :</label>
        <input type="text" name="categorie" required>

        <button type="submit">Créer</button>
    </form>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('sidebar'); ?>
    <h3>Catégories</h3>
    <ul>
        <li>Laravel</li>
        <li>PHP</li>
        <li>Programmation Web</li>
    </ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Autoformation-Solicode-Mobile\Laravel\Tuto_8\resources\views/articles/create.blade.php ENDPATH**/ ?>