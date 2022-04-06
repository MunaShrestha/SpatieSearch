<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        $companies = Company::where('category_id', $category->id)->get();
        return view('category', compact('category', 'companies'));
    }

}
