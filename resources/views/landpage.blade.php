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
                <a href="{{ route('lokasiwisata.banten') }}" class="mr-5 font-medium leading-6 hover:text-gray-600 text-gray-900">Banten</a>
                <a href="{{ route('lokasiwisata.jawabarat') }}" class="mr-5 font-medium leading-6 hover:text-gray-600 text-gray-900">Jawa Barat</a>
                <a href="{{ route('lokasiwisata.jakarta') }}" class="mr-5 font-medium leading-6 hover:text-gray-600 text-gray-900">DKI Jakarta</a>
                <a href="{{ route('lokasiwisata.yogyakarta') }}" class="mr-5 font-medium leading-6 hover:text-gray-600 text-gray-900">DI Yogyakarta</a>
                <a href="{{ route('lokasiwisata.jawatengah') }}" class="mr-5 font-medium leading-6 hover:text-gray-600 text-gray-900">Jawa Tengah</a>
                <a href="{{ route('lokasiwisata.jawatimur') }}" class="mr-5 font-medium leading-6 hover:text-gray-600 text-gray-900">Jawa Timur</a>
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
<section class="px-2 py-28 bg-white md:px-0">
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


<div class="w-full py-10">
  <div class="flex justify-between items-center space-x-6 px-10">
      <img src="https://1.bp.blogspot.com/-gcPW4R5n3hs/YKzMAOc8bwI/AAAAAAAAFEA/9jH2ImUDmkATv85lfi5N_My63hJyQTxnQCLcBGAsYHQ/s1600/Logo%2BKAI%2B%2528Kereta%2BApi%2BIndonesia%2529.png" alt="Logo 2" class="h-14 w-48 object-contain ">
      <img src="http://logos-download.com/wp-content/uploads/2016/08/Agoda_logo.png" alt="Logo 3" class="h-12 w-48 object-contain">
      <img src="https://east.vc/wp-content/uploads/2019/04/traveloka.png" alt="Logo 1" class="h-32 w-48 object-contain">
      <img src="https://1000logos.net/wp-content/uploads/2020/04/Garuda-Indonesia-Logo.png" alt="Logo 4" class="h-32 w-48 object-contain">
      <img src="https://logos-download.com/wp-content/uploads/2018/03/Grab_logo_green.png" alt="Logo 5" class="h-12 w-48 object-contain">
  </div>
</div>

<!-- Section: Mengapa Harus IndonesiaTravel -->
<section class="py-16">
    <div class="container max-w-6xl mx-auto px-6 lg:px-8">
      <div class="text-center">
        <h2 class="text-4xl font-extrabold text-gray-800">Mengapa Harus Indonesia Travel?</h2>
        <p class="mt-4 text-lg text-gray-600 max-w-4xl mx-auto">
          IndonesiaTravel adalah platform terbaik untuk menjelajahi keindahan Pulau Jawa. Kami bekerja sama dengan mitra-mitra terpercaya seperti Traveloka, Grab, Agoda, Garuda Indonesia, dan KAI untuk memberikan pengalaman wisata yang nyaman, aman, dan menyenangkan.
        </p>
      </div>
  
      <div class="mt-12 grid gap-8 grid-cols-1 md:grid-cols-3">
        <!-- Card 1 -->
        <div class="bg-blue-500 p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105">
          <h3 class="text-2xl font-bold text-white">Kemudahan Akses</h3>
          <p class="mt-3 text-blue-100">
            Nikmati perjalanan yang mudah dengan dukungan dari Grab dan Garuda Indonesia untuk transportasi darat maupun udara, menjangkau berbagai destinasi wisata di seluruh Pulau Jawa.
          </p>
        </div>
  
        <!-- Card 2 -->
        <div class="bg-green-500 p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105">
          <h3 class="text-2xl font-bold text-white">Penginapan Terbaik</h3>
          <p class="mt-3 text-green-100">
            Temukan dan pesan penginapan berkualitas melalui Agoda dan Traveloka, dengan harga bersaing serta opsi yang sesuai kebutuhan Anda.
          </p>
        </div>
  
        <!-- Card 3 -->
        <div class="bg-teal-500 p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105">
          <h3 class="text-2xl font-bold text-white">Destinasi Wisata Unik</h3>
          <p class="mt-3 text-teal-100">
            Kami menyediakan rekomendasi wisata unik, tersembunyi, dan jarang dijelajahi, memastikan pengalaman baru di Pulau Jawa.
          </p>
        </div>
      </div>
  
      <div class="mt-8 grid gap-8 grid-cols-1 md:grid-cols-2 justify-center">
        <!-- Card 4 -->
        <div class="bg-purple-500 p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105">
          <h3 class="text-2xl font-bold text-white">Dukungan Pemerintah</h3>
          <p class="mt-3 text-purple-100">
            Bersama dengan kampanye Wonderful Indonesia, kami mendukung pariwisata lokal dan mempromosikan keindahan alam serta budaya.
          </p>
        </div>
  
        <!-- Card 5 -->
        <div class="bg-red-500 p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105">
          <h3 class="text-2xl font-bold text-white">One-stop Service</h3>
          <p class="mt-3 text-red-100">
            Semua kebutuhan wisata, mulai dari tiket, transportasi hingga akomodasi, tersedia di satu platform, membuat perencanaan perjalanan lebih mudah.
          </p>
        </div>
      </div>
    </div>
  </section>
  

