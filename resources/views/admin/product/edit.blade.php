@extends('templates.dashboard')
@section('dashboard-content')
< class="flex justify-center py-10">
  <form action="{{route('product.update',$product->id)}}" method="post" class="">
    @csrf
    <h3 class="text-3xl capitalize w-full">Edit</h3>
        <div>
          <div class="w-full mt-4">
            <label class="block">ID</label>
          <input type="text" name="id" id="" class="mt-4" placeholder="i.e 1 numbers only" value="{{$product->id}}">
          </div>

           <div class="w-full mt-4">
            <label class="block">Name</label>
            <input type="text" name="name" id="" class="mt-4" placeholder="product name"  value="{{$product->name}}">
          </div>

          <div class="w-full mt-4">
            <label class="block">Category name</label>
            <input type="text" name="name" id="" class="mt-4" placeholder="product name"  value="{{$product->name}}">
          </div>

           <div class="w-full mt-4">
            <label class="block">price</label>
            <input type="text" name="price" id="" class="mt-4" placeholder="product name"  value="{{$product->price}}">
          </div>

           <div class="w-full mt-4">
            <label class="block">stock</label>
            <input type="text" name="stock" id="" class="mt-4" placeholder="product name"  value="{{$product->stock}}">
          </div>

           <div class="w-full mt-4">
             <label class="text-gray-600 block font-bold">In Stock</label>
              <div class="">
              <input type="radio" class="form-check-input" name="stock" value=0 >
              <label for="" class="form-check-label">yes</label>
              </div>

              <div class="">
                <input type="radio" class="" name="stock" value=1 >
                <label for="" class="form-check-label">no</label>
              </div>
          </div>

          <div class="w-full mt-4">
            <button type="submit" class="bg-black text-white rounded px-2 py-2 capitalize">create</button>
          </div>
        </div>
  </form>
</section>
@endsection
