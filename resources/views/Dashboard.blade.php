<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>test</title>
    @include('Layout.Navbar')
</head>

<body>
        <div class="pt-20">
            <div class="max-h-72 sm:max-h-96 lg:max-h-[600px] relative overflow-hidden">
                <img src="/img/home.png" alt="" class="w-full">
                <div class="bg-gradient-to-t from-black to-white opacity-50 w-full h-96 lg:h-[600px] absolute top-0">
                </div>
                <div class="bg-black h-full w-full sm:w-1/2 opacity-50 p-4 sm:p-6 md:p-10 lg:p-16 absolute top-0">
                    <p class="text-white font-bold text-2xl sm:text-3xl lg:text-5xl">Adam
                        <br>Dustin <br>Bhakti
                    </p>
                    <p class="text-white font-thin italic text-sm sm:text-lg mt-2">
                        "Kerja Ikhlas, Kerja Cerdas, <br>Kerja Tuntas, Kerja Jujur."
                    </p>
                </div>
                <img src="/img/org.png" alt=""
                    class="w-64 sm:w-[440px] md:w-[630px] lg:w-[800px] absolute top-10 right-2 sm:right-10 lg:top-40 lg:right-36 xl:right-72">
                <div
                    class="invisible sm:visible absolute top-10 lg:top-40 w-full sm:w-3/4 xl:w-1/2 font-semibold text-sm lg:text-lg xl:text-2xl text-white right-0 p-4">
                    <p class="text-center lg:text-right">“Melakukan hal-hal tanpa batas serta berusaha dengan tekad konsisten dan persisten, maka tidak
                        ada mimpi yang tidak bisa kita gapai.”</p>
                </div>
            </div>
        </div>

        {{-- #1 --}}
        <div class="bg-gray-600 w-full p-4 flex flex-col sm:flex-row sm:flex-wrap justify-center lg:gap-5 text-white">
            <div class="w-full sm:w-52 my-2 sm:w-60 lg:w-72">
                <p class="font-bold text-sm sm:text-xl">Terpilih Aklamasi, Adam Dipercaya Pimpin BPC HIPMI Balikpapan</p>
                <p class="font-thin my-2 text-xs sm:text-sm sm:my-5">Ketua HIMPI Kota Balikpapan, Adam Dustin Bhakti, yang terpilih secara
                    aklamasi, menjelaskan program...</p>
                <a href="" class="bg-gray-200 text-black rounded-full p-1 text-xs sm:text-base px-5 opacity-90">Lebih
                    Lanjut</a>
            </div>
            <div class="w-full sm:w-52 my-2 sm:w-60 lg:w-72">
                <p class="font-bold text-sm sm:text-xl">Terpilih Aklamasi, Adam Dipercaya Pimpin BPC HIPMI Balikpapan</p>
                <p class="font-thin my-2 text-xs sm:text-sm sm:my-5">Ketua HIMPI Kota Balikpapan, Adam Dustin Bhakti, yang terpilih secara
                    aklamasi, menjelaskan program...</p>
                <a href="" class="bg-gray-200 text-black rounded-full p-1 text-xs sm:text-base px-5 opacity-90">Lebih
                    Lanjut</a>
            </div>
            <div class="w-full sm:w-52 my-2 sm:w-60 lg:w-72">
                <p class="font-bold text-sm sm:text-xl">Terpilih Aklamasi, Adam Dipercaya Pimpin BPC HIPMI Balikpapan</p>
                <p class="font-thin my-2 text-xs sm:text-sm sm:my-5">Ketua HIMPI Kota Balikpapan, Adam Dustin Bhakti, yang terpilih secara
                    aklamasi, menjelaskan program...</p>
                <a href="" class="bg-gray-200 text-black rounded-full p-1 text-xs sm:text-base px-5 opacity-90">Lebih
                    Lanjut</a>
            </div>
        </div>

        {{-- #2 --}}
        <div class="w-full py-5 flex flex-col lg:flex-row gap-5 justify-center">
            {{-- gambar --}}
            <img src="/img/org2.png" alt="" class="w-60 sm:w-80 xl:w-96 max-h-60 xl:max-h-none mx-auto lg:mx-0">

            <div class="flex flex-col gap-5 p-4">
                <div class="">
                    <p class="text-sm italic text-justify">MENGENAL Adam DUSTIN BHAKTI...</p>
                    <p class="text-lg sm:text-xl font-bold text-justify">Memulai Pekerjaan Baru di</p>
                    <p class="text-lg sm:text-xl font-bold text-justify">Lexa-Pearce Indonesia</p>
                    <p class="text-sm font-thin mb-4 sm:mb-6 xl:mb-10 max-w-full sm:max-w-96 text-justify">Adam Dustin Bhakti dikenal sebagai tokoh inspiratif muda Kalimantan Timur yang telah sukses membangun bisnis berkelanjutan hingga tingkat nasional dan berperan aktif dalam mendorong pertumbuhan ekonomi lokal.</p>
                </div>
                <div class="">
                    <a href="" class="bg-black px-10 text-white rounded-full p-2 text-sm">Lebih Lanjut</a>
                </div>
            </div>
        </div>


        {{-- #3 --}}
        <div class="w-full py-5 px-4 lg:px-16 xl:px-32 flex flex-col gap-4 justify-center">
            <p class="text-xl font-bold text-center lg:text-left">Terhubung dengan Adam Dustin</p>
            <div class="flex justify-center gap-4">
                <a href="" class="relative scale-100 hover:scale-105 transition ease-in-out duration-200">
                    <img src="/img/sosmed.png" class="w-32 sm:w-40 lg:w-[219px] xl:w-[313px]" alt="">
                    <p class="absolute bottom-2 left-2 font-bold text-white">Facebook</p>
                </a>
                <a href="" class="relative scale-100 hover:scale-105 transition ease-in-out duration-200">
                    <img src="/img/sosmed.png" class="w-32 sm:w-40 lg:w-[219px] xl:w-[313px]" alt="">
                    <p class="absolute bottom-2 left-2 font-bold text-white">Instagram</p>
                </a>
                <a href="" class="relative scale-100 hover:scale-105 transition ease-in-out duration-200">
                    <img src="/img/sosmed.png" class="w-32 sm:w-40 lg:w-[219px] xl:w-[313px]" alt="">
                    <p class="absolute bottom-2 left-2 font-bold text-white">Tiktok</p>
                </a>
                <a href="" class="relative scale-100 hover:scale-105 transition ease-in-out duration-200">
                    <img src="/img/sosmed.png" class="w-32 sm:w-40 lg:w-[219px] xl:w-[313px]" alt="">
                    <p class="absolute bottom-2 left-2 font-bold text-white">Twitter</p>
                </a>
            </div>
        </div>


        {{-- #4 --}}
        <div class="bg-black w-full text-white p-16 xl:px-32 my-10">
            <p class="font-thin italic">GERAKAN ADAM...</p>
            <p class="text-3xl font-semibold max-w-xl">"Sukses itu gaada rahasianya. Sukses itu kombinasi persiapan yang matang, kerja keras, dan belajar dari kegagalan"</p>
            <p class="mt-10">Dengan semangat 4As (kerja keras, kerja cerdas, kerja tuntas, kerja ikhlas) Sandi Uno </p>

            {{-- isi gerakan --}}
            <div class="mt-16 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-6">
                <div class="w-full">
                    <p class="font-semibold text-lg pb-4">Penciptaan Lapangan Kerja</p>
                    <p class="font-light">
                        Mas Sandi secara aktif mendorong terciptanya lapangan kerja di berbagai industri untuk memajukan ekonomi masyarakat Indonesia.
                    </p>
                </div>
                <div class="w-full">
                    <p class="font-semibold text-lg">Perluasan Pertumbuhan UMKM</p>
                    <p class="font-light">
                        Mas Sandi secara aktif mendorong terciptanya lapangan kerja di berbagai industri untuk memajukan ekonomi masyarakat Indonesia.
                    </p>
                </div>
                <div class="w-full">
                    <p class="font-semibold text-lg">Stabilitas Ekonomi, Harga Terjangkau</p>
                    <p class="font-light">
                        Mas Sandi secara aktif mendorong terciptanya lapangan kerja di berbagai industri untuk memajukan ekonomi masyarakat Indonesia.
                    </p>
                </div>
                <div class="w-full">
                    <p class="font-semibold text-lg">Inovasi Ekonomi Berkelanjutan</p>
                    <p class="font-light">
                        Mas Sandi secara aktif mendorong terciptanya lapangan kerja di berbagai industri untuk memajukan ekonomi masyarakat Indonesia.
                    </p>
                </div>
            </div>
        </div>


        {{-- #5 --}}
        <div class="p-16 xl:px-32 ">
            <p class="italic text-base">VIDEO ADAM...</p>
            <p class="font-semibold text-3xl">Inspirasi Dari Adam Dustin</p>
            <p class="font-base my-5 text-sm max-w-80">Temukan konten video inspiratif dari Mas Sandi yang penuh dengan
                informasi
                dikemas dengan gaya bahasa kekinian yang tetap seru untuk ditonton.</p>
            <a href="" class="bg-black px-10 text-white rounded-full p-2 text-sm opacity-90">Lihat Lebih
                Lanjut</a>

        </div>
        {{-- $6 --}}
        <div class="bg-black w-full p-16 text-white">
            <p class="italic text-center">GALERI ADAM...</p>
            <p class="font-semibold text-3xl text-center max-w-96 mx-auto mb-8">Momen Adam Dustin Dalam Kegiatan
                Sehari-hari
            </p>
            <div class="bg-white w-20 h-1 rounded-lg mx-auto"></div>
        </div>
        <div class="bg-white w-full lg:overflow-x-auto overflow-y-hidden">
            <div class="flex xl:flex-wrap">
                <img src="/img/lexa.png" alt=""
                    class="w-40 sm:w-60 lg:w-72 xl:w-96 scale-100 hover:scale-105 transition ease-in-out duration-150">
                <div class="relative">
                    <div
                        class="bg-black absolute h-full w-40 sm:w-60 lg:w-72 xl:w-96 flex flex-col justify-center gap-2">
                        <img src="/img/lexa.png" alt=""
                            class="opacity-40 w-40 sm:w-60 lg:w-72 xl:w-96 absolute z-10">
                        <p
                            class="text-center text-white text-xs sm:text-base max-w-24 sm:max-w-36 mx-auto font font-semibold z-10">
                            Dan Banyak Momen Lainnya</p>
                        <a href="/"
                            class="bg-white text-center mx-auto max-w-48 font-semibold text-black rounded-full px-4 p-1 text-xs sm:text-base z-20">Lebih
                            Lanjut</a>
                    </div>

                </div>
            </div>
        </div>
        {{-- #7 --}}
        <div class="p-16">
            <p class="italic text-base xl:px-32">BERITA ADAM...</p>
            <p class="font-semibold text-3xl xl:px-32">Ikut keseharian Adam Dustin</p>
            <p class="bg-black w-20 mt-3 h-1 rounded-lg xl:ml-32"></p>

            {{-- isi keseharian --}}
            <div class="mt-16 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 justify-center mb-10">
                <a href="" class="mt-10 relative overflow-hidden rounded-md shadow-md w-full max-w-xs mx-auto scale-100 hover:scale-105 transition ease-in-out duration-200">
                    <div>
                        <img src="/img/berita.png" alt="" class="w-full">
                        <div class="absolute bg-gradient-to-t from-gray-800 opacity-80 text-white p-2 bottom-0">
                            <p class="text-xs lg:text-base max-w-20 text-center rounded-sm px-2 p-1 text-black bg-white">
                                Inspirasi
                            </p>
                            <p class="font-bold text-sm lg:text-lg">
                                Specta ITK 2024: Adam Dustin Bhakti Berbagi Inspirasi Kewirausahaan dan Inovasi Berkelanjutan
                            </p>
                            <p class="font-thin text-xs lg:text-sm">
                                Adam Dustin Bhakti (kedua dari kanan) usai mengisi materi di Specta ITK 2024. (Foto: Istimewa)
                            </p>
                        </div>
                    </div>
                </a>

                <a href="" class="mt-10 relative overflow-hidden rounded-md shadow-md w-full max-w-xs mx-auto scale-100 hover:scale-105 transition ease-in-out duration-200">
                    <div>
                        <img src="/img/berita.png" alt="" class="w-full">
                        <div class="absolute bg-gradient-to-t from-gray-800 opacity-80 text-white p-2 bottom-0">
                            <p class="text-xs lg:text-base max-w-20 text-center rounded-sm px-2 p-1 text-black bg-white">
                                Inspirasi
                            </p>
                            <p class="font-bold text-sm lg:text-lg">
                                Specta ITK 2024: Adam Dustin Bhakti Berbagi Inspirasi Kewirausahaan dan Inovasi Berkelanjutan
                            </p>
                            <p class="font-thin text-xs lg:text-sm">
                                Adam Dustin Bhakti (kedua dari kanan) usai mengisi materi di Specta ITK 2024. (Foto: Istimewa)
                            </p>
                        </div>
                    </div>
                </a>

                <a href="" class="mt-10 relative overflow-hidden rounded-md shadow-md w-full max-w-xs mx-auto scale-100 hover:scale-105 transition ease-in-out duration-200">
                    <div>
                        <img src="/img/berita.png" alt="" class="w-full">
                        <div class="absolute bg-gradient-to-t from-gray-800 opacity-80 text-white p-2 bottom-0">
                            <p class="text-xs lg:text-base max-w-20 text-center rounded-sm px-2 p-1 text-black bg-white">
                                Inspirasi
                            </p>
                            <p class="font-bold text-sm lg:text-lg">
                                Specta ITK 2024: Adam Dustin Bhakti Berbagi Inspirasi Kewirausahaan dan Inovasi Berkelanjutan
                            </p>
                            <p class="font-thin text-xs lg:text-sm">
                                Adam Dustin Bhakti (kedua dari kanan) usai mengisi materi di Specta ITK 2024. (Foto: Istimewa)
                            </p>
                        </div>
                    </div>
                </a>

                <a href="" class="mt-10 relative overflow-hidden rounded-md shadow-md w-full max-w-xs mx-auto scale-100 hover:scale-105 transition ease-in-out duration-200">
                    <div>
                        <img src="/img/berita.png" alt="" class="w-full">
                        <div class="absolute bg-gradient-to-t from-gray-800 opacity-80 text-white p-2 bottom-0">
                            <p class="text-xs lg:text-base max-w-20 text-center rounded-sm px-2 p-1 text-black bg-white">
                                Inspirasi
                            </p>
                            <p class="font-bold text-sm lg:text-lg">
                                Specta ITK 2024: Adam Dustin Bhakti Berbagi Inspirasi Kewirausahaan dan Inovasi Berkelanjutan
                            </p>
                            <p class="font-thin text-xs lg:text-sm">
                                Adam Dustin Bhakti (kedua dari kanan) usai mengisi materi di Specta ITK 2024. (Foto: Istimewa)
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>


        {{-- #8 --}}
        <div class="w-full mb-10">
            <div class="bg-black w-full h-52">

            </div>
        </div>

        </div>

        @include('Layout.Footer')
</body>

</html>
