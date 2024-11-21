<?php
// app/Modules/GestionCategories/Models/Category.php
namespace App\Modules\GestionCategories\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}