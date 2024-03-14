<div  class="flex flex-col">
    <div class="flex w-full">
        <div class="static flex-col  w-2/3 sm:w-1/2 rounded-2xl h-[60vh] justify-center items-center flex">
            <h1 class="hidden px-5 text-xl text-white rounded-lg sm:text-2xl md:text-3xl lg:text-5xl md:bg-transparent md:shadow-none md:px-0">
                <span id="tagline">Unleash Your Skin's Potential <br class="hidden md:flex">with</span> 
                <span id="product-tagline" class="font-semibold text-black ">WintérLand</span>
            </h1>
            <h1 class="px-5 text-xl text-white rounded-lg sm:text-2xl md:text-3xl lg:text-5xl md:bg-transparent md:shadow-none md:px-0 ">
                <span id="tagline">Unleash Your Skin's Potential <br class="hidden md:flex">with</span> 
                <span id="product-tagline" class="font-semibold text-black ">WintérLand</span>

                
            </h1>
            <div class="flex w-full px-5 mt-4 md:pl-20 ">
                <a href="#contacts">
                    <button data-te-ripple-init data-te-ripple-color="light" type="button"
                {{-- #3b71ca --}}
                  class="font-semibold inline-block rounded-full bg-pink-500 px-7 pt-3 pb-2.5 text-sm uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#000000] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                  Get Started <span>&rarr;</span>
                    </button>
                </a>
            </div>
        </div>
    </div>
    

    @php
        $data = [
            ['id' => 1, 'url' => '/img/NonCacaaa1440x1440.png'],
            ['id' => 2, 'url' => '/img/mid_image.jpeg'],
            ['id' => 3, 'url' => '/img/Cacaaa1440x1440.png'],
            // ['id' => 1, 'url' => '/img/winterland.ina_1709741379835.jpeg'],
            // ['id' => 2, 'url' => '/img/mid_image.jpeg'],
            // ['id' => 3, 'url' => '/img/winterland.ina_1709741365747.jpeg'],

            // Add more sample data as needed
            // 1709741379835
        ];
    @endphp

    <div id="products" class="flex flex-col items-center justify-center w-full bg-white rounded-t-3xl">
        <h2 class="py-10 text-2xl font-bold text-black font-Playfair">Discover Our Products</h2>
        <div class="flex flex-row flex-wrap items-center justify-center gap-5 pb-16">
            @foreach ($data as $item)
                <x-card-product :data="$data" :item="$item" />
            @endforeach
        </div>
        {{-- <h2 class="py-4 text-2xl font-bold text-gray-800">Discover Our Products</h2> --}}
    </div>

    <x-about-section/>
</div>
    

<style>
    #tagline{
        text-shadow: 1px 1px black;
    }
    #product-tagline{
        text-shadow: 1px 1px azure;
    }

    @media(min-width:768px){
        #tagline{
            text-shadow: 2px 1px black;
        } 
        #product-tagline{
            text-shadow: 2px 1px azure;
        }
    }
</style>