@extends('templates.app')

@section('content')
    @include('templates.partials._global-navigation')

    <div class="hero w-full px-4 py-4">
        <div class="w-full bg-white flex">
        <a href="{{route('home')}}" class="font-bold">Home</a>
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6"><path d="M9 5l7 7-7 7"></path></svg>
            <a href="" class="font-bold">Category</a>
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6"><path d="M9 5l7 7-7 7"></path></svg>
            <a href="">sub category</a>
        </div>

        <div class="w-full">
            <div class="flex">
                <div class="md:w-1/3">

                </div>
                <div class="md:w-2/3">

                </div>
            </div>
        </div>

    </div><!--/end of her -->

    <div class="w-full">
        <div class="md:flex flex-wrap">
            <div class="w-full md:w-64 px-4">
                <div class="border border-black px-2 h-auto mb-2">

                <header class="font-bold text-4xl">
                    Women
                </header>
                <header class="font-bold text-2xl uppercase">shoes</header>
                <header class="font-bold text-2xl uppercase">accessories</header>
                <header class="font-bold text-2xl uppercase">sports</header>
                <header class="font-bold text-2xl uppercase">sale</header>



                </div>
            </div>

            <div class="flex-1">
                <div class="flex flex-wrap -mx-2">
                    <div class="md:w-1/3 px-2 mb-4">
                    <div class=" border border-black">
                            <img src="https://images.unsplash.com/photo-1541717782351-e9acfdc4f0ab?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="" class=" mb-4">

                        <div class="md:flex justify-center py-4 ">
                        <button class="border-2 block text-center antialiased border-white bg-black text-white hover:bg-white hover:border-black hover:text-black w-64 px-4 py-2 ml-2 mr-2 font-bold text-xl uppercase">Buy</button>
                        </div>
                    </div>
                    </div>

                    <div class="md:w-1/3  px-2 mb-4">
                         <div class=" border border-black">
                            <img src="https://images.unsplash.com/photo-1541717782351-e9acfdc4f0ab?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="" class=" mb-4">

                        <div class="md:flex justify-center py-4 ">
                        <button class="border-2 block text-center antialiased border-white bg-black text-white hover:bg-white hover:border-black hover:text-black w-64 px-4 py-2 ml-2 mr-2 font-bold text-xl uppercase">Buy</button>
                        </div>
                    </div>
                    </div>

                    <div class="md:w-1/3  px-2 mb-4">
                        <div class=" border border-black">
                            <img src="https://images.unsplash.com/photo-1541717782351-e9acfdc4f0ab?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="" class=" mb-4">

                        <div class="md:flex justify-center py-4 ">
                        <button class="border-2 block text-center antialiased border-white bg-black text-white hover:bg-white hover:border-black hover:text-black w-64 px-4 py-2 ml-2 mr-2 font-bold text-xl uppercase">Buy</button>
                        </div>
                    </div>
                    </div>

                      <div class="md:w-1/3  px-2 mb-4">
                        <div class=" border border-black">
                            <img src="https://images.unsplash.com/photo-1541717782351-e9acfdc4f0ab?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="" class=" mb-4">

                        <div class="md:flex justify-center py-4 ">
                        <button class="border-2 block text-center antialiased border-white bg-black text-white hover:bg-white hover:border-black hover:text-black w-64 px-4 py-2 ml-2 mr-2 font-bold text-xl uppercase">Buy</button>
                        </div>
                    </div>
                    </div>

                    <div class="md:w-1/3  px-2 mb-4">
                        <div class=" border border-black">
                            <img src="https://images.unsplash.com/photo-1541717782351-e9acfdc4f0ab?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="" class=" mb-4">

                        <div class="md:flex justify-center py-4 ">
                        <button class="border-2 block text-center antialiased border-white bg-black text-white hover:bg-white hover:border-black hover:text-black w-64 px-4 py-2 ml-2 mr-2 font-bold text-xl uppercase">Buy</button>
                        </div>
                    </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

@endsection

