<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubCategoryController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $subcategories = SubCategory::all();
    return  view('admin.sub-category.index', compact('subcategories'));
    //
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create(Category $category)
  {
    $categories = Category::all();
    return view('admin.sub-category.create', compact('categories'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $sub_category = new SubCategory;
    $sub_category->id = $request->input('id');
    $sub_category->name = $request->input('name');
    $sub_category->category_id = $request->input('category_id');
    $category = Category::where('id', $sub_category->category_id)->first();
    $sub_category->category_name = $category->name;

    $sub_category->update();

    return redirect()->route('subcategory.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($subcategory)
  {
    $categories = Category::all();
    $sub_category = SubCategory::where('id', $subcategory)->first();
    return view('admin.sub-category.edit', compact('sub_category', 'categories'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $subcategory)
  {
    $sub_category =  SubCategory::where('id', $subcategory)->first();
    $sub_category->id = $request->get('id');
    $sub_category->name = $request->get('name');
    $sub_category->category_id = $request->get('category_id');
    $category = Category::where('id', $sub_category->category_id)->first();
    $sub_category->category_name = $category->name;
    $sub_category->save();
    return redirect()->route('subcategory.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy(SubCategory $subcategory)
  {
    $subcategory = SubCategory::find($subcategory)->first()->delete();
    return redirect()->route('subcategory.index');
  }
}
