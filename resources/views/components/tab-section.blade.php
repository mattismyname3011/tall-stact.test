<!-- component -->
<div class="flex items-center justify-center font-sans ">
    <div x-data="{ openTab: 1 }" class="w-screen p-8">
        <div class="max-w-xl mx-auto lg:max-w-2xl ">
            <div class="flex p-2 mb-4 space-x-4 bg-white rounded-lg shadow-md">
                <button x-on:click="openTab = 1" :class="{ 'bg-pink-500 text-white': openTab === 1 }" class="flex-1 px-4 py-2 transition-all duration-300 rounded-md focus:outline-none focus:shadow-outline-blue">Ingredients</button>
                <button x-on:click="openTab = 2" :class="{ 'bg-pink-500 text-white': openTab === 2 }" class="flex-1 px-4 py-2 transition-all duration-300 rounded-md focus:outline-none focus:shadow-outline-blue">Section 2</button>
                <button x-on:click="openTab = 3" :class="{ 'bg-pink-500 text-white': openTab === 3 }" class="flex-1 px-4 py-2 transition-all duration-300 rounded-md focus:outline-none focus:shadow-outline-blue">How to use</button>
                <button x-on:click="openTab = 4" :class="{ 'bg-pink-500 text-white': openTab === 4 }" class="flex-1 px-4 py-2 transition-all duration-300 rounded-md focus:outline-none focus:shadow-outline-blue">Benefit</button>
            </div>

            <div x-show="openTab === 1" class="p-4 transition-all duration-300 bg-white border-l-4 border-pink-500 rounded-lg shadow-md">
                <h2 class="mb-2 text-2xl font-semibold text-pink-500">Ingredients</h2>
                <p class="text-gray-700">Enriched with 6x Diamond Extract (Amethyst Extract, Diamond Powder, Pearl Extract, Ruby Extract, Sapphire Powder, Tourmaline), Chromabright, Niacinamide, Arbutin, Glutathione, Allantoin, Panthenol, Tranexamic Acid, Collagen, Aloevera Extract, Vitamin C, Vitamin E, Vitis Vinivera Seed Extract, Centella Asiatica Extract, Polygonum Cuspidatum Root Extract, Scutellaria Baicalensis Root Extract, Greentea Extract, Chamomile Extract, Rosemary Extract.
                </p>
            </div>

            <div x-show="openTab === 2" class="p-4 transition-all duration-300 bg-white border-l-4 border-pink-500 rounded-lg shadow-md">
                <h2 class="mb-2 text-2xl font-semibold text-pink-500">Section 2 Content</h2>
                <p class="text-gray-700">Proin non velit ac purus malesuada venenatis sit amet eget lacus. Morbi quis purus id ipsum ultrices aliquet Morbi quis.</p>
            </div>

            <div x-show="openTab === 3" class="p-4 transition-all duration-300 bg-white border-l-4 border-pink-500 rounded-lg shadow-md">
                <h2 class="mb-2 text-2xl font-semibold text-pink-500">Cara Penggunaan</h2>
                <p class="font-semibold text-gray-600 text-md font-Urbanist">• Aplikasikan body serum tunggu hingga menyerap.</p>
                <p class="font-semibold text-gray-600 text-md font-Urbanist">• Aplikasikan body lotion setelahnya.</p>
                <p class="font-semibold text-gray-600 text-md font-Urbanist">• Gunakan secara merata ke seluruh tubuh kecuali muka sebanyak 3x sehari</p>
            </div>

            <div x-show="openTab === 4" class="p-4 transition-all duration-300 bg-white border-l-4 border-pink-500 rounded-lg shadow-md">
                <h2 class="mb-2 text-2xl font-semibold text-pink-500">Manfaat</h2>
                {{-- <p class="font-semibold text-gray-700 text-md font-Urbanist"> --}}
                <p  class="font-semibold text-gray-700 text-md font-Urbanist">• Untuk mencerahkan kulit dengan maksimal</p>
                <p  class="font-semibold text-gray-700 text-md font-Urbanist">• ⁠Untuk menyamarkan bekas noda hitam</p>
                <p  class="font-semibold text-gray-700 text-md font-Urbanist">• ⁠Untuk menjaga kelembapan kulit serta merawat kulit sensitif</p>
                <p  class="font-semibold text-gray-700 text-md font-Urbanist">• ⁠Untuk menutrisi kulit agar tetap sehat, kenyal dan glowing</p>
                <p  class="font-semibold text-gray-700 text-md font-Urbanist">• ⁠Untuk melindungi kulit dari efek sinar matahari</p>
                {{-- </p> --}}
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>