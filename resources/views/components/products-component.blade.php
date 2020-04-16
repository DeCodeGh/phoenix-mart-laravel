


                      <div class="border border-black">
                            <img src="<?php echo asset('storage/'.$product->featured_img) ?>" alt="" class="w-full h-auto">

                      <div class="px-2 text-3xl font-extrabold">
                        <span>{{$product->name}}</span>
                      </div>
                      <div>
                      <span class="ml-4 px-3 py-2 bg-black rounded-md text-sm font-medium leading-5 text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out"
                      >{{$product->category}}</span>
                      </div>
                          <div class="md:flex justify-center py-4 ">
                          <a href="{{route('product.view',$product->id)}}"class="border-2 block text-center antialiased border-white bg-black text-white hover:bg-white hover:border-black hover:text-black w-64 px-4 py-2 ml-2 mr-2 font-bold text-xl uppercase">Buy</a>
                          </div>
                      </div>

