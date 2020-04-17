@extends('templates.dashboard')
@section('dashboard-content')
<div class="flex justify-center py-10">
  <form action="{{route('product.store')}}" method="post" class="" enctype="multipart/form-data">
    @csrf
    <h3 class="text-3xl capitalize w-full">create a product</h3>
        <div>
          <div class="w-full mt-4">
            <label class="block">ID</label>
            <input type="text" name="id" id="" class="mt-4" placeholder="i.e 1 numbers only">
          </div>

           <div class="w-full mt-4">
            <label class="block">Featured Image</label>
            <input type="file" name="featured_img" id="" class="mt-4" placeholder="feature img">
          </div>

          <div class="w-full mt-4">
            <label class="block">Variation Image #1</label>
            <input type="file" name="vari_img_one" id="" class="mt-4" placeholder="variation img 1">
          </div>

          <div class="w-full mt-4">
            <label class="block">Variation Image #2</label>
            <input type="file" name="vari_img_two" id="" class="mt-4" placeholder="variation img 2">
          </div>



           <div class="w-full mt-4">
            <label class="block">Name</label>
            <input type="text" name="name" id="" class="mt-4" placeholder="product name">
          </div>

           <div class="w-full mt-4">
            <label class="block">Category Name</label>
            <select name="category_id" class="mt-4 w-full">
              <option value="" default>Select One</option>
              @foreach($categories as $category)
          <option value="{{$category->id}}">
            {{$category->name}}
          </option>
           @endforeach
           </select>
          </div>

             <div class="w-full mt-4">
            <label class="block">Sub Category Name</label>
            <select name="sub_category_name" class="mt-4 w-full">
              <option value="" default>Select One</option>
              @foreach($subcategories as $category)
          <option value="{{$category->name}}">
            {{$category->name}}
          </option>
           @endforeach
           </select>
          </div>
           <div class="w-full mt-4">
            <label class="block">price</label>
            <input type="text" name="price" id="" class="mt-4" placeholder="product price">
          </div>
           <div class="w-full mt-4">
            <label class="block">stock</label>
            <input type="text" name="stock" id="" class="mt-4" placeholder="product stock">
          </div>
           <div class="w-full mt-4">
             <label class="text-gray-600 block font-bold">In Stock</label>
              <div class="">
              <input type="radio" class="form-check-input" name="in_stock" value=0 >
              <label for="" class="form-check-label">yes</label>
              </div>

              <div class="">
              <input type="radio" class="" name="in_stock" value=1 >
              <label for=" " class="form-check-label">no</label>
              </div>
          </div>

          <div class="w-full mt-4">
            <label for="" class="text-gray-600 block font-bold">Description</label>
            <textarea name="description" cols="30" rows="5">

            </textarea>
          </div>

          <div class="w-full mt-4">
            <button type="submit" class="bg-black text-white rounded px-2 py-2 capitalize">create</button>
          </div>
        </div>
  </form>
</section>
@endsection
