<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Category extends Model
{
    protected $fillable = ['name', 'slug', 'description'];

    public function products(){
    	return $this->hasMany(Product::class);
    }
}
