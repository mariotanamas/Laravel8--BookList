<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Book;
use App\Models\Detail;
use DB;

class BooksController extends Controller{
  public function index(){
    $categories = Category::all();      
    $books = Book::simplePaginate(5);
      return view('home',compact('books','categories'));
  }


  public function searchCategory($category){
    $categories = Category::all();      
    $books = Book::where('category_id',$category)->simplePaginate(5);
    $bekas = Category::find($category);
    return view('category', compact('books', 'bekas', 'categories'));
  }
}
