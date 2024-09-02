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
        <nav id="navbar" class="bg-transparent   w-full z-10 top-0 transition duration-300 ease-in-out">
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
                        <form  method="POST" action="{{ route('logout') }}">
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

    {{-- Banten --}}
    {{-- <div class="bg-white py-16">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center mb-8">Jelajahi Keindahan Indonesia</h2> 
            <h2 class="text-4xl font-bold text-center mb-8">Pilih Desti</h2> 
            
        </div>
    </div> --}}

    <script src="javascript/typ.js"></script>
</body>
</html>
