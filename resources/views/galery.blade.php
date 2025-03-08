<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>News</title>
    <style>
        /* Class for shifting images */
        .img-shift-right {
            transform: translateX(20px);
        }

        /* Class for shifting text */
        .text-shift-left {
            margin-left: 20px;
        }

        /* Optional: Adjust padding for mobile view */
        .padding-mobile {
            padding-left: 20px;
        }
    </style>
</head>

<body>
    @include('Layout.Navbar')

    <div class="w-full">
        {{-- #1 --}}
        <div class="bg-gradient-to-t from-black to-gray-400 h-[400px] xl:h-[600px] relative">
            <div class="bg-gradient-to-b from-black text-white h-full w-188 sm:w-1/2 left-16 absolute top-0 text-shift-left">
                <p class="ml-1 mt-56 xl:mt-72 font-bold text-4xl xl:text-4xl">Galery</p>
                <p class="ml-1 font-thin mt-2">ADAM DUSTIN BHAKTI</p>
            </div>
            <img src="/img/org3.png" alt="" class="w-[400px] sm:w-[430px] lg:w-[450px] xl:w-[650px] absolute bottom-0 -right-10 md:right-20 lg:right-36 xl:right-72 img-shift-right">
        </div>

        <div class="p-16 xl:px-32 padding-mobile">
            <div class="flex">
                <input type="text" name="" id="" placeholder="Cari Berita..."
                    class="text-white w-full p-3 placeholder:text-white placeholder:italic rounded-l-full bg-gradient-to-r from-black to-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12 p-2 rounded-r-full my-auto bg-gray-400">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
            </div>
        </div>

        {{-- Gallery Section --}}
<div class="px-16 xl:px-32 mb-10">
    <p class="italic text-base">Galery ADAM...</p>
    <p class="font-semibold text-3xl">Ikut keseharian Adam Dustin</p>
    <p class="bg-black w-20 mt-3 h-1 rounded-lg"></p>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 mt-10">
        <!-- Gallery Image 1 -->
        <div class="relative group overflow-hidden rounded-md shadow-md aspect-[1/1] cursor-pointer" onclick="openImage('/img/galery1.jpeg')">
            <img src="/img/galery1.jpeg" alt="" class="object-cover w-full h-full transform transition-transform duration-300 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-black opacity-50"></div>
        </div>

        <!-- Gallery Image 2 -->
        <div class="relative group overflow-hidden rounded-md shadow-md aspect-[1/1] cursor-pointer" onclick="openImage('/img/galery2.jpeg')">
            <img src="/img/galery2.jpeg" alt="" class="object-cover w-full h-full transform transition-transform duration-300 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-black opacity-50"></div>
        </div>

        <!-- Gallery Image 3 -->
        <div class="relative group overflow-hidden rounded-md shadow-md aspect-[1/1] cursor-pointer" onclick="openImage('/img/galery3.jpg')">
            <img src="/img/galery3.jpg" alt="" class="object-cover w-full h-full transform transition-transform duration-300 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-black opacity-50"></div>
        </div>
    </div>
</div>

{{-- Fullscreen Image Popup --}}
<div id="imagePopup" class="fixed inset-0 bg-black bg-opacity-70 flex justify-center items-center hidden z-50" onclick="closeImage()">
    <img id="popupImage" class="max-w-[90%] max-h-[90%] object-contain cursor-pointer transform scale-110" />
</div>

<script>
    // Function to open the image popup
    function openImage(imageSrc) {
        const popup = document.getElementById('imagePopup');
        const popupImage = document.getElementById('popupImage');

        popupImage.src = imageSrc; // Set the source of the popup image
        popup.classList.remove('hidden'); // Show the popup
    }

    // Function to close the image popup
    function closeImage() {
        const popup = document.getElementById('imagePopup');
        popup.classList.add('hidden'); // Hide the popup
    }
</script>




        {{-- #9 --}}
        <div class="w-full mb-10 p-16 xl:px-32">
            <div class="bg-black w-full h-52">
            </div>
        </div>
    </div>

    @include('Layout.Footer')

    <!-- Flowbite JS -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@1.4.3/dist/flowbite.min.js"></script>
</body>

</html>
