<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Garment extends Model
{
    protected $fillable = ['type', 'size', 'color', 'thematic'];

    public function product(){
    	return $this->belongsTo(Product::class);
    }
}
