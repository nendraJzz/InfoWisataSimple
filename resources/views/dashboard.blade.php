<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Indonesia Travel</title>
</head>
<body class="relative font-sans antialiased h-screen">
    <div class="relative h-screen bg-cover bg-center" style="background-image: url('https://c.inilah.com/2022/08/0825_035900_50f9_inilah.com_.jpg');">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <nav id="navbar" class="bg-transparent w-full z-10 top-0 transition duration-300 ease-in-out">
            <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
                <div class="pl-4 flex items-center z-50">
                    <a href="#">
                        <img src="http://2.bp.blogspot.com/-OYFAxi4ahu0/T_FhhawXm0I/AAAAAAAAAEk/tNjn-q8pZjM/w1200-h630-p-k-no-nu/Wonderful+Indonesia+Logo+White.png" class="w-auto h-16" alt="">
                    </a>
                </div>
                <div class="block lg:hidden pr-4">
                    <button id="nav-toggle" class="flex items-center p-1 text-white hover:text-gray-400 focus:outline-none focus:shadow-outline">
                        <svg class="fill-current h-6 w-6" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
                <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 text-white p-4 lg:p-0 z-20" id="nav-content">
                    <ul class="list-reset lg:flex justify-end flex-1 items-center">
                        <li class="mr-3">
                            <a class="inline-block py-2 px-4 text-white hover:text-gray-200" href="{{ route('lokasiwisata.banten') }}">Banten</a>
                        </li>
                        <li class="mr-3">
                            <a class="inline-block py-2 px-4 text-white hover:text-gray-200" href="{{ route('lokasiwisata.jawabarat') }}">Jawa Barat</a>
                        </li>
                        <li class="mr-3">
                            <a class="inline-block py-2 px-4 text-white hover:text-gray-200" href="{{ route('lokasiwisata.jakarta') }}">DKI Jakarta</a>
                        </li>
                        <li class="mr-3">
                            <a class="inline-block py-2 px-4 text-white hover:text-gray-200" href="{{ route('lokasiwisata.yogyakarta') }}">DI Yogyakarta</a>
                        </li>
                        <li class="mr-3">
                            <a class="inline-block py-2 px-4 text-white hover:text-gray-200" href="{{ route('lokasiwisata.jawatengah') }}">Jawa Tengah</a>
                        </li>
                        <li class="mr-3">
                            <a class="inline-block py-2 px-4 text-white hover:text-gray-200" href="{{ route('lokasiwisata.jawatimur') }}">Jawa Timur</a>
                        </li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <li class="mr-3">
                                <a class="inline-block py-2 px-4 cursor-pointer bg-blue-600 rounded-md text-white hover:text-gray-200" :href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                Logout</a>
                            </li>
                        </form>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="relative flex items-center justify-center h-full z-10">
            <div class="text-center">
                <h1 id="auto-typing" class="text-white text-5xl md:text-7xl font-bold"></h1>
                <p class="text-white text-xl md:text-2xl mt-4 mb-6">Temukan wisata impian</p>
            </div>
        </div>
    </div>


    <h1 class="flex text-gray-800 ml-7 text-4xl justify-center font-semibold mt-24">
        OUR PARTNERS
    </h1>
    <div class="w-full py-10">
        <div class="flex justify-between items-center space-x-6 px-10">
            <img src="https://1.bp.blogspot.com/-gcPW4R5n3hs/YKzMAOc8bwI/AAAAAAAAFEA/9jH2ImUDmkATv85lfi5N_My63hJyQTxnQCLcBGAsYHQ/s1600/Logo%2BKAI%2B%2528Kereta%2BApi%2BIndonesia%2529.png" alt="Logo 2" class="h-14 w-48 object-contain ">
            <img src="http://logos-download.com/wp-content/uploads/2016/08/Agoda_logo.png" alt="Logo 3" class="h-12 w-48 object-contain">
            <img src="https://east.vc/wp-content/uploads/2019/04/traveloka.png" alt="Logo 1" class="h-32 w-48 object-contain">
            <img src="https://1000logos.net/wp-content/uploads/2020/04/Garuda-Indonesia-Logo.png" alt="Logo 4" class="h-32 w-48 object-contain">
            <img src="https://logos-download.com/wp-content/uploads/2018/03/Grab_logo_green.png" alt="Logo 5" class="h-12 w-48 object-contain">
        </div>
    </div>

    <h1 class="flex text-gray-800 ml-7 text-2xl font-semibold mt-16">
        Flight Best Deals for You <x-svg-plane />
    </h1>
    <div class="container mx-auto py-5 px-6">
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            <!-- Card 1 -->
            <div class="max-w-xs mx-auto overflow-hidden bg-white rounded-lg">
                <div class="relative">
                    <img class="w-full h-60 object-cover rounded-lg" src="https://static.republika.co.id/uploads/images/inpicture_slide/007866500-1602053510-830-556.jpg" alt="Yogyakarta">
                    <span class="absolute top-0 left-0 bg-blue-500 text-white text-sm font-semibold px-3 py-1 rounded-br-lg">Kelas Ekonomi - Sekali Jalan</span>
                </div>
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Yogyakarta</h3>
                    <p class="text-gray-700 text-base">Jakarta (CGK) - Yogyakarta (YIA)</p>
                    <p class="text-blue-700 font-bold text-2xl mt-3">IDR 1,209,220*</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="max-w-xs mx-auto overflow-hidden bg-white rounded-lg">
                <div class="relative">
                    <img class="w-full h-60 object-cover rounded-lg" src="https://i.ytimg.com/vi/W3glO5d-mis/maxresdefault.jpg" alt="Jakarta">
                    <span class="absolute top-0 left-0 bg-blue-500 text-white text-sm font-semibold px-3 py-1 rounded-br-lg">Kelas Ekonomi - Sekali Jalan</span>
                </div>
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Jakarta</h3>
                    <p class="text-gray-700 text-base">Banda Aceh (BTJ) - Jakarta (CGK)</p>
                    <p class="text-blue-700 font-bold text-2xl mt-3">IDR 2,136,160*</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="max-w-xs mx-auto overflow-hidden bg-white rounded-lg">
                <div class="relative">
                    <img class="w-full h-60 object-cover rounded-lg" src="https://live.staticflickr.com/396/31678951011_abf3a52750_b.jpg" alt="Medan">
                    <span class="absolute top-0 left-0 bg-blue-500 text-white text-sm font-semibold px-3 py-1 rounded-br-lg">Kelas Ekonomi - Sekali Jalan</span>
                </div>
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Medan</h3>
                    <p class="text-gray-700 text-base">Medan (KNO) - Jakarta (CGK)</p>
                    <p class="text-blue-700 font-bold text-2xl mt-3">IDR 1,830,850*</p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="max-w-xs mx-auto overflow-hidden bg-white rounded-lg">
                <div class="relative">
                    <img class="w-full h-60 object-cover rounded-lg" src="https://www.teahub.io/photos/full/146-1462230_terumbu-karang-ikan-nemo.jpg" alt="Manado">
                    <span class="absolute top-0 left-0 bg-blue-500 text-white text-sm font-semibold px-3 py-1 rounded-br-lg">Kelas Ekonomi - Sekali Jalan</span>
                </div>
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Manado</h3>
                    <p class="text-gray-700 text-base">Jakarta (CGK) - Manado (MDC)</p>
                    <p class="text-blue-700 font-bold text-2xl mt-3">IDR 2,933,228*</p>
                </div>
            </div>
        </div>
    </div>

    <h1 class="flex text-gray-800 ml-7 text-2xl font-semibold mt-9">
        Villa & Resorts 
    </h1>
    
    <div class="container mx-auto py-5 px-6">
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            <!-- Card 1 -->
            <div class="max-w-xs mx-auto overflow-hidden rounded-lg">
                <div class="relative">
                    <img class="w-full h-60 object-cover rounded-lg" src="https://pix10.agoda.net/hotelImages/625/625049/625049_14050910120019356088.jpg?s=1024x768" alt="Yogyakarta">
                    <span class="absolute top-0 left-0 bg-blue-500 text-white text-sm font-semibold px-3 py-1 rounded-br-lg">Ciater</span>
                </div>
                <div class="p-4">
                    <h3 class="text-md font-semibold">Villa ChavaMinerva Kayu - Ciater Highland Resort</h3>
                    <p class="text-gray-700 text-base">⭐⭐⭐</p>
                    <p class="text-gray-700 text-base font-semibold">8.5/10</p>
                    <p class="text-gray-700 text-sm font-semibold line-through">Rp. 1.764.705</p>
                    <p class="text-orange-600 text-sm font-semibold">Rp. 705.882</p>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="max-w-xs mx-auto overflow-hidden rounded-lg">
                <div class="relative">
                    <img class="w-full h-60 object-cover rounded-lg" src="https://ik.imagekit.io/tvlk/apr-asset/dgXfoyh24ryQLRcGq00cIdKHRmotrWLNlvG-TxlcLxGkiDwaUSggleJNPRgIHCX6/hotel/asset/20046568-369923536a933f93e1d310de7247cd12.jpeg?_src=imagekit&tr=c-at_max,fo-auto,h-370,q-40,w-700" alt="Yogyakarta">
                    <span class="absolute top-0 left-0 bg-blue-500 text-white text-sm font-semibold px-3 py-1 rounded-br-lg">Ciater</span>
                </div>
                <div class="p-4">
                    <h3 class="text-md font-semibold">Miracle Signature Hills</h3>
                    <p class="text-gray-700 text-base">⭐⭐⭐</p>
                    <p class="text-gray-700 text-base font-semibold">7.8/10</p>
                    <p class="text-gray-700 text-sm font-semibold line-through">Rp. 2.000.000</p>
                    <p class="text-orange-600 text-sm font-semibold">Rp. 1.000.000</p>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="max-w-xs mx-auto overflow-hidden rounded-lg">
                <div class="relative">
                    <img class="w-full h-60 object-cover rounded-lg" src="https://s-light.tiket.photos/t/01E25EBZS3W0FY9GTG6C42E1SE/rsfit1440960gsm/tix-hotel/images-web/2022/04/29/9d41f6e3-786e-4122-b94a-60bcc8936d4a-1651225524256-9fd427e1c0970a7a91e4d56cb3cab032.jpg" alt="Yogyakarta">
                    <span class="absolute top-0 left-0 bg-blue-500 text-white text-sm font-semibold px-3 py-1 rounded-br-lg">Ngaglik</span>
                </div>
                <div class="p-4">
                    <h3 class="text-md font-semibold">The Kharma Villas</h3>
                    <p class="text-gray-700 text-base">⭐⭐⭐⭐⭐</p>
                    <p class="text-gray-700 text-base font-semibold">8.3/10</p>
                    <p class="text-gray-700 text-sm font-semibold line-through">Rp. 980.000</p>
                    <p class="text-orange-600 text-sm font-semibold">Rp. 735.000</p>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="max-w-xs mx-auto overflow-hidden rounded-lg">
                <div class="relative">
                    <img class="w-full h-60 object-cover rounded-lg" src="https://i.ytimg.com/vi/8KBDuZJZVrQ/maxresdefault.jpg" alt="Yogyakarta">
                    <span class="absolute top-0 left-0 bg-blue-500 text-white text-sm font-semibold px-3 py-1 rounded-br-lg">Batu</span>
                </div>
                <div class="p-4">
                    <h3 class="text-md font-semibold">Azcarya Villa Type Dyah</h3>
                    <p class="text-gray-700 text-base">⭐⭐⭐</p>
                    <p class="text-gray-700 text-base font-semibold">8.6/10</p>
                    <p class="text-gray-700 text-sm font-semibold line-through">Rp. 3.866.667</p>
                    <p class="text-orange-600 text-sm font-semibold">Rp. 2.900.000</p>
                </div>
            </div>


        </div>
    </div>

    <h1 class="flex text-gray-800 ml-7 text-2xl font-semibold mt-9">
        Read on and kickstart your adventure
    </h1>

    <div class="container mx-auto py-5 px-6">
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            <!-- Card 1 -->
            <div class="max-w-xs mx-auto overflow-hidden rounded-lg">
                <div class="relative">
                    <a href="/dashboard/gunungtertinggidipulaujawa">
                        <img class="w-full h-60 object-cover rounded-lg" src="https://i1.wp.com/img.okezone.com/content/2022/11/25/408/2714916/10-gunung-tertinggi-di-pulau-jawa-dan-ketinggiannya-pesonanya-memikat-wisatawan-Rny1YBCKi0.jpg?resize=780,470" alt="Yogyakarta">
                    </a>
                </div>
                <div class="py-2">
                    <a href="/dashboard/gunungtertinggidipulaujawa">
                        <h3 class="text-sm font-semibold">Jelajahi Keindahan 7 Gunung Tertinggi Di Pulau Jawa, Yuk!</h3>
                        <h3 class="text-sm font-semibold text-gray-600">Indonesia Travel</h3>
                    </a>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="max-w-xs mx-auto overflow-hidden rounded-lg">
                <div class="relative">
                    <a href="/dashboard/rekomendasihoteldijakarta">
                        <img class="w-full h-60 object-cover rounded-lg" src="https://res.klook.com/image/upload/fl_lossy.progressive,q_85/c_fill,w_1000/v1666170449/blog/djjr1vu5fgee8zkjbeax.webp" alt="Yogyakarta">
                    </a>
                </div>
                <div class="py-2">
                    <a href="/dashboard/rekomendasihoteldijakarta">
                        <h3 class="text-sm font-semibold">Rekomendasi 5 Hotel Terbaik Di Jakarta</h3>
                        <h3 class="text-sm font-semibold text-gray-600">Indonesia Travel</h3>
                    </a>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="max-w-xs mx-auto overflow-hidden rounded-lg">
                <div class="relative">
                    <a href="/dashboard/rekomendasiwisatasaljudijakarta">
                        <img class="w-full h-60 object-cover rounded-lg" src="https://ik.imagekit.io/tvlk/blog/2024/09/shutterstock_2361941693.jpg?tr=dpr-2.5,h-165,q-75,w-330" alt="Yogyakarta">
                    </a>
                </div>
                <div class="py-2">
                    <a href="/dashboard/rekomendasiwisatasaljudijakarta">
                        <h3 class="text-sm font-semibold">3 Rekomendasi Wisata Salju Di Jakarta Dan Sekitarnya</h3>
                        <h3 class="text-sm font-semibold text-gray-600">Indonesia Travel</h3>
                    </a>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="max-w-xs mx-auto overflow-hidden rounded-lg">
                <div class="relative">
                    <a href="/dashboard/rekomendasipasarbunga">
                        <img class="w-full h-60 object-cover rounded-lg" src="https://ik.imagekit.io/tvlk/blog/2024/09/shutterstock_2441158865.jpg?tr=dpr-2.5,h-165,q-75,w-330" alt="Yogyakarta">
                    </a>
                </div>
                <div class="py-2">
                    <a href="/dashboard/rekomendasipasarbunga">
                        <h3 class="text-sm font-semibold">Ingin Membeli Bunga? Ini 5 Pasar Bunga Jakarta yang Wajib Kamu Kunjungi!</h3>
                        <h3 class="text-sm font-semibold text-gray-600">Indonesia Travel</h3>
                    </a>
                </div>
            </div>



        </div>
    </div>



        <script src="javascript/typ.js"></script>
</body>
</html>
