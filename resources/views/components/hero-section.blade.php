<div  class="flex flex-col">
    <div class="flex w-full">
        <div class="static w-2/3 sm:w-1/2 rounded-2xl h-[60vh] justify-center items-center flex">
            <h1 class="hidden px-5 text-xl text-white rounded-lg sm:text-2xl md:text-3xl lg:text-5xl md:bg-transparent md:shadow-none md:px-0">
                <span id="tagline">Unleash Your Skin's Potential <br class="hidden md:flex">with</span> 
                <span id="product-tagline" class="font-semibold text-black ">WintérLand</span>
            </h1>
            <h1 class="px-5 text-xl text-white rounded-lg sm:text-2xl md:text-3xl lg:text-5xl md:bg-transparent md:shadow-none md:px-0 ">
                <span id="tagline">Unleash Your Skin's Potential <br class="hidden md:flex">with</span> 
                <span id="product-tagline" class="font-semibold text-black ">WintérLand</span>
            </h1>
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