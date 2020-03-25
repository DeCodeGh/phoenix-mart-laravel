@extends('templates.app')

@section('content')
    @include('templates.partials._global-navigation')

    <div class="hero w-full ">
        <div class="w-full bg-white flex">
            <a href="" class="font-bold">Home</a>
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8"><path d="M9 5l7 7-7 7"></path></svg>
            <a href="" class="font-bold">Category</a>
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8"><path d="M9 5l7 7-7 7"></path></svg>
            <a href="">sub category</a>
        </div>

    </div>

@endsection

