<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function categories(Request $request)
    {
    	$cat = Category::withsorteditems()->get();
    	return $cat->all();
    	
    }
}
