<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryProduk extends Model
{
    protected $table = 'amd_category_produk';

    protected $fillable = ['nama', 'description', 'img_category', 'slug'];
}
