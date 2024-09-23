<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Indonesia Travel</title>
</head>
<body class="bg-gray-100">
    
    <div class="relative flex h-screen justify-center items-center bg-cover bg-center" style="background-image: url('https://lh5.googleusercontent.com/RgSqBRXcwDoO430k1_etWmias7Z47ztXmtkYRQQrrCUSaZJnj0CKHa2qkSKwdZWCtrQCNMgog1eZ_T_quI_RCw0GZkoEq27tpBtKhXcUxn9xSR8ErqMWcfz6IR3LPTIC5rKcxQJK');">

        <div class="absolute inset-0 bg-black bg-opacity-50"></div>

        <div class="relative z-10 text-center max-w-6xl mx-10">
            <h1 class="my-3 text-3xl font-bold tracking-tight text-gray-100 md:text-5xl">
                Jelajahi Keindahan
                Jawa Tengah
            </h1>
            <div>
                <p class="max-w-2xl mx-auto my-2 text-base text-white md:leading-relaxed md:text-xl">
                    Jawa Tengah adalah sebuah wilayah provinsi di Indonesia yang terletak di bagian tengah Pulau Jawa. Ibu kota Provinsi Jawa Tengah berada di Kota Semarang.
                </p>
            </div>
            <div class="flex flex-col items-center justify-center gap-5 mt-6 md:flex-row">
                <a class="inline-block w-auto text-center min-w-[200px] px-6 py-4 text-white transition-all rounded-md shadow-xl sm:w-auto border border-white hover:bg-white hover:text-black hover:shadow-2xl"
                    href="{{ route('dashboard') }}">Home
                </a>
                <a class="inline-block w-auto text-center min-w-[200px] px-6 py-4 text-white transition-all rounded-md shadow-xl sm:w-auto border border-white hover:bg-white hover:text-black hover:shadow-2xl"
                    href="{{ route('createwisata.tambahwisatajawatengah') }}">Tambah Wisata
                </a>
            </div>
        </div>
    </div>

    <h1 class="flex text-blue-600 uppercase justify-center text-4xl font-semibold mt-28">
        Top Destination
      </h1>
      <div class="flex justify-center space-x-4 mt-10">
        <div class="card bg-base-100 w-96 shadow-xl">
          <figure class="w-full h-64">
            <img
              src="https://lh6.googleusercontent.com/z7w08GWs9OsxMjN6-hY4BlVDlSmk6YdGoXQ_RPKrshNqWqEOcFLgHg23mpYr9CGEA9_X71wm064xrTzwrkoCM31_T0mEFhBYdQipVMzO128Qi9x86NYdcNnx9hSASNgUpHV8iaff"
              alt="kota lama"
              class="object-cover w-full h-full rounded-lg" />
          </figure>
          <div class="card-body">
            <h2 class="card-title">Kota Lama Semarang</h2>
            <p>Kota Lama Semarang adalah suatu kawasan di Semarang yang menjadi pusat perdagangan pada abad 19–20 .</p>
            <div class="card-actions justify-end">
              <button class="btn btn-primary" onclick="lama.showModal()">Selengkapnya</button>
            </div>
          </div>
        </div>
      
        {{-- Modal Kota Lama --}}
        <dialog id="lama" class="modal">
          <div class="modal-box">
            <form method="dialog">
              <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <h3 class="text-lg font-bold">Kota Lama Semarang</h3>
            <p class="py-4">
                Kota Lama Semarang (bahasa Jawa: ꦑꦶꦛꦭꦩꦯꦼꦩꦫꦁ, translit. Kitha Lama Semarang, bahasa Belanda: Semarang Oude Stad) adalah suatu kawasan di Semarang yang menjadi pusat perdagangan pada abad 19–20 . Pada masa itu, untuk mengamankan warga dan wilayahnya, kawasan itu dibangun benteng, yang dinamai benteng Vijfhoek. Untuk mempercepat jalur perhubungan antar ketiga pintu gerbang di benteng itu maka dibuat jalan-jalan perhubungan, dengan jalan utamanya dinamai Heerenstraat. Saat ini bernama Jl. Letjen Soeprapto. Salah satu lokasi pintu benteng yang ada sampai saat ini adalah Jembatan Berok, yang disebut De Zuider Por. Kata 'Berok' sendiri merupakan hasil pelafalan masyarakat Pribumi yang kesulitan melafalkan kata 'Burg' dalam bahasa Belanda.
                Di sekitar Kota Lama dibangun kanal-kanal air yang keberadaannya masih bisa disaksikan hingga kini meski tidak terawat. Hal inilah yang menyebabkan Kota Lama mendapat julukan sebagai "Little Netherland". Lokasinya yang terpisah dengan lanskap mirip kota di Eropa serta kanal yang mengelilinginya menjadikan Kota Lama seolah miniatur Belanda di Semarang.
                Kawasan Kota Lama juga dilengkapi dengan Museum bernama Museum Kota Lama yang terletak di kawasan Jalan Cenderawasih, Semarang Tengah.
            </p>
          </div>
        </dialog>
        {{-- End --}}
      
        <div class="card bg-base-100 w-96 shadow-xl">
          <figure class="w-full h-64">
            <img
              src="http://anekatempatwisata.com/wp-content/uploads/2014/07/Masjid-Agung-Jawa-Tengah.jpg"
              alt="masjid agung"
              class="object-cover w-full h-full rounded-lg" />
          </figure>
          <div class="card-body">
            <h2 class="card-title">Masjid Agung Jawa Tengah</h2>
            <p>Masjid Agung Jawa Tengah adalah masjid yang terletak di Semarang, Jawa Tengah, Indonesia.
              Masjid ini mulai dibangun sejak tahun 2001. </p>
            <div class="card-actions justify-end">
              <button class="btn btn-primary" onclick="agung.showModal()">Selengkapnya</button>
            </div>
          </div>
        </div>
        {{-- Modal gamplong --}}
        <dialog id="agung" class="modal">
            <div class="modal-box">
              <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
              </form>
              <h3 class="text-lg font-bold">Masjid Agung Jawa Tengah</h3>
              <p class="py-4">
                Masjid Agung Jawa Tengah (bahasa Jawa: ꦩꦱ꧀ꦗꦶꦢ꧀ꦄꦒꦼꦁꦗꦮꦶꦩꦢꦾ, translit. Masjid Agêng Jawi Madya) adalah masjid yang terletak di Semarang, Jawa Tengah, Indonesia.
                Masjid ini mulai dibangun sejak tahun 2001 hingga selesai secara keseluruhan pada tahun 2006. Masjid ini berdiri di atas lahan 10 hektare. Masjid Agung diresmikan oleh Presiden Susilo Bambang Yudhoyono pada tanggal 14 November 2006. Masjid Agung Jawa Tengah (MAJT) merupakan masjid provinsi bagi provinsi Jawa Tengah.
              </p>
            </div>
          </dialog>
          {{-- End --}}

        <div class="card bg-base-100 w-96 shadow-xl">
          <figure class="w-full h-64">
            <img
              src="http://benddac.com/wp-content/uploads/2020/01/Lokomotif-C2001-Museum-Kereta-Api-Ambarawa-Reza-Syahputra-scaled.jpg"
              alt="k"
              class="object-cover w-full h-full rounded-lg" />
          </figure>
          <div class="card-body">
            <h2 class="card-title">Museum Kereta Api Ambarawa</h2>
            <p>Museum Kereta Api Ambarawa adalah bekas stasiun kereta api yang sudah dialihfungsikan menjadi sebuah museum serta merupakan museum perkeretaapian pertama di Indonesia.</p>
            <div class="card-actions justify-end">
              <button class="btn btn-primary" onclick="api.showModal()">Selengkapnya</button>
            </div>
          </div>
        </div>
      </div>
        {{-- Modal Keraton --}}
        <dialog id="api" class="modal">
            <div class="modal-box">
              <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
              </form>
              <h3 class="text-lg font-bold">Museum Kereta Api Ambarawa</h3>
              <p class="py-4">
                Museum Kereta Api Ambarawa (bahasa Inggris: Indonesian Railway Museum, Ambarawa) adalah bekas stasiun kereta api yang sudah dialihfungsikan menjadi sebuah museum serta merupakan museum perkeretaapian pertama di Indonesia. Museum ini secara administratif terletak di Panjang, Ambarawa, Semarang; pada ketinggian +474,40 meter, termasuk dalam Daerah Operasi IV Semarang. Museum ini dikelola oleh KAI Wisata bekerja sama dengan Pemerintah Provinsi Jawa Tengah.
              </p>
            </div>
          </dialog>
          {{-- End --}}
      
    <h1 class="flex text-blue-600 uppercase justify-center text-4xl font-semibold mt-28">
        Temukan Wisata Impian
    </h1>
    <div class="flex justify-center mt-10">
      <form id="searchForm" class="flex items-center w-full max-w-lg">
          <input 
              type="text" 
              name="search" 
              id="searchInput"
              placeholder="Cari wisata..." 
              value="{{ request('search') }}" 
              class="border border-gray-300 rounded-md py-2 px-4 w-full"
          >
          <button 
              type="submit" 
              class="ml-2 bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">
              Cari
          </button>
      </form>
  </div>
  
  <div class="container mx-auto py-10 px-6">
      <div id="searchResults" class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
          @foreach($jawatengahs as $jawatengah)
          <div class="max-w-xs mx-auto overflow-hidden rounded-lg">
              <div class="relative">
                  <img class="w-full h-60 object-cover rounded-lg" src="{{ $jawatengah->image }}">
              </div>
              <div class="p-4">
                  <h3 class="text-xl mb-2 font-semibold">{{ $jawatengah->nama }}</h3>
                  <p class="text-gray-700 text-base">{{ $jawatengah->keterangan }}</p>
              </div>
          </div>
          @endforeach
      </div>
  </div>
  
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
      $(document).ready(function() {
          $('#searchForm').on('submit', function(e) {
              e.preventDefault();  // Mencegah refresh halaman
  
              var searchQuery = $('#searchInput').val(); // Ambil nilai input pencarian
  
              // Kirim request AJAX
              $.ajax({
                  url: "{{ route('lokasiwisata.jawatengah') }}", // Ganti dengan route yang benar
                  method: "GET",
                  data: { search: searchQuery },
                  success: function(response) {
                      // Kosongkan elemen hasil pencarian
                      $('#searchResults').empty();
  
                      // Jika ada data yang ditemukan
                      if (response.jawatengahs && response.jawatengahs.length > 0) {
                          response.jawatengahs.forEach(function(jawatengah) {
                              $('#searchResults').append(`
                                  <div class="max-w-xs mx-auto overflow-hidden rounded-lg">
                                      <div class="relative">
                                          <img class="w-full h-60 object-cover rounded-lg" src="${jawatengah.image}">
                                      </div>
                                      <div class="p-4">
                                          <h3 class="text-xl mb-2 font-semibold">${jawatengah.nama}</h3>
                                          <p class="text-gray-700 text-base">${jawatengah.keterangan}</p>
                                      </div>
                                  </div>
                              `);
                          });
                      } else {
                          $('#searchResults').append('<p class="text-gray-600">Tidak ada wisata yang ditemukan.</p>');
                      }
                  },
                  error: function() {
                      // Jika ada kesalahan dalam request
                      $('#searchResults').append('<p class="text-red-600">Terjadi kesalahan dalam proses pencarian.</p>');
                  }
              });
          });
      });
  </script>
  
</body>
</html>
