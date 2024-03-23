{{-- paling bener
<header class="">
  <nav class="flex items-center w-auto h-16 bg-white rounded-lg shadow-lg isolate">
    <div class="flex items-center justify-center w-1/5 font-semibold ">
      <a href="">WintérLand</a>
    </div>
    <div class="flex items-center w-3/5 font-semibold justify-evenly ">
      <a href="">Home</a>
      <a href="">About Us</a>
      <a href="">Products</a>
      <a href="">Contact</a>
    </div>
    <div class="flex items-center w-1/5 font-semibold justify-evenly">
      <button>Login</button>
      <button>Sign Up</button>
    </div>
  </nav>
</header> --}}

{{-- <header>
  <nav x-data="{ open: false }"  class="flex justify-between w-auto h-auto bg-white rounded-lg shadow-lg md:h-16">
      <div class="flex justify-between w-full ">
          <div :class="open ? 'hidden':'flex'" 
          class="flex items-center w-1/2 px-6 font-semibold md:w-1/5 md:px-1 md:flex md:items-center md:justify-center"
          x-transition:enter="transition ease-out duration-300">
              <a href="">WintérLand</a>
          </div>

          <div  
          x-show="open" x-transition:enter="transition ease-in-out duration-300"
          class="relative flex flex-col w-full h-auto md:hidden">
              <div class="flex flex-col items-center justify-center gap-2 font-semibold">
                  <a href="">Home</a>
                  <a href="">About Us</a>
                  <a href="">Products</a>
                  <a href="">Contact</a>
                  <button>Login</button>
                  <button>Sign Up</button>
              </div>
          </div>
          <div class="items-center hidden w-3/5 font-semibold justify-evenly md:flex">
            <a href="">Home</a>
            <a href="">About Us</a>
            <a href="">Products</a>
            <a href="">Contact</a>
          </div>
          <div class="items-center hidden w-1/5 font-semibold justify-evenly md:flex">
            <button>Login</button>
            <button>Sign Up</button>
          </div>
          <button class="relative w-10 h-10 text-gray-500 bg-white focus:outline-none md:hidden " @click="open = !open">
              <span class="sr-only">Open main menu</span>
              <div class="absolute block w-5 transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2">
                  <span aria-hidden="true" class="block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out" :class="{'rotate-45': open,' -translate-y-1.5': !open }"></span>
                  <span aria-hidden="true" class="block absolute  h-0.5 w-5 bg-current   transform transition duration-500 ease-in-out" :class="{'opacity-0': open } "></span>
                  <span aria-hidden="true" class="block absolute  h-0.5 w-5 bg-current transform  transition duration-500 ease-in-out" :class="{'-rotate-45': open, ' translate-y-1.5': !open}"></span>
              </div>
          </button>
      </div>
  </nav>
<header/>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script> --}}
