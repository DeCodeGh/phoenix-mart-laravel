@extends('templates.app')
@section('content')
    <div class="w-full px-2">
        <div class="flex flex-wrap">
            <div class="md:w-4/6 flex flex-wrap px-4 py-6 -mx-2">
                <div class="md:w-2/3">
                    <img src="https://images.unsplash.com/photo-1497339100210-9e87df79c218?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&q=60" alt="">
                </div>
                <div class="flex-1  inline-flex md:block px-2 py-2">
                    <div class="mb-2 px-2">
                             <img src="https://images.unsplash.com/photo-1497339100210-9e87df79c218?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&q=60" alt="">
                    </div>

                    <div class="mb-2 px-2">
                        <img src="https://images.unsplash.com/photo-1497339100210-9e87df79c218?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&q=60" alt="">
                    </div>

                    <div class="mb-2 px-2">
                         <img src="https://images.unsplash.com/photo-1497339100210-9e87df79c218?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&q=60" alt="">
                    </div>

                </div>
            </div>

            <div class="flex-1  px-1 py-6">
                <div class="flex flex-wrap justify-between text-base">
                    <div class="text-4xl font-bold">
                       {{$product->name}}
                    </div>
                    <div class="text-4xl font-bold"> {{$product->price}} $</div>
                </div>

                <div>
                    <p class="mb-4">
                        {{$product->description}}
                    </p>
                </div>
                <div>
                  <button type="submit" class="bg-black px-2 py-2 uppercase text-white font-extrabold border-2 border-black hover:bg-white hover:text-black ">buy</button>
                </div>
            </div>
        </div>


        {{-- <div class="w-full md:w-5/6 px-4 py-6 mx-auto">
            <h2 class="text-4xl mb-4 font-extrabold">Product Story</h2>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam assumenda officiis eaque enim, saepe beatae culpa, ducimus distinctio adipisci iure dolores dicta sed. Repudiandae, voluptate! Dolor, natus non rem quibusdam laudantium qui laboriosam. Facere cum autem deserunt praesentium excepturi veritatis.
            </p>
        </div> --}}
    </div>
@endsection
