<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'desc', 'img_path', 'qt', 'weight', 'price', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
