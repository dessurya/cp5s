<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'amd_produk';

    protected $fillable = ['nama', 'description', 'img_produk', 'slug', 'id_category'];

    public function category()
	{
		return $this->belongsTo('App\Models\CategoryProduk', 'id_category');
	}
}
