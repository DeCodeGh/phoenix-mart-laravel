@extends('templates.app')

@section('content')
@include('templates.partials._global-navigation')
<div class="w-full">
    <div class="w-full">
        <div class="flex">
            <div class="w-64 bg-gray-700 px-2 h-full text-white">
                <header class="text-2xl font-bold">Settings</header>
                <a href="ml-4">Profile</a>
                <a href="ml-4">Passwords</a>

                <header class="text-2xl font-bold">Products</header>
                <a href="ml-4">All Products</a>
            </div>

            <div class="flex-1 px-4">

            </div>
        </div>
    </div>
</div>
@endsection