<h1 class="text-4xl pt-10 ml-32 font-semibold">Destination Highlight</h1>
<div class="flex flex-wrap justify-center pb-28 gap-8 p-8">
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

<section class="py-10 bg-gray-50 sm:py-16 lg:py-24">
  <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
      <div class="max-w-2xl mx-auto text-center">
          <h2 class="text-3xl font-bold leading-tight text-gray-800 sm:text-4xl lg:text-5xl">
              Frequently asked questions
          </h2>
      </div>
      <div class="max-w-3xl mx-auto mt-8 space-y-4 md:mt-16">
          <div
              class="transition-all duration-200 bg-white border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-50">
              <button type="button" id="question1" data-state="closed" class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                  <span class="flex text-lg font-semibold text-black">Bagaimana saya bisa memulai?</span>
                  <svg id="arrow1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                      class="w-6 h-6 text-gray-400">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                  </svg>
              </button>
              <div id="answer1" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6">
                  <p>Memulai itu mudah! Daftar untuk membuat akun, dan Anda akan memiliki akses ke fitur-fitur platform kami.</p>
              </div>
          </div>
          <div
              class="transition-all duration-200 bg-white border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-50">
              <button type="button" id="question2" data-state="closed" class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                  <span class="flex text-lg font-semibold text-black">Bagaimana cara mencari tempat wisata di website ini?</span>
                  <svg id="arrow2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                      class="w-6 h-6 text-gray-400">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                  </svg>
              </button>
              <div id="answer2" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6">
                  <p>Anda bisa menggunakan fitur pencarian di halaman utama untuk mencari tempat wisata berdasarkan nama, lokasi, atau kategori wisata.</p>
              </div>
          </div>
          <div
              class="transition-all duration-200 bg-white border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-50">
              <button type="button" id="question3" data-state="closed" class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                  <span class="flex text-lg font-semibold text-black">Dukungan seperti apa yang Anda berikan?</span>
                  <svg id="arrow3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                      class="w-6 h-6 text-gray-400">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                  </svg>
              </button>
              <div id="answer3" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6">
                  <p>Kami menawarkan dukungan pelanggan yang komprehensif. Anda dapat menghubungi tim dukungan kami melalui berbagai saluran, termasuk email, obrolan, dan basis pengetahuan.</p>
              </div>
          </div>
          <div
              class="transition-all duration-200 bg-white border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-50">
              <button type="button" id="question4" data-state="closed" class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                  <span class="flex text-lg font-semibold text-black">Apakah ada biaya untuk mengakses informasi di website ini?</span>
                  <svg id="arrow4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                      class="w-6 h-6 text-gray-400">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                  </svg>
              </button>
              <div id="answer4" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6">
                  <p>Tidak, semua informasi yang tersedia di website ini bisa diakses secara gratis.</p>
              </div>
          </div>
      </div>
      <p class="text-center text-gray-600 textbase mt-9">
          Masih ada pertanyaan? 
          <span class="cursor-pointer font-medium text-tertiary transition-all duration-200 hover:text-tertiary focus:text-tertiary hover-underline">
              Hubungi dukungan kami
          </span>
      </p>
  </div>
  <script>

      document.querySelectorAll('[id^="question"]').forEach(function(button, index) {
          button.addEventListener('click', function() {
              var answer = document.getElementById('answer' + (index + 1));
              var arrow = document.getElementById('arrow' + (index + 1));

              if (answer.style.display === 'none' || answer.style.display === '') {
                  answer.style.display = 'block';
                  arrow.style.transform = 'rotate(0deg)';
              } else {
                  answer.style.display = 'none';
                  arrow.style.transform = 'rotate(-180deg)';
              }
          });
      });
  </script>
