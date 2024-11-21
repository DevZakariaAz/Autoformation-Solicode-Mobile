<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Mon Blog Minimaliste'); ?></title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/boostrap.css">
</head>
<body>
    <header>
        <div class="card-header ">
                <h1 class="card-title text-info"> <i class="far fa-check-circle nav-icon"></i> Mon Blog</h1>
        </div>  
        <nav>
            <a class="btn btn-info" href="/articles">Accueil</a>
            <a class="btn btn-info" href="/articles/create/">Créer un Article</a>
        </nav>
    </header>

    <main>
        <div class="content">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <aside>
            <?php echo $__env->yieldContent('sidebar'); ?>
        </aside>
    </main>

<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.0.0
    </div>
    <strong>Droits d'auteur © 2014-2021 <a href="https://adminlte.io" class="text-info">Blog</a>.</strong> Tous droits réservés.
</footer>
</body>
</html>
<?php /**PATH C:\Autoformation-Solicode-Mobile\Laravel\Tuto_8\resources\views/layouts/app.blade.php ENDPATH**/ ?>