@extends('templates.dashboard')

@section('dashboard-content')

<section>
  <h3 class="text-3xl font-extrabold">
    <span>Categories</span>
  </h3>

  <div class="mt-4">
  <a href="{{route('subcategory.create')}}">Add New</a>
  </div>
  <div>


  <table class="mt-4">
    <thead class="bg-gray-300">
      <th class="px-4 py-2">Id</th>
      <th class="px-4 py-2">Sub Category Name</th>
      <th class="px-4 py-2">Category Name</th>
      <th class="px-4 py-2">Actions</th>
    </thead>
    <tbody>
      @foreach($subcategories as $subcategory)
      <tr>
      <td>{{$subcategory->id}}</td>
      <td>{{$subcategory->name}}</td>
      <td>{{$subcategory->category_name}}</td>
        <td class="inline-flex">
        <a href="{{route('subcategory.edit',$subcategory->id)}}" class="mx-2">edit</a>
        <form class="mx-2" method="POST" action="{{route('subcategory.delete',$subcategory->id)}}">
          @method('delete') @csrf
          <button type="submit">delete</button>
        </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>


  </div>
</section>

@endsection