</section>



<footer class="px-3 pt-4 lg:px-9 border-t-2 bg-gray-800">
    <div class="grid gap-10 row-gap-6 mb-8 sm:grid-cols-2 lg:grid-cols-4">

        <div class="sm:col-span-2">
            <a href="#" class="inline-flex items-center">
                <img src="http://2.bp.blogspot.com/-OYFAxi4ahu0/T_FhhawXm0I/AAAAAAAAAEk/tNjn-q8pZjM/w1200-h630-p-k-no-nu/Wonderful+Indonesia+Logo+White.png" alt="logo" class="h-8 w-16 pt-1">
                <span class="ml-2 text-xl font-bold tracking-wide text-white">Indonesia Travel</span>
            </a>
            <div class="mt-6 lg:max-w-xl">
                <p class="text-sm text-white">
                    IndonesiaTravel adalah platform terbaik untuk menjelajahi keindahan Pulau Jawa. Kami bekerja sama dengan mitra-mitra terpercaya seperti Traveloka, Grab, Agoda, Garuda Indonesia, dan KAI untuk memberikan pengalaman wisata yang nyaman, aman, dan menyenangkan.
                </p>
            </div>
        </div>

        <div class="flex flex-col gap-2 text-sm">
            <p class="text-base font-bold tracking-wide text-white">Wisata Populer</p>
            <a href="/dashboard/jakarta" class="text-white">DKI Jakarta</a>
            <a href="/dashboard/yogyakarta" class="text-white">Yogyakarta</a>
            <a href="/dashboard/jawatengah" class="text-white">Jawa Tengah</a>
        </div>

        <div>
            <p class="text-base font-bold tracking-wide text-white mt-4">Contacts</p>
            <div class="flex text-white">
                <p class="mr-1 ">Email:</p>
                <a href="#" title="send email">admin@indonesiatravel.com</a>
            </div>
        </div>

    </div>

    <div class="flex flex-col-reverse justify-between pt-5 pb-10 border-t lg:flex-row">
        <p class="text-sm text-white">© Copyright 2024 Indonesia Travel. All rights reserved.</p>
        <ul class="flex flex-col mb-3 space-y-2 lg:mb-0 sm:space-y-0 sm:space-x-5 sm:flex-row">
            <li>
                <a href="#"
                    class="text-sm text-white transition-colors duration-300 hover:text-deep-purple-accent-400">Privacy &amp; Cookies Policy</a>
            </li>
            <li>
                <a href="#"
                    class="text-sm text-white transition-colors duration-300 hover:text-deep-purple-accent-400">Disclaimer</a>
            </li>
        </ul>
    </div>

</footer>


</body>
</html>
