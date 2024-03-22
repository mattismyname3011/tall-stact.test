<!-- component -->
<div class="flex flex-col items-center justify-center mt-2 font-sans ">
    <h2 class="text-3xl font-semibold font-Playfair"> WintérLand</h2>
    <h2 class="text-xl font-semibold text-center font-Playfair">Double Intensive Body Serum</h2>
    <div x-data="{ openTab: 1 }" class="w-screen rounded-md md:w-[600px] lg:ml-0 lg:min-w-[600px] md:min-w-[600px] px-8 pb-8 pt-2">
        <div class="max-w-xl mx-auto min-w-xl lg:max-w-2xl">
            <div class="flex p-2 mb-4 space-x-2 overflow-x-auto overflow-y-hidden bg-white rounded-lg shadow-lg">
                <button x-on:click="openTab = 1" :class="{ 'bg-pink-500 text-white': openTab === 1 }" class="flex-1 px-4 py-2 transition-all duration-300 rounded-md text-nowrap focus:outline-none focus:shadow-outline-blue">Ingredients</button>
                <button x-on:click="openTab = 2" :class="{ 'bg-pink-500 text-white': openTab === 2 }" class="flex-1 px-4 py-2 transition-all duration-300 rounded-md text-nowrap focus:outline-none focus:shadow-outline-blue">Verified</button>
                <button x-on:click="openTab = 3" :class="{ 'bg-pink-500 text-white': openTab === 3 }" class="flex-1 px-4 py-2 transition-all duration-300 rounded-md text-nowrap focus:outline-none focus:shadow-outline-blue">How to use</button>
                <button x-on:click="openTab = 4" :class="{ 'bg-pink-500 text-white': openTab === 4 }" class="flex-1 px-4 py-2 transition-all duration-300 rounded-md text-nowrap focus:outline-none focus:shadow-outline-blue">Benefit</button>
            </div>

            <div x-show="openTab === 1" class="p-4 transition-all duration-300 bg-white border-l-4 border-pink-500 rounded-lg shadow-lg">
                <h3 class="mb-2 text-2xl font-semibold text-pink-500">Ingredients</h3>
                <p class="font-semibold text-justify text-gray-700 font-Urbanist">Enriched with 6x Diamond Extract (Amethyst Extract, Diamond Powder, Pearl Extract, Ruby Extract, Sapphire Powder, Tourmaline), Chromabright, Niacinamide, Arbutin, Glutathione, Allantoin, Panthenol, Tranexamic Acid, Collagen, Aloevera Extract, Vitamin C, Vitamin E, Vitis Vinivera Seed Extract, Centella Asiatica Extract, Polygonum Cuspidatum Root Extract, Scutellaria Baicalensis Root Extract, Greentea Extract, Chamomile Extract, Rosemary Extract.
                </p>
            </div>

            <div x-show="openTab === 2" class="p-4 transition-all duration-300 bg-white border-l-4 border-pink-500 rounded-lg shadow-md ">
                <h3 class="mb-2 text-2xl font-semibold text-pink-500">Verified Product</h3>
                <p class="font-semibold text-justify text-gray-700 font-Urbanist">Dapatkan produk kecantikan yang aman dan terpercaya dengan nomor BPOM NKIT230002308. Produk ini telah teruji dan terbukti aman untuk digunakan, sehingga Anda dapat tampil cantik tanpa rasa khawatir.</p>
            </div>

            <div x-show="openTab === 3" class="p-4 transition-all duration-300 bg-white border-l-4 border-pink-500 rounded-lg shadow-md ">
                <h3 class="mb-2 text-2xl font-semibold text-pink-500">Cara Penggunaan</h3>
                <ul>
                    <li class="font-semibold text-gray-600 text-md font-Urbanist">• Aplikasikan body serum tunggu hingga menyerap.</li>
                    <li class="font-semibold text-gray-600 text-md font-Urbanist">• Aplikasikan body lotion setelahnya.</li>
                    <li class="font-semibold text-gray-600 text-md font-Urbanist">• Gunakan merata ke seluruh tubuh kecuali muka sebanyak 3x sehari</li>
                </ul>
            </div>

            <div x-show="openTab === 4" class="p-4 transition-all duration-300 bg-white border-l-4 border-pink-500 rounded-lg shadow-md ">
                <h3 class="mb-2 text-2xl font-semibold text-pink-500">Manfaat</h3>
                <ul>
                    <li  class="font-semibold text-gray-700 text-md font-Urbanist">• Untuk mencerahkan kulit dengan maksimal</li>
                    <li  class="font-semibold text-gray-700 text-md font-Urbanist">• ⁠Untuk menyamarkan bekas noda hitam</li>
                    <li  class="font-semibold text-gray-700 text-md font-Urbanist">• ⁠Untuk menjaga kelembapan kulit serta merawat kulit sensitif</li>
                    <li  class="font-semibold text-gray-700 text-md font-Urbanist">• ⁠Untuk menutrisi kulit agar tetap sehat, kenyal dan glowing</li>
                    <li  class="font-semibold text-gray-700 text-md font-Urbanist">• ⁠Untuk melindungi kulit dari efek sinar matahari</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>