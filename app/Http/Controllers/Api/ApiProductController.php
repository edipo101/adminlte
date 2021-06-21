<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use DataTables;

class ApiProductController extends Controller
{
    public function products(){
        $products = Product::with('category')->get();
        return DataTables::of($products)->toJson();
    }
}
