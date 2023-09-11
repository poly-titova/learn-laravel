<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        foreach ($products as $product) {
            echo 'Title: ' . $product->title;
            echo "<br>";
        }

        // return view('product.index');
    }
}
