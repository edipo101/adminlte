<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DataTables;

class ProductController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $products = Product::all();
        // return $products;
        return view('products.product-index', compact('products'));
    } 

    public function dataTable(){
        $products = Product::with('category')->with('dvd')->get();
        return DataTables::of($products)
            ->addColumn('details', function($product){
                if ($product->category_id == 1){
                    $dvd = $product->dvd;
                    return $dvd->title.'; Dvds: '.$dvd->number_discs;    
                }
                else{
                    $garment = $product->garment;
                    return $garment->type.'; '.$garment->thematic.'; TALLA: '.$garment->size;
                }
                
            })
            ->addColumn('actions', function(){
                return view('partials._actions');
            })
            ->toJson();
    }   
    
    public function create()
    {
        return view('products.product-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
