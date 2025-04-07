<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // $products = Product::where('color', 'rojo')
        //     ->where('size', 'S')
        //     ->get();

        $products = Product::query()
            ->whereHas('attributes', function($query){
                $query->where('attributes.name', 'color')
                    ->where('attribute_product.value', 'rojo');
            })
            ->where('attributes', function($query){
                $query->where('attributes.name', 'size')
                    ->where('attribute_product.value')
            }
        
        return view('products.index', compact('products'));
    }
}
