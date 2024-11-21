<?php

use Illuminate\Support\Facades\Route;

// Charger les routes du module GestionArticle
require base_path('app/Modules/GestionArticle/Routes/web.php');

// Charger les routes du module GestionCategories
require base_path('app/Modules/GestionCategories/Routes/web.php');