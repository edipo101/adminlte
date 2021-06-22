<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dvd extends Model
{
    protected $fillable = ['category_id', 'type_id', 'title', 'slug', 'gender', 'language', 'number_discs', 'release_date'];

    public function product(){
    	return $this->belongsTo(Product::class);
    }
}
