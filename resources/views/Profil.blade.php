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

    <div class="w-full max-w-screen-xl mx-auto overflow-x-hidden">
        {{-- #1 --}}
         <div class="bg-gradient-to-t from-black to-gray-400 h-[400px] xl:h-[600px] relative">
            <div class="bg-gradient-to-b from-black text-white h-full w-188 sm:w-1/2 left-16 absolute top-0 text-shift-left">
                <p class="ml-1 mt-56 xl:mt-72 font-bold text-4xl xl:text-4xl">Profil</p>
                <p class="ml-1 font-thin mt-2">ADAM DUSTIN BHAKTI</p>
            </div>
            <img src="/img/org3.png" alt="" class="w-[400px] sm:w-[430px] lg:w-[450px] xl:w-[650px] absolute bottom-0 -right-10 md:right-20 lg:right-36 xl:right-72 img-shift-right">
        </div>
        {{-- #2 --}}
        {{-- <div class="p-10 sm:p-16 xl:px-32 justify-center">
            <p>Adam Dustin Bhakti adalah pengusaha muda inspiratif dari Kalimantan Timur yang memimpin bisnis berkelanjutan hingga level nasional. Dengan semangat kolaborasi dan networking, ia aktif mendorong pertumbuhan ekonomi lokal melalui organisasi seperti HIPMI, menginspirasi generasi muda untuk bermimpi besar menuju Indonesia Emas 2045.</p>
        </div> --}}

         {{-- #3 --}}
        <div class="w-full px-4 sm:px-16 xl:px-32 flex flex-col gap-5 "  ">
            <div class="text-center" style="padding-top: 24px;>
                <p class="text-sm italic">MENGENAL ADAM DUSTIN BHAKTI...</p>
                <p class="text-2xl font-bold">Saya Adam Dustin Bhakti,</p>
                <p class="text-2xl font-bold">Perintis Harapan dari kalimantan Timur</p>
                <p class="bg-black w-20 my-3 h-1 rounded-lg mx-auto xl:ml-32"></p>
            </div>
            <div class="flex flex-col md:flex-row gap-6 items-center md:items-start">
                <img src="/img/profil1.png" alt="Profil Adam Dustin Bhakti" class="w-full max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg object-contain md:w-1/2">
                <div class="flex flex-col gap-4 w-full md:w-1/2">
                    <p class="text-sm font-thin mt-4">Saya lahir dan besar di Balikpapan, kota yang membentuk karakter, mimpi, dan semangat perjuangan saya. Dari kota ini, saya belajar bahwa menjadi besar tidak harus menunggu datangnya kesempatan, tapi menciptakan sendiri jalan menuju masa depan.</p>
                    <p class="text-sm font-thin mt-1">Saya memulai perjalanan sebagai pengusaha lokal, dan perlahan membuktikan bahwa karya dari daerah pun bisa bersaing di tingkat nasional. Sebagai CEO Lexa Event, saya tidak hanya membangun perusahaan, tapi membangun ekosistem. Bersama tim, kami menjadikan Lexa sebagai ruang kolaborasi lintas sektor, dari event kreatif, pengembangan talenta muda, hingga pemberdayaan UMKM yang menjadi tulang punggung ekonomi bangsa.</p>
                    <p class="text-sm font-thin mt-1">Saya percaya bahwa tidak ada yang tidak mungkin, selama kita memiliki mindset yang benar, konsistensi dalam melangkah, dan keberanian untuk bekerja keras tanpa henti. Prinsip ini pula yang saya bawa saat dipercaya menjadi Ketua HIPMI dan Ketua ESI Balikpapan, dua ruang yang saya gunakan untuk membina kewirausahaan dan memajukan ekonomi kreatif.</p>
                    <p class="text-sm font-thin mt-1">Saya tidak mengejar sorotan. Saya memilih menjadi perintis, membuka jalan, membangun ekosistem, dan menjadi jembatan antara mimpi masyarakat dan masa depan yang lebih baik.
                    </p>
                    <p class="text-sm font-thin mt-1">“Saya hanya ingin menjadi seseorang yang bisa diandalkan — yang menjadikan harapan sebagai kenyataan, lewat kerja nyata.”
                    </p>
                    <p class="text-sm font-thin mt-1">Karena saya percaya: mimpi adalah tanggung jawab, dan harapan adalah janji yang harus ditepati.Inilah alasan saya terus melangkah, selama masih ada usaha kecil yang butuh dukungan, generasi muda yang butuh ruang, dan masyarakat yang pantas mendapatkan masa depan yang lebih baik..
                    </p>
                </div>
            </div>
            {{-- <div class="text-center mt-4">
                <a href="" class="bg-black px-10 text-white rounded-full p-2 text-sm">Lebih Lanjut</a>
            </div> --}}
        </div>

        <div style="width: 100%; padding: 1.25rem 1rem; display: flex; flex-direction: column; gap: 1rem; justify-content: center;">
            <p style="font-size: 1.25rem; font-weight: bold; text-align: center;">Terhubung dengan Adam Dustin</p>
            <div style="display: flex; justify-content: center; gap: 1rem;">
                <a href="{{ $socialMedia->facebook }}" target="_blank" style="display: flex; flex-direction: column; align-items: center; transition: transform 0.2s ease-in-out;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                    <img src="/img/facebook.png" style="width: 64px;" alt="">
                    <p style="font-weight: bold; color: black; margin-top: 0.5rem;">Facebook</p>
                </a>
                <a href="{{ $socialMedia->instagram }}" target="_blank" style="display: flex; flex-direction: column; align-items: center; transition: transform 0.2s ease-in-out;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                    <img src="/img/instagram.png" style="width: 64px;" alt="">
                    <p style="font-weight: bold; color: black; margin-top: 0.5rem;">Instagram</p>
                </a>
                <a href="{{ $socialMedia->tiktok }}" target="_blank" style="display: flex; flex-direction: column; align-items: center; transition: transform 0.2s ease-in-out;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                    <img src="/img/tiktok.png" style="width: 64px;" alt="">
                    <p style="font-weight: bold; color: black; margin-top: 0.5rem;">Tiktok</p>
                </a>
                <!-- <a href="{{ $socialMedia->twitter }}" target="_blank" class="relative scale-100 hover:scale-105 transition ease-in-out duration-200">
                    <img src="/img/sosmed.png" class="w-32 sm:w-40 lg:w-[219px] xl:w-[313px]" alt="">
                    <p class="absolute bottom-2 left-2 font-bold text-white">Twitter</p>
                </a> -->
            </div>


        {{-- #6 --}}
        {{-- <div class="bg-black w-full text-white p-16 xl:px-32 my-10">
            <p class="font-thin italic">GERAKAN ADAM...</p>
            <p class="text-3xl font-semibold max-w-xl">"Tetaplah lapar, tetaplah bodoh. Pengusaha sejati tak pernah puas, selalu belajar, dan bermimpi setinggi langit."</p>
            <p class="mt-10">Dengan semangat "Stay Hungry, Stay Foolish" - Adam Dustin Bhakti</p>

            <div class="mt-5 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-6">
                <div class="w-full">
                    <p class="font-semibold text-lg pb-4">Membangun Super Team</p>
                    <p class="font-light">
                        Adam mendorong kolaborasi untuk membentuk tim kuat yang mampu melampaui pencapaian individu, menuju pertumbuhan eksponensial.
                    </p>
                </div>
                <div class="w-full">
                    <p class="font-semibold text-lg pb-4">Investasi Leher ke Atas</p>
                    <p class="font-light">
                        Ia mengutamakan investasi pada pengetahuan melalui seminar, workshop, dan pelatihan untuk mempercepat kesuksesan.
                    </p>
                </div>
                <div class="w-full">
                    <p class="font-semibold text-lg pb-4">Networking melalui Organisasi</p>
                    <p class="font-light">
                        Bergabung dengan komunitas seperti HIPMI adalah kunci untuk membangun jaringan yang mendukung pertumbuhan bisnis.
                    </p>
                </div>
                <div class="w-full">
                    <p class="font-semibold text-lg pb-4">Bisnis untuk Kebaikan</p>
                    <p class="font-light">
                        Adam mengajak pengusaha mengubah visi menjadi bermanfaat bagi banyak orang, bukan hanya mencari keuntungan pribadi.
                    </p>
                </div>
            </div>
        </div> --}}

        {{-- <div class="bg-black w-full text-white p-16 xl:px-32 my-10">
            <div class="p-16">
                <p class="italic text-base xl:px-32">BERITA ADAM...</p>
                <p class="font-semibold text-3xl xl:px-32">Ikut keseharian Adam Dustin</p>
                <p class="bg-black w-20 mt-3 h-1 rounded-lg xl:ml-32"></p>

                <div class="mt-16 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 justify-center mb-10">

                    @foreach ($allnews->take(6) as $news)
                        <a href="{{ $news->link }}" class="mt-10 relative overflow-hidden rounded-md shadow-md w-full max-w-xs mx-auto scale-100 hover:scale-105 transition ease-in-out duration-200">
                            <div class="relative">
                                <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" class="w-full h-60 object-cover">
                                <!-- Layer abu-abu dengan opacity -->
                                <div class="absolute inset-0 bg-gray-800 opacity-50"></div>
                                <div class="absolute bg-gradient-to-t from-gray-800 opacity-80 text-white p-2 bottom-0">
                                    <p class="text-xs lg:text-base max-w text-center rounded-sm px-2 p-1 text-black bg-white">
                                        {{ $news->category }}
                                    </p>
                                    <p class="font-bold text-sm lg:text-lg">
                                        {{ $news->title }}
                                    </p>
                                    <p class="font-thin text-xs lg:text-sm">
                                        {{ $news->subtitle }}
                                    </p>

                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
                <div class="text-center mt-8">
                    <a href="{{ route('berita') }}" class="px-6 py-2 text-white bg-black hover:bg-gray-800 rounded-lg shadow-md transition-all duration-300">
                        Read More
                    </a>
                </div>
            </div>
        </div> --}}

       {{-- #7 --}}
        <div class="p-16">
            <p class="italic text-base xl:px-32">BERITA ADAM...</p>
            <p class="font-semibold text-3xl xl:px-32">Ikut keseharian Adam Dustin</p>
            <p class="bg-black w-20 mt-3 h-1 rounded-lg xl:ml-32"></p>

            {{-- isi keseharian --}}
            <div class="mt-16 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 justify-center mb-10">
                <!-- Menampilkan hanya 6 berita -->
                @foreach ($allnews->take(6) as $news)
                    <a href="{{ $news->link }}" class="mt-10 relative overflow-hidden rounded-md shadow-md w-full max-w-xs mx-auto scale-100 hover:scale-105 transition ease-in-out duration-200">
                        <div class="relative">
                            <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" class="w-full h-60 object-cover">
                            <!-- Layer abu-abu dengan opacity -->
                            <div class="absolute inset-0 bg-gray-800 opacity-50"></div>
                            <div class="absolute bg-gradient-to-t from-gray-800 opacity-80 text-white p-2 bottom-0">
                                <p class="text-xs lg:text-base max-w text-center rounded-sm px-2 p-1 text-black bg-white">
                                    {{ $news->category }}
                                </p>
                                <p class="font-bold text-sm lg:text-lg">
                                    {{ $news->title }}
                                </p>
                                <p class="font-thin text-xs lg:text-sm">
                                    {{ $news->subtitle }}
                                </p>

                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="text-center mt-8">
                <a href="{{ route('berita') }}" class="px-6 py-2 text-white bg-black hover:bg-gray-800 rounded-lg shadow-md transition-all duration-300">
                    Read More
                </a>
            </div>
        </div>

        {{-- #9 --}}
        <div class="w-full mb-10 p-16 xl:px-32">
            <div class="bg-black w-full h-52"></div>
        </div>
    </div>

    @include('Layout.Footer')
</body>

</html>
