{{-- paling bener
<header class="">
  <nav class="isolate flex h-16 w-auto items-center bg-white shadow-lg rounded-lg">
    <div class="flex w-1/5 items-center justify-center font-semibold ">
      <a href="">WintérLand</a>
    </div>
    <div class="flex w-3/5 items-center justify-evenly font-semibold ">
      <a href="">Home</a>
      <a href="">About Us</a>
      <a href="">Products</a>
      <a href="">Contact</a>
    </div>
    <div class="flex w-1/5 items-center justify-evenly font-semibold">
      <button>Login</button>
      <button>Sign Up</button>
    </div>
  </nav>
</header> --}}

{{-- <header>
  <nav x-data="{ open: false }"  class="flex h-auto w-auto bg-white shadow-lg rounded-lg justify-between
      md:h-16">
      <div class="flex w-full justify-between ">
          <div :class="open ? 'hidden':'flex'" 
          class="flex px-6 w-1/2 items-center font-semibold
          md:w-1/5 md:px-1 md:flex md:items-center md:justify-center"
          x-transition:enter="transition ease-out duration-300">
              <a href="">WintérLand</a>
          </div>

          <div  
          x-show="open" x-transition:enter="transition ease-in-out duration-300"
          class="flex flex-col w-full h-auto relative
          md:hidden">
              <div class="flex flex-col items-center justify-center gap-2 font-semibold">
                  <a href="">Home</a>
                  <a href="">About Us</a>
                  <a href="">Products</a>
                  <a href="">Contact</a>
                  <button>Login</button>
                  <button>Sign Up</button>
              </div>
          </div>
          <div class="hidden w-3/5 items-center justify-evenly font-semibold
          md:flex">
            <a href="">Home</a>
            <a href="">About Us</a>
            <a href="">Products</a>
            <a href="">Contact</a>
          </div>
          <div class="hidden w-1/5 items-center justify-evenly font-semibold
          md:flex">
            <button>Login</button>
            <button>Sign Up</button>
          </div>
          <button class="text-gray-500 w-10 h-10 relative focus:outline-none bg-white
                          md:hidden
                        " @click="open = !open">
              <span class="sr-only">Open main menu</span>
              <div class="block w-5 absolute left-1/2 top-1/2   transform  -translate-x-1/2 -translate-y-1/2">
                  <span aria-hidden="true" class="block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out" :class="{'rotate-45': open,' -translate-y-1.5': !open }"></span>
                  <span aria-hidden="true" class="block absolute  h-0.5 w-5 bg-current   transform transition duration-500 ease-in-out" :class="{'opacity-0': open } "></span>
                  <span aria-hidden="true" class="block absolute  h-0.5 w-5 bg-current transform  transition duration-500 ease-in-out" :class="{'-rotate-45': open, ' translate-y-1.5': !open}"></span>
              </div>
          </button>
      </div>
  </nav>
<header/>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script> --}}




<nav class="bg-white border-gray-200 dark:bg-gray-900 shadow-lg rounded-lg">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <span class="self-center font-semibold whitespace-nowrap dark:text-white">WintérLand</span>
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full h-[50vh] md:h-auto md:block md:w-auto " id="navbar-default">
      <ul class="font-normal lg:font-semibold flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="/" class="block py-2 px-3 text-white bg-pink-400 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">Home</a>
        </li>
        <li>
          <a href="/" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About Us</a>
        </li>
        <li>
          <a href="/" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Products</a>
        </li>
        <li>
          <a href="/" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>




