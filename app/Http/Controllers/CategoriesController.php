<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index($category)
    {
        $category = Category::where('alias', $category)->first();

        return view('categories.index', [
            'category' => $category
        ]);
    }
}
