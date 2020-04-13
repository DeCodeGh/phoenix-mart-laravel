@extends('templates.app')

@section('content')

<div class="flex  justify-center  bg-white mt-4 px-4 py-16">
<form action="{{route('login')}}" method="post" class="px-8 py-4 mt-4 border-2 border-gray-400">
   @csrf
    <div class="w-full">
      <label for="" class="block">Email</label>
      <input type="text" name="email" id="" class="appearance-none mt-4">
    </div>
     <div class="w-full">
      <label for="" class="block">Password</label>
      <input type="password" name="password" id="" class="appearance-none focus:shadow-outline text-black focus:text-gray-600 mt-4">
    </div>
     <div class="w-full mt-4">
     <button class="bg-black text-white rounded px-4 py-2">Login</button>
    </div>
 </form>
</div>

@endsection
