<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>

<nav class="bg-black md:py-6">
      <div class="flex justify-between">
          <div class="hidden sm:block sm:ml-6">
             <a href="{{route('home')}}" class="ml-4 px-3 py-2 rounded-md text-sm font-medium leading-5 text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Home</a>
          <a href="{{route('products')}}" class="ml-4 px-3 py-2 rounded-md text-sm font-medium leading-5 text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Shop</a>

          </div>

          <div class="">
            @auth
          <a href="{{route('dashboard')}}" class="text-gray-400 hover:text-white px-2">User</a>
              <a class="text-gray-400 hover:text-white px-2" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        <span class=" -md-log-out"></span>&nbsp;Logout
                                    </a>
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
              </a>
            @else
              <a href="{{route('login')}}" class="text-gray-400 hover:text-white px-2">Login</a>
              <a href="{{route('register')}}" class="text-gray-400 hover:text-white px-2">Register</a>
            @endif
          </div>
      </div>
</nav>
