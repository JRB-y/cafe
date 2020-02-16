<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = ['name', 'desc', 'img_path'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
