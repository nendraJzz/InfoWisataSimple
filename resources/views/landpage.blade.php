<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Indonesia Travel</title>
</head>
<body>
<!-- Navbar -->
<section class="w-full px-8 text-gray-700 bg-white">
    <div class="container flex flex-col flex-wrap items-center justify-between py-5 mx-auto md:flex-row max-w-7xl">
        <div class="relative flex flex-col md:flex-row">
            <a href="#_" class="flex items-center mb-5 font-medium text-gray-900 lg:w-auto lg:items-center lg:justify-center md:mb-0">
                <img src="https://2.bp.blogspot.com/-gkgmUYawUjc/W_5JkXuc0bI/AAAAAAAAQa8/omzPdqmKNPcSbVKOPlG1fKtsKT9sr272gCLcBGAs/s1600/WONDERFUL%2BINDONESIA.png" class="w-auto h-16" alt="">
            </a>
            <nav class="flex flex-wrap items-center mb-5 text-base md:mb-0 md:pl-8 md:ml-8 ">
                <a href="{{ route('lokasiwisata.banten') }}" class="mr-5 font-medium leading-6 text-gray-600 hover:text-gray-900">Banten</a>
                <a href="{{ route('lokasiwisata.jawabarat') }}" class="mr-5 font-medium leading-6 text-gray-600 hover:text-gray-900">Jawa Barat</a>
                <a href="{{ route('lokasiwisata.jakarta') }}" class="mr-5 font-medium leading-6 text-gray-600 hover:text-gray-900">DKI Jakarta</a>
                <a href="{{ route('lokasiwisata.yogyakarta') }}" class="mr-5 font-medium leading-6 text-gray-600 hover:text-gray-900">DI Yogyakarta</a>
                <a href="{{ route('lokasiwisata.jawatengah') }}" class="mr-5 font-medium leading-6 text-gray-600 hover:text-gray-900">Jawa Tengah</a>
                <a href="{{ route('lokasiwisata.jawatimur') }}" class="mr-5 font-medium leading-6 text-gray-600 hover:text-gray-900">Jawa Timur</a>
            </nav>
        </div>

        <div class="inline-flex items-center ml-5 space-x-6 lg:justify-end">
            <a href="{{ route('login') }}" class="text-base font-medium leading-6 text-gray-600 whitespace-no-wrap transition duration-150 ease-in-out hover:text-gray-900">
                Sign in
            </a>
            <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600">
                Sign up
            </a>
        </div>
    </div>
</section>

<!-- Content -->
<section class="px-2 py-32 bg-white md:px-0">
  <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
    <div class="flex flex-wrap items-center sm:-mx-3">
      <div class="w-full md:w-1/2 md:px-3">
        <div class="w-full pb-6 space-y-6 sm:max-w-md lg:max-w-lg md:space-y-4 lg:space-y-8 xl:space-y-9 sm:pr-5 lg:pr-0 md:pb-0">
          <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl">
            <span class="block xl:inline">Temukan Destinasi</span>
            <span class="block text-blue-600 xl:inline">Wisata Di Pulau Jawa</span>
          </h1>
          <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">Jelajahi pesona pulau jawa, Rasakan pengalaman tak terlupakan di jantung Indonesia.</p>
          <div class="relative flex flex-col sm:flex-row sm:space-x-4">
            <a href="{{ route('register') }}" class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-blue-600 rounded-md sm:mb-0 hover:bg-blue-700 sm:w-auto">
              Jelajahi
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
          </div>
        </div>
      </div>
      <div class="w-full md:w-1/2">
        <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl">
            <img src="img/gunung.jpg">
          </div>
      </div>
    </div>
  </div>
</section>

