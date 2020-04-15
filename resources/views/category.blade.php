@extends('templates.app')
@section('content')
    <div class="hero w-full px-4 py-4">
        <div class="w-full bg-white flex">
        <a href="{{route('home')}}" class="font-bold">Home</a>
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6"><path d="M9 5l7 7-7 7"></path></svg>
            <a href="" class="font-bold">Categories</a>
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6"><path d="M9 5l7 7-7 7"></path></svg>
        <a href="#" class="font-bold">{{$category}}</a>
        </div>
    </div><!--/end of her -->

    <div class="w-full">
        <div class="md:flex flex-wrap">
            <div class="w-full md:w-64 px-4">
                <div class="border border-black px-2 h-auto mb-2">

                <header class="font-bold text-4xl">
                <a href="{{route('products')}}">Categories</a>
                </header>
                @foreach($categories as $category)
              <header class="font-bold text-2xl uppercase"><a class="" href="{{route('category',$category->name)}}">{{$category->name}}</a></header>
                @endforeach

                </div>
            </div>

            <div class="flex-1 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 px-4 gap-8">

              @forelse($products as $product)

                      <div class="border border-black">
                              <img src="https://images.unsplash.com/photo-1541717782351-e9acfdc4f0ab?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="" class=" mb-4">

                      <div class="px-2 text-3xl font-extrabold"> <span>{{$product->name}}</span></div>
                      <div>
<span class="ml-4 px-3 py-2 bg-black rounded-md text-sm font-medium leading-5 text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out"
                      >{{$product->category}}</span>
                      </div>
                          <div class="md:flex justify-center py-4 ">
                          <a href="{{route('product.view',$product->id)}}" class="border-2 block text-center antialiased border-white bg-black text-white hover:bg-white hover:border-black hover:text-black w-64 px-4 py-2 ml-2 mr-2 font-bold text-xl uppercase">Buy</a>
                          </div>
                      </div>
                    @empty
                    <p class="text-4xl">Nothing to show</p>
                    @endforelse

                <div class="w-full flex inline-flex mt-4">
                  {{ $products->render() }}
                </div>
            </div>
        </div>
    </div>

@endsection

