<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WinterLand</title>
    {{-- @vite('resources/css/app.css', ) --}}
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

{{-- <body class="bg-gradient-to-r from-[#b3d8ff] to-[#9089fc]"> --}}
<body class="static h-[100vh] w-full bg-none md:bg-[url(https://wallpaperaccess.com/full/2317540.jpg)] bg-cover bg-center bg-static bg-no-repeat">
{{-- <body> --}}
    <x-offerBanner />
    <x-navbar />
    <main class="">
        <section >
            <x-hero-section/>
        </section>
    </main>
    <x-about-section/>
    <x-footer/>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>