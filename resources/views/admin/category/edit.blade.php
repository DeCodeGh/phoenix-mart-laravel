@extends('templates.dashboard')
@section('dashboard-content')
<section class="flex justify-center py-10">
  <form action="{{route('category.update',$category->id)}}" method="post" class="">
    @csrf @method('patch')
    <h3 class="text-3xl capitalize w-full">create a category</h3>
        <div>
          <div class="w-full mt-4">
            <label class="block">ID</label>
          <input type="text" name="id" id=""  class="mt-4" placeholder="" value="{{$category->id}}">
          </div>
           <div class="w-full mt-4">
            <label class="block">Name</label>
            <input type="text" name="name" id="" class="mt-4" placeholder="category name" value="{{$category->name}}">
          </div>

          <div class="w-full mt-4">
            <button type="submit" class="bg-black text-white rounded px-2 py-2 capitalize">update</button>
          </div>
        </div>
  </form>
</section>
@endsection
