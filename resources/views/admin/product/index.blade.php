@extends('templates.dashboard')

@section('dashboard-content')

<section>
  <h3 class="text-3xl font-extrabold">
    <span>Categories</span>
  </h3>

  <div class="mt-4">
  <a href="{{route('product.create')}}">Add New</a>
  </div>
  <div>


  <table class="mt-4">
    <thead class="bg-gray-300">
      <th class="px-4 py-2">Id</th>
      <th class="px-4 py-2">Name</th>
      <th class="px-4 py-2">Category</th>
      <th class="px-4 py-2">Sub Category</th>
      <th class="px-4 py-2">Price</th>
      <th class="px-4 py-2">Stock</th>
      <th class="px-4 py-2">In Stock</th>
      <th class="px-4 py-2">Action</th>
    </thead>
    <tbody>
      @foreach($products as $product)
      <tr>
      <td>{{$product->id}}</td>
      <td>{{$product->name}}</td>
      <td>{{$product->category}}</td>
      <td>{{$product->sub_category}}</td>
      <td>{{$product->price}}</td>
      <td>{{$product->stock}}</td>
      <td>{{$product->in_stock}}</td>
        <td class="inline-flex">
          <a href="{{route('product.edit',$product->id)}}" class="mx-2">edit</a>
          <form class="mx-2" method="POST" action="{{route('product.delete',$product->id)}}">
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
