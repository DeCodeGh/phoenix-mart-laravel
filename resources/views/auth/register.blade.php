@extends('templates.app')

@section('content')

<div class="w-full">
  <h3 class="text-4xl leading-10 w-full tracking-tight font-extrabold text-gray-900 text-center mt-4">Phoenix Mart</h3>
  <h4 class="text-2xl leading-10 w-full tracking-tight font-bold text-gray-900 text-center mt-4">Registration</h4>
  <div class="flex  justify-center  bg-white mt-4 bg-gray-50 px-4 mt-4">
  <form action="{{route('register')}}" method="post" class="bg-gray-300 shadow-md rounded px-8 pt-6 pb-8 mb-4 md:w-2/5 mx-auto">
     @csrf
      <div class="w-full">
        <label for="" class="block text-gray-700 font-extrabold text-xl mb-2 mt-4">Name</label>
        <input type="text" name="name" id="" class=" mt-1 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>
       <div class="w-full">
        <label for="" class="block text-gray-700 font-extrabold text-xl mb-2 mt-4">Email</label>
        <input type="text" name="email" id="" class=" mt-1 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>
       <div class="w-full">
        <label for="" class="block text-gray-700 font-extrabold text-xl mb-2 mt-4">Password</label>
        <input type="password" name="password" id="" class=" mt-1 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>
       <div class="w-full">
        <label for="" class="block text-gray-700 font-extrabold text-xl mb-2 mt-4">Confirm Password</label>
        <input type="password" name="password_confirmation" id="" class=" mt-1 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>
       <div class="w-full mt-4">
       <button class="bg-black text-white rounded px-4 py-2">Register</button>
      </div>
   </form>
  </div>
</div>

@endsection
