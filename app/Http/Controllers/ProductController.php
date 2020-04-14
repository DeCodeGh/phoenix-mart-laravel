<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $products = Product::all();
    return view('admin.product.index', compact('products'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create(Category $category)
  {
    $categories = Category::all();
    return view('admin.product.create', compact('categories'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {

    $product = new Product;
    $product->id = $request->input('id');
    $product->name = $request->input('name');
    $product->category = $request->input('category');
    $product->price = $request->input('price');
    $product->stock = $request->input('stock');
    $product->in_stock = $request->input('in_stock');
    $product->description = $request->input('description');

    $product->save();
    return redirect()->route('product.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show(Product $product)
  {
    $product = Product::find($product)->first();
    return view('product', compact('product'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit(Product $product, Category $categories)
  {
    $product =  Product::find($product)->first();
    $categories = Category::all();
    return view('admin.product.edit', compact('product', 'categories'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Product $product)
  {
    $categories = Category::all();
    $product =  Product::find($product)->first();
    $product->id = $request->get('id');
    $product->name = $request->get('name');
    $product->category = $request->get('category');
    $product->price = $request->get('price');
    $product->stock = $request->get('stock');
    $product->in_stock = $request->get('in_stock');
    $product->description = $request->get('description');
    $product->save();
    return redirect()->route('product.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy(Product $product)
  {
    $product = Product::find($product)->first();
    $product->delete();
    return redirect()->route('product.index');
  }
}