<h1 class="text-4xl ml-32 font-semibold">Destination Highlight</h1>
<div class="flex flex-wrap justify-center gap-8 p-8">
    <div class="relative w-56 h-56 bg-white shadow-lg rounded-lg overflow-hidden group">
        <img class="w-full h-full object-cover transition-transform duration-300 ease-in-out group-hover:scale-110" src="https://idetrips.com/wp-content/uploads/2018/07/Monas-jakarta-tourism-go-id.jpg" alt="Monas">
        <div class="absolute inset-0 transition-opacity duration-300 ease-in-out"></div>
        <div class="absolute bottom-0 left-0 right-0 text-center p-2">
            <p class="text-white text-lg font-semibold">Monas</p>
        </div>
    </div>
    <div class="relative w-56 h-56 bg-white shadow-lg rounded-lg overflow-hidden group">
        <img class="w-full h-full object-cover transition-transform duration-300 ease-in-out group-hover:scale-110" src="https://i0.wp.com/escapemanila.com/wp-content/uploads/2019/02/borobudur-temple.jpg?fit=2000%2C1333&ssl=1" alt="Borobudur">
        <div class="absolute inset-0 transition-opacity duration-300 ease-in-out"></div>
        <div class="absolute bottom-0 left-0 right-0 text-center p-2">
            <p class="text-white text-lg font-semibold">Candi Borobudur</p>
        </div>
    </div>
    <div class="relative w-56 h-56 bg-white shadow-lg rounded-lg overflow-hidden group">
        <img class="w-full h-full object-cover transition-transform duration-300 ease-in-out group-hover:scale-110" src="http://anekatempatwisata.com/wp-content/uploads/2014/11/Gunung-Bromo-2.jpg" alt="Bromo">
        <div class="absolute inset-0 transition-opacity duration-300 ease-in-out"></div>
        <div class="absolute bottom-0 left-0 right-0 text-center p-2">
            <p class="text-white text-lg font-semibold">Gunung Bromo</p>
        </div>
    </div>
    <div class="relative w-56 h-56 bg-white shadow-lg rounded-lg overflow-hidden group">
        <img class="w-full h-full object-cover transition-transform duration-300 ease-in-out group-hover:scale-110" src="https://www.gotravelly.com/assets/img/review/gallery/409/7be3d5d56bb44278bf9525a8d112aca3.jpg" alt="Prambanan">
        <div class="absolute inset-0 transition-opacity duration-300 ease-in-out"></div>
        <div class="absolute bottom-0 left-0 right-0 text-center p-2">
            <p class="text-white text-lg font-semibold">Candi Prambanan</p>
        </div>
    </div>
    <div class="relative w-56 h-56 bg-white shadow-lg rounded-lg overflow-hidden group">
        <img class="w-full h-full object-cover transition-transform duration-300 ease-in-out group-hover:scale-110" src="http://3.bp.blogspot.com/-kXkCDn2l4TM/UVEQ4S2-MLI/AAAAAAAAAFU/1J31vts5RY4/s1600/pantai+pangandaran.jpg" alt="Pangandaran">
        <div class="absolute inset-0 transition-opacity duration-300 ease-in-out"></div>
        <div class="absolute bottom-0 left-0 right-0 text-center p-2">
            <p class="text-white text-lg font-semibold">Pantai Pangandaran</p>
        </div>
    </div>
    <div class="relative w-56 h-56 bg-white shadow-lg rounded-lg overflow-hidden group">
        <img class="w-full h-full object-cover transition-transform duration-300 ease-in-out group-hover:scale-110" src="https://pergiyuk.com/wp-content/uploads/2020/11/Masjid-Agung-Banten.jpg" alt="Masjid Agung Banten">
        <div class="absolute inset-0 transition-opacity duration-300 ease-in-out"></div>
        <div class="absolute bottom-0 left-0 right-0 text-center p-2">
            <p class="text-white text-lg font-semibold">Masjid Agung Banten</p>
        </div>
    </div>
    <div class="relative w-56 h-56 bg-white shadow-lg rounded-lg overflow-hidden group">
        <img class="w-full h-full object-cover transition-transform duration-300 ease-in-out group-hover:scale-110" src="http://3.bp.blogspot.com/-j7KySallky0/TrH4t9IRF1I/AAAAAAAAC74/aXUubQ9SWtM/s1600/lawang+sewu+-+harian+semarang.jpg" alt="Lawang Sewu">
        <div class="absolute inset-0 transition-opacity duration-300 ease-in-out"></div>
        <div class="absolute bottom-0 left-0 right-0 text-center p-2">
            <p class="text-white text-lg font-semibold">Lawang Sewu</p>
        </div>
    </div>
    <div class="relative w-56 h-56 bg-white shadow-lg rounded-lg overflow-hidden group">
        <img class="w-full h-full object-cover transition-transform duration-300 ease-in-out group-hover:scale-110" src="https://anekatempatwisata.com/wp-content/uploads/2021/03/Ancol.jpg" alt="Pantai Ancol">
        <div class="absolute inset-0 transition-opacity duration-300 ease-in-out"></div>
        <div class="absolute bottom-0 left-0 right-0 text-center p-2">
            <p class="text-white text-lg font-semibold">Pantai Ancol</p>
        </div>
    </div>
</div>

{{-- Footer --}}
<footer class="mt-20 xl:mt-32 mx-auto w-full relative text-center bg-gray-600 text-white">
    <div class="px-6 py-8 md:py-14 xl:pt-20 xl:pb-12">
        <h2 class="font-bold text-3xl xl:text-4xl leading-snug">
            Ingin menemukan destinasi wisata lebih banyak?<br>Login dan temukan wisata.
        </h2>
        <a class="mt-8 xl:mt-12 px-12 py-5 text-lg text-gray-600 font-medium leading-tight inline-block bg-white rounded-full shadow-xl border border-transparent hover:bg-gray-300 hover:text-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-sky-999 focus:ring-sky-500"
            href="{{ route('register') }}">Get
            started</a>
        <div class="mt-14 xl:mt-20">
            <nav class="flex flex-wrap justify-center text-lg font-medium">
                <div class="px-5 py-2"><a href="#">Contact</a></div>
                <div class="px-5 py-2"><a href="#">Pricing</a></div>
                <div class="px-5 py-2"><a href="#">Privacy</a></div>
                <div class="px-5 py-2"><a href="#">Terms</a></div>
                <div class="px-5 py-2"><a href="#">Twitter</a></div>
            </nav>
            <p class="mt-7 text-base">© 2024 WONDERFUL INDONESIA.</p>
        </div>
    </div>
</footer>


</body>
</html>
