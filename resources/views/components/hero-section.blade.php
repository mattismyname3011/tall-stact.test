<div class="flex flex-col">
    <div class="flex w-full ">
        <div class="w-full md:w-1/2 h-[30vh] md:rounded-none rounded-2xl md:bg-transparent bg-pink-100 md:h-[60vh] justify-center items-center flex">
            <h1 class="text-3xl lg:text-5xl bg-pink-400 md:bg-transparent rounded-lg md:shadow-none shadow-2xl text-gray-200 px-5 md:px-0 ">
                {{-- <span id='tagline'>Glow Up:</span><br>  --}}
                <span id="tagline">Unleash Your Skin's Potential <br class="hidden md:flex">with</span> 
                <span id="product-tagline" class="font-semibold text-black ">WintérLand</span>
            </h1>
        </div>
    </div>

    @php
        $data = [
            // ['id' => 1, 'url' => '/img/winterland.ina_1709741365747.jpeg'],
            ['id' => 1, 'url' => '/img/winterland.ina_1709741379835.jpeg'],
            ['id' => 2, 'url' => '/img/mid_image.jpeg'],
            ['id' => 3, 'url' => '/img/winterland.ina_1709741365747.jpeg'],
            // Add more sample data as needed
            // 1709741379835
        ];
    @endphp

    <div class="w-full flex flex-col justify-center items-center bg-gradient-to-b from-white  to-pink-200 rounded-t-3xl">
        <h2 class="text-2xl font-bold text-gray-800 py-10">Discover Our Products</h2>
        <div class="flex flex-row gap-5">
            @foreach ($data as $item)
                <x-card-product :data="$data" :item="$item" />
            @endforeach
        </div>
        {{-- <h2 class="text-2xl font-bold text-gray-800 py-4">Discover Our Products</h2> --}}
    </div>
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