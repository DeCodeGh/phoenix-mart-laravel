@extends('templates.app')

@section('content')
<div class="w-full">
    <div class="w-full">
        <div class="flex px-4">
            <div class="w-64 bg-gray-700 px-4  -mx-4 h-full text-white py-5">
               <div class="flex flex-col">
                  <header class="text-2xl font-bold">Settings</header>
                  <a href="" class="ml-4 px-4">Profile</a>
                  <a href="" class="ml-4">Passwords</a>

                  <header class="text-2xl font-bold">Products</header>
               <a href="{{route('product.index')}}" class="ml-4">Products</a>
                  <a href=""></a>
                  <a href=""></a>

                  <header class="text-2xl font-bold">Categories</header>
                  <a href="{{route('category.index')}}" class="ml-4">Categories</a>
                  <a href=""></a>
                  <a href=""></a>
               </div>
            </div>

            <div class=" md:mx-4 flex-1 px-4">
              @yield('dashboard-content')
            </div>
        </div>
    </div>
</div>
@endsection
