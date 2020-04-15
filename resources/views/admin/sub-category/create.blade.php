@extends('templates.dashboard')
@section('dashboard-content')
<section class="flex justify-center py-10">
  <form action="{{route('subcategory.store')}}" method="post" class="">
    @csrf
    <h3 class="text-3xl capitalize w-full">create a sub category</h3>
        <div>
          <div class="w-full mt-4">
            <label class="block">ID</label>
            <input type="text" name="id" id="" class="mt-4" placeholder="i.e 1 numbers only">
          </div>
           <div class="w-full mt-4">
            <label class="block">Name</label>
            <input type="text" name="name" id="" class="mt-4" placeholder="sub category name">
          </div>
            <div class="w-full mt-4">
            <label class="block">Category Name</label>
            <select name="category" class="mt-4 w-full">
             <option value="" default>Select One</option>
             @foreach($categories as $category)
           <option value="{{$category->name}}" default>{{$category->name}}</option>
           @endforeach
           </select>
          </div>

          <div class="w-full mt-4">
            <button type="submit" class="bg-black text-white rounded px-2 py-2 capitalize">create</button>
          </div>
        </div>
  </form>
</section>
@endsection
