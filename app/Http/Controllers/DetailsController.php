<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Book;
use App\Models\Detail;
use DB;

class DetailsController extends Controller
{
  public function index($id){
    $categories = Category::all();   
      $detailan = Detail::find($id);
      return view('detail', compact('detailan','categories') );
  }

}
