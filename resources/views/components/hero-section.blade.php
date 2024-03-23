<div id="hero" class="flex flex-col">
    <div class="flex w-full">
        <div class="static flex-col w-2/3 sm:w-1/2 rounded-2xl pl-0 md:pl-[58px] lg:pl-[72px] h-[580px] sm:h-[480px] justify-center flex">
            <h1 class="px-5 text-xl font-semibold text-black rounded-lg font-Playfair sm:text-2xl md:text-3xl lg:text-5xl md:bg-transparent md:shadow-none ">
                <span id="tagline">Unleash Your Skin's Potential <br class="hidden md:flex">with</span> 
                <span id="product-tagline" class="text-black ">WintérLand</span>
            </h1>
            <div class="px-5 pt-4">
                <p class="rounded-lg md:bg-transparent md:px-0">
                    <span id="product-tagline" class="text-gray-700 font-Urbanist">Wintérland - Double Intensive Body Serum for bright, radiant skin, lightens your skin tone in 7 days. Equipped with 6x Diamond Extract to nourish the skin, Chromabright, Niacinamide, Tranexamic Acid to brighten your skin, Allantoin & Panthenol to lock in skin moisture, and other antioxidant for healthier skin.
                    </span>
                </p>
            </div>
            <div class="flex w-full px-5 mt-4">
                <a href="#contacts">
                    <button data-te-ripple-init data-te-ripple-color="light" type="button"
                {{-- #3b71ca --}}
                  class="font-semibold inline-block rounded-full bg-pink-500 px-7 pt-3 pb-2.5 text-sm uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#000000] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                  Order Now
                    </button>
                </a>
            </div>
        </div>
    </div>
    
    @php
        $data = [
            // ['id' => 1, 'url' => '/img/NonCacaaa1440x1440.png'],
            // ['id' => 2, 'url' => '/img/mid_image.jpeg'],
            ['id' => 3, 'url' => '/img/Cacaaa1440x1440p.png'],
        ];
    @endphp

    <div id="products" class="flex flex-col items-center justify-center w-full bg-gray-50 rounded-t-3xl">
        <h2 class="py-10 text-2xl font-bold text-black font-Playfair">Discover Our Products</h2>
        <div class="flex flex-row flex-wrap items-center justify-center pb-4">
            @foreach ($data as $item)
                <x-card-product :data="$data" :item="$item" />
            @endforeach
        </div>
        {{-- <h2 class="py-4 text-2xl font-bold text-gray-800">Discover Our Products</h2> --}}
    </div>

    <x-about-section/>
</div>