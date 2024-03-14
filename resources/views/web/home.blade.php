<!DOCTYPE html>
<html  class="scroll-smooth" lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">    
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WinterLand</title>
    {{-- @vite('resources/css/app.css', ) --}}
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<style>
    *{
        scroll-behavior: smooth;
    }
</style>

{{-- <body class="bg-gradient-to-r from-[#b3d8ff] to-[#9089fc]"> --}}
{{-- <body class="static h-[100vh] w-full bg-[url(https://wallpaperaccess.com/full/2317540.jpg)] bg-cover bg-center bg-static bg-no-repeat"> --}}
{{-- <body> --}}
<body class="h-[100vh] w-full bg-[url(https://wallpaperaccess.com/full/2317540.jpg)] bg-cover bg-center bg-fixed bg-no-repeat">
    <div class="">
        <div class="flex h-screen overflow-hidden bg-center bg-no-repeat bg-cover bg-static">
            <!-- Sidebar -->
            {{-- <div class="absolute w-2/3 min-h-screen overflow-y-auto text-white transition-transform transform -translate-x-full bg-gray-800 " --}}
            <div class="absolute w-2/3 min-h-screen overflow-y-auto text-white transform -translate-x-full bg-gray-800 "
                id="sidebar">
                <!-- Your Sidebar Content -->
                <div class="p-4">
                    <h1 class="text-2xl font-semibold">WinterLand</h1>
                    <ul class="mt-4">
                        <li class="mb-2"><a href="#" class="block hover:text-indigo-400">Home</a></li> 
                        <li class="mb-2"><a href="#products" class="block hover:text-indigo-400">Products</a></li>
                        <li class="mb-2"><a href="#aboutus" class="block hover:text-indigo-400">About Us</a></li>
                        <li class="mb-2"><a href="#contacts" class="block hover:text-indigo-400">Contact</a></li>
                    </ul>
                </div>
            </div>

            <!-- Content -->
            <div class="flex flex-col flex-1 overflow-hidden">
                <x-offerBanner/>
                <!-- Navbar -->
                <div class="z-10 bg-white border-t-2 border-pink-300 shadow-md">
                    <div class="container mx-auto">
                        <div class="flex items-center justify-between px-2 py-4 text-black ">
                            <h1 class="flex items-center justify-center w-1/6 mx-6 font-semibold sm:mx-0 font-Playfair">WintérLand</h1>
                            <div class="hidden w-5/6 md:flex justify-evenly">
                                <a href="" class="font-semibold">Home</a>
                                <a href="#products" class="font-semibold ">Products</a>
                                <a href="#aboutus" class="font-semibold ">About Us</a>
                                <a href="#contacts" class="font-semibold ">Contacts</a>
                            </div>

                            <button onclick="myFunction()" class="text-black md:hidden hover:text-gray-600" id="open-sidebar">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                        </div>
                    </div>
                </div>
                <!-- Content Body -->
                <div class="flex-1 p-0 overflow-auto">
                    {{-- <h1 class="mx-4 text-2xl font-semibold">Welcome to our website</h1>
                    <p class="mx-4">... Content goes here ...</p> --}}
                    
                    <x-hero-section/>
                    <x-testimonial-section/>
                    <x-social-section/>
                    <x-footer/>
                </div>
            </div>
        </div>
    
        <script>
            const sidebar = document.getElementById('sidebar');
            const openSidebarButton = document.getElementById('open-sidebar');
            
            openSidebarButton.addEventListener('click', (e) => {
                e.stopPropagation();
                sidebar.classList.toggle('-translate-x-full');
            });
        
            // Close the sidebar when clicking outside of it
            document.addEventListener('click', (e) => {
                if (!sidebar.contains(e.target) && !openSidebarButton.contains(e.target)) {
                    sidebar.classList.add('-translate-x-full');
                }
            });
            

            function myFunction(){
                const element = document.getElementById("offerBanner");
                // element.classList.toggle("relative");
                element.classList.toggle("relative");
                element.classList.toggle("isolate")
                // element.classList.add("bg-red-500");
            } 

            // const removeBanner = document.getElementById('offerBanner');
            // const removeBannerButton = document.getElementById('open-sidebar');

            // removeBannerButton.addEventListener('click', (e) => {
            //     e.stopPropagation();
            //     removeBanner.classList.toggle('relative isolation');
            // });

            // document.addEventListener('click', (e) => {
            //     if(!removeBanner.contains(e.target) && !removeBannerButton.contains(e.target)){
            //         removeBanner.classList.add('relative isolation');
            //     }
            // })
        </script>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>