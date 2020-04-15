@extends('templates.dashboard')
@section('dashboard-content')
<section class="flex justify-center py-10">
  <form action="{{route('subcategory.update',$sub_category->id)}}" method="post" class="">
    @csrf @method('patch')
    <h3 class="text-3xl capitalize w-full">edit a sub category</h3>
        <div>
          <div class="w-full mt-4">
            <label class="block">ID</label>
          <input type="text" name="id" id=""  class="mt-4" placeholder="" value="{{$sub_category->id}}">
          </div>
           <div class="w-full mt-4">
            <label class="block">Name</label>
            <input type="text" name="name" id="" class="mt-4" placeholder="category name" value="{{$sub_category->name}}">
          </div>

              <div class="w-full mt-4">
            <label class="block">Category Name</label>
            <select name="category" class="mt-4 w-full">
            <option value="" default>{{$category->name}}</option>
             @foreach($categories as $category)
           <option value="{{$category->name}}" default>{{$category->name}}</option>
           @endforeach
           </select>
          </div>

          <div class="w-full mt-4">
            <button type="submit" class="bg-black text-white rounded px-2 py-2 capitalize">update</button>
          </div>
        </div>
  </form>
</section>
@endsection
