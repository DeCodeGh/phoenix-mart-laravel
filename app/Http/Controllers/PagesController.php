<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function home()
  {
    return view('home');
  }

  public function category($category)
  {

    $products = Product::where('category', $category)->paginate(12);
    $categories = Category::all()->whereNotNull();
    return view('category', compact('products', 'categories'));
  }

  public function dashboard()
  {
    return view('admin.index');
  }

  public function products()
  {
    $products = Product::paginate(12);
    $categories = Category::all();
    return view('products', compact('products', 'categories'));
  }
}
