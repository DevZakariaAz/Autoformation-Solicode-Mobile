<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
// database/seeders/DatabaseSeeder.php
public function run()
{
    $this->call([
        \App\Modules\GestionCategories\Seeders\CategorySeeder::class,
        \App\Modules\GestionArticle\Seeders\ArticleSeeder::class,
    ]);
}
}
