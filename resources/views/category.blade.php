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
            <div class="w-full md:w-64">

            </div>

            <div class="flex-1">
                <div class="md:flex px-2">
                    <div class="md:w-1/3 border border-black mr-2 px-2 py-2 mb-4">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit tenetur nobis assumenda iure magni accusantium exercitationem atque corporis sint quo!
                    </div>

                    <div class="md:w-1/3 border border-black mr-2 px-2 py-2 mb-4">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit tenetur nobis assumenda iure magni accusantium exercitationem atque corporis sint quo!
                    </div>
                    <div class="md:w-1/3 border border-black mr-2 px-2 py-2 mb-4">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit tenetur nobis assumenda iure magni accusantium exercitationem atque corporis sint quo!
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

