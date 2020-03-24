@extends('templates.app')

@section('content')
    @include('templates.partials._global-navigation')
<div id="hero" class="w-full">
    <div class="flex flex-wrap">
        <div class="w-full md:w-1/3 px-2 bg-black text-white py-4">
            <header class="text-6xl text-center">home sweet home</header>
            <p class="text-center text-xl px-6 mb-4">Relax, unwind and turn up the heat all without leaving the house or touching the thermostat.</p>
            <div class="flex justify-center">
                <button class="border-2 antialiased border-white hover:bg-white hover:text-black px-4 py-2 ml-2 mr-2 font-bold text-xl">shop men</button>
                <button class="border-2 antialiased hover:bg-white hover:text-black border-white px-4 py-2 mr-2 font-bold text-xl">shop women</button>
            </div>
        </div>
        <div class="w-full md:w-2/3"></div>
    </div>
</div>
@endsection
