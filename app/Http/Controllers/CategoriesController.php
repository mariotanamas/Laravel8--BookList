<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Book;
use App\Models\Detail;
use DB;

class CategoriesController extends Controller
{
  public function viewkontak(){
    $categories = Category::all();   
    return view('contact', compact('categories'));
  }

  
}
