@extends('templates.app')

@section('content')

<div class="w-full">
  <h3 class="text-4xl leading-10 w-full tracking-tight font-extrabold text-gray-900 text-center mt-4">Phoenix Mart</h3>
  <div class="flex  justify-center  bg-white mt-4 bg-gray-50 px-4 mt-4">
  <form action="{{route('login')}}" method="post" class="bg-gray-300 shadow-md rounded px-8 pt-6 pb-8 mb-4">
     @csrf
      <div class="w-full mt-4">
        <label for="" class="block text-gray-700 text-sm font-extrabold  text-xl  mb-2">Email</label>
        <input type="text" name="email" id="" autofocus class=" mt-1 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username">
      </div>
       <div class="w-full mt-4">
        <label for="" class="block text-gray-700 text-sm font-extrabold text-xl  mb-2">Password</label>
        <input type="password" name="password" id="" class="mt-1 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>
       <div class="w-full mt-4">
       <button class="bg-black text-white rounded px-4 py-2">Login</button>
      </div>
   </form>
  </div>
</div>
@endsection
