<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Garment;

class Product extends Model
{
    protected $fillable = ['purchase_price', 'sale_price', 'utility', 'photo', 'barcode', 'category_id'];

    public function category(){
    	return $this->belongsTo(Category::class);
    }

    public function dvd(){
    	return $this->hasOne(Dvd::class);	
    }

    public function garment(){
    	return $this->hasOne(Garment::class);		
    }
}
