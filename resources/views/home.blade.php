@extends('templates.app')

@section('content')
    @include('templates.partials._global-navigation')
<div id="hero" class="w-full flex mb-4">

        <div class="w-full  flex-shrink-0 md:w-1/3 px-2 bg-black text-white py-4">
            <header class="text-6xl text-center capitalize">home sweet home</header>
            <p class="text-center text-xl px-6 mb-4">Relax, unwind and turn up the heat all without leaving the house or touching the thermostat.</p>
            <div class="flex justify-center">
                <button class="border-2 antialiased border-white hover:bg-white hover:text-black px-4 py-2 ml-2 mr-2 font-bold text-xl">shop men</button>
                <button class="border-2 antialiased hover:bg-white hover:text-black border-white px-4 py-2 mr-2 font-bold text-xl">shop women</button>
            </div>
        </div>
        <div class="w-full bg-local md:w-2/3 flex-1" >
            <img src="https://images.unsplash.com/photo-1465453869711-7e174808ace9?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="w-full" alt="">

        </div>

</div> <!-- /end hero -->

<div class="w-full mb-0 -mt-5 text-center" style="background-color: #DFDBE5;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='12' viewBox='0 0 20 12'%3E%3Cg fill-rule='evenodd'%3E%3Cg id='charlie-brown' fill='%239C92AC' fill-opacity='0.4'%3E%3Cpath d='M9.8 12L0 2.2V.8l10 10 10-10v1.4L10.2 12h-.4zm-4 0L0 6.2V4.8L7.2 12H5.8zm8.4 0L20 6.2V4.8L12.8 12h1.4zM9.8 0l.2.2.2-.2h-.4zm-4 0L10 4.2 14.2 0h-1.4L10 2.8 7.2 0H5.8z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");">
<h3 class="text-xl text-center uppercase font-bold py-2">stronger together</h3>
<h1 class="md:text-6xl uppercase text-center font-extrabold">extra 30% off</h1>
<h2 class="md:text-4xl uppercase font-bold">full price clothing</h2>
<h2 class="md:text-4xl uppercase font-bold">+20% off sale clothing</h2>
<h3 class=""></h3>
</div>
<div class="w-full front_cards--items mt-4">
    <div class="md:flex ">
        <div class="w-full md:1/3">
             <img src="https://images.unsplash.com/photo-1542053254535-def95e944232?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="" class="mt-4 mb-4">
            <div class="md:flex justify-center py-4">
            <button class="border-2 block text-center antialiased border-white bg-black text-white hover:bg-white hover:border-black hover:text-black w-64 px-4 py-2 ml-2 mr-2 font-bold text-xl" >shop men's clothing</button>

            </div>
        </div>

        <div class="w-full md:1/3">
            <img src="https://images.unsplash.com/photo-1541717782351-e9acfdc4f0ab?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="" class="mt-4 mb-4">

            <div class="md:flex justify-center py-4 ">
            <button class="border-2 block antialiased text-center  bg-black text-white hover:bg-white hover:text-black w-64 px-4 py-2 ml-2 mr-2 font-bold text-xl">shop women's clothing</button>

            </div>
        </div>

        <div class="w-full md:1/3">
            <img src="https://images.unsplash.com/photo-1555379136-43000445f585?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="" class="mt-4 mb-4">
            <div class="md:flex justify-center py-4">
            <button class="border-2 block antialiased  bg-black text-white hover:bg-white hover:text-black w-64 px-4 py-2 ml-2 mr-2 font-bold text-xl">shop kid's clothing</button>

            </div>
        </div>

    </div>
</div>
@endsection

@include('templates.partials._footer')