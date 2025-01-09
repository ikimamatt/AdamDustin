<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Profil</title>
</head>

<body>
    @include('Layout.Navbar')

    <div class=" w-full">
        {{-- #1 --}}
        <div class="bg-gradient-to-t from-black to-gray-400 h-[400px] xl:h-[600px] relative">
            <div class="bg-gradient-to-b from-black text-white h-full w-72 sm:w-1/2 left-16 absolute top-0">
                <p class="ml-10 mt-56 xl:mt-72 font-bold text-4xl xl:text-5xl">Kegiatan</p>
                <p class="ml-10 font-thin mt-2">ADAM DUSTIN BAKHRI</p>
            </div>
            <img src="/img/org3.png" alt=""
                class="w-[440px] sm:w-[470px] lg:w-[500px] xl:w-[700px] absolute bottom-0 -right-10 md:right-20 lg:right-36 xl:right-72">
        </div>
        {{-- #2 --}}
        <div class="p-16 xl:px-32">
            <div class="flex">
                <input type="text" name="" id="" placeholder="Cari Berita..."
                    class=" text-white w-full p-3 placeholder:text-white placeholder:italic rounded-l-full bg-gradient-to-r from-black to-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12 p-2 rounded-r-full my-auto bg-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                      </svg>
            </div>
        </div>
        {{-- #3 --}}
        <div class="">
            <p class="italic text-base px-16 xl:px-32">BERITA ADAM...</p>
            <p class="font-semibold text-3xl px-16 xl:px-32">Ikut keseharian Adam Dustin</p>
            <p class="bg-black w-20 mt-3 h-1 rounded-lg ml-16 xl:ml-32"></p>
            <div class="flex flex-wrap j gap-x-10 justify-center mb-10">
                <a href=""
                    class="mt-10 relative overflow-hidden rounded-md shadow-md w-80 lg:w-96 xl:w-[550px] scale-100 hover:scale-105 transition ease-in-out duration-200">
                    <div>
                        <img src="/img/berita.png" alt="" class="w-80 lg:w-96 xl:w-[550px]">
                        <div class="absolute bg-gradient-to-t from-gray-800 opacity-80 text-white p-2 bottom-0">
                            <p
                                class="text-xs lg:text-base max-w-20 text-center rounded-sm px-2 p-1 text-black bg-white ">
                                Inspirasi</p>
                            <p class="font-bold text-sm lg:text-lg">Specta ITK 2024: Adam Dustin Bhakti Berbagi
                                Inspirasi Kewirausahaan dan Inovasi Berkelanjutan</p>
                            <p class="font-thin text-xs lg:text-sm ">Adam Dustin Bhakti (kedua dari kanan) usai mengisi
                                materi di Specta ITK 2024. (Foto: Istimewa)</p>
                        </div>
                    </div>
                </a>
                <a href=""
                    class="mt-10 relative overflow-hidden rounded-md shadow-md w-80 lg:w-96 xl:w-[550px] scale-100 hover:scale-105 transition ease-in-out duration-200">
                    <div>
                        <img src="/img/berita.png" alt="" class="w-80 lg:w-96 xl:w-[550px]">
                        <div class="absolute bg-gradient-to-t from-gray-800 opacity-80 text-white p-2 bottom-0">
                            <p
                                class="text-xs lg:text-base max-w-20 text-center rounded-sm px-2 p-1 text-black bg-white ">
                                Inspirasi</p>
                            <p class="font-bold text-sm lg:text-lg">Specta ITK 2024: Adam Dustin Bhakti Berbagi
                                Inspirasi Kewirausahaan dan Inovasi Berkelanjutan</p>
                            <p class="font-thin text-xs lg:text-sm ">Adam Dustin Bhakti (kedua dari kanan) usai mengisi
                                materi di Specta ITK 2024. (Foto: Istimewa)</p>
                        </div>
                    </div>
                </a>
                <a href=""
                    class="mt-10 relative overflow-hidden rounded-md shadow-md w-80 lg:w-96 xl:w-[550px] scale-100 hover:scale-105 transition ease-in-out duration-200">
                    <div>
                        <img src="/img/berita.png" alt="" class="w-80 lg:w-96 xl:w-[550px]">
                        <div class="absolute bg-gradient-to-t from-gray-800 opacity-80 text-white p-2 bottom-0">
                            <p
                                class="text-xs lg:text-base max-w-20 text-center rounded-sm px-2 p-1 text-black bg-white ">
                                Inspirasi</p>
                            <p class="font-bold text-sm lg:text-lg">Specta ITK 2024: Adam Dustin Bhakti Berbagi
                                Inspirasi Kewirausahaan dan Inovasi Berkelanjutan</p>
                            <p class="font-thin text-xs lg:text-sm ">Adam Dustin Bhakti (kedua dari kanan) usai mengisi
                                materi di Specta ITK 2024. (Foto: Istimewa)</p>
                        </div>
                    </div>
                </a>
                <a href=""
                    class="mt-10 relative overflow-hidden rounded-md shadow-md w-80 lg:w-96 xl:w-[550px] scale-100 hover:scale-105 transition ease-in-out duration-200">
                    <div>
                        <img src="/img/berita.png" alt="" class="w-80 lg:w-96 xl:w-[550px]">
                        <div class="absolute bg-gradient-to-t from-gray-800 opacity-80 text-white p-2 bottom-0">
                            <p
                                class="text-xs lg:text-base max-w-20 text-center rounded-sm px-2 p-1 text-black bg-white ">
                                Inspirasi</p>
                            <p class="font-bold text-sm lg:text-lg">Specta ITK 2024: Adam Dustin Bhakti Berbagi
                                Inspirasi Kewirausahaan dan Inovasi Berkelanjutan</p>
                            <p class="font-thin text-xs lg:text-sm ">Adam Dustin Bhakti (kedua dari kanan) usai mengisi
                                materi di Specta ITK 2024. (Foto: Istimewa)</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        {{-- #9 --}}
        <div class="w-full mb-10 p-16 xl:px-32">
            <div class="bg-black w-full h-52">

            </div>
        </div>
    </div>
    @include('Layout.Footer')
</body>

</html>
