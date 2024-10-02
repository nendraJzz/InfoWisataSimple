<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Indonesia Travel</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-100 font-poppins">
    
    <div class="relative flex h-screen justify-center items-center bg-cover bg-center" style="background-image: url('https://7bd86aba206a59981820-a1471e32c826f82a376e3a3b16604284.ssl.cf6.rackcdn.com/2015/07/monas.jpg');">

        <div class="absolute inset-0 bg-black bg-opacity-50"></div>

        <div class="relative z-10 text-center max-w-6xl mx-10">
            <h1 class="my-3 text-3xl font-bold tracking-tight text-gray-100 md:text-5xl">
                Jelajahi Keindahan
                Jakarta
            </h1>
            <div>
                <p class="max-w-2xl mx-auto my-2 text-base text-white md:leading-relaxed md:text-lg">
                    Jakarta indonesia adalah ibu kota dan kota terbesar Indonesia. Terletak di estuari Sungai Ciliwung, di bagian barat laut Jawa, daerah ini telah lama menopang pemukiman manusia. 
                </p>
            </div>
            <div class="flex flex-col items-center justify-center gap-5 mt-6 md:flex-row">
                <a class="inline-block w-auto text-center min-w-[200px] px-6 py-4 text-white transition-all rounded-md shadow-xl sm:w-auto border border-white hover:bg-white hover:text-black hover:shadow-2xl"
                    href="{{ route('dashboard') }}">Home
                </a>
                @if (Auth::user()->role == 'admin')
                <a class="inline-block w-auto text-center min-w-[200px] px-6 py-4 text-white transition-all rounded-md shadow-xl sm:w-auto border border-white hover:bg-white hover:text-black hover:shadow-2xl"
                    href="{{ route('createwisata.tambahwisatajakarta') }}">Tambah Wisata
                </a>
                @endif
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
              src="https://anekatempatwisata.com/wp-content/uploads/2018/04/Taman-Mini-Indonesia-Indah.jpg"
              alt="TMII"
              class="object-cover w-full h-full rounded-lg" />
          </figure>
          <div class="card-body">
            <h2 class="card-title">Taman Mini Indonesia Indah</h2>
            <p>Kaya akan pesona budaya, flora, dan fauna, Indonesia punya segudang cerita yang tak kunjung ada habisnya.</p>
            <div class="card-actions justify-end">
              <button class="btn btn-primary" onclick="tmii.showModal()">Selengkapnya</button>
            </div>
          </div>
        </div>
      
        {{-- Modal TMII --}}
        <dialog id="tmii" class="modal">
          <div class="modal-box">
            <form method="dialog">
              <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <h3 class="text-lg font-bold">Taman Mini Indonesia Indah</h3>
            <p class="py-4">
                Ribuan corak adat dan budaya melukis cerita di setiap sudut tanah air dari Sabang hingga Merauke, menghadirkan identitas sebagai citra setiap daerah di Nusantara. Ragamnya menginspirasi mantan Ibu Negara Siti Hartinah, atau yang akrab disapa Ibu Tien Soeharto, untuk menggagaskan pendirian Taman Mini Indonesia Indah atau TMII. 
                Diawali dari impian seorang Ibu Negara yang ingin membawa rakyatnya menjelajah cerita Indonesia di satu taman terbuka, TMII lahir dan diresmikan pada April 1975 silam sebagai kawasan pelestarian dan pengembangan budaya bangsa. Keragaman 33 provinsi di Indonesia dikemas dalam bentuk miniatur kepulauan Nusantara, anjungan daerah, bangunan dan arsitektur tradisional, kesenian daerah, taman rekreasi, dan berbagai macam wahana. Lahan seluas 150 hektar disulap menjadi panggung seni, rekreasi, dan sarana edukasi bagi pengunjung dari berbagai rentang usia.
                Sekian dekade berlalu hingga akhirnya pada 1 September 2023, TMII mempersembahkan wajah baru TMII yang inovatif dan revolusioner. #WajahBaruTMII mengusung empat pilar, yaitu green (hijau), inclusive (inklusif), culture (budaya), dan smart (pintar). Pilar green pada TMII menghadirkan eco-park yang 70 persen areanya adalah taman hijau yang minim emisi. Pilar inclusive mengikutsertakan semua lapisan masyarakat untuk berbagi dalam persembahan kebudayaan, sedangkan pilar culture menghadirkan destinasi wisata yang merangkum corak budaya dan seni serta menjadikan pengunjung pemeran utama dalam setiap kegiatan di TMII. Terakhir, pilar smart melengkapi wajah baru TMII melalui implementasi platform digital yang mudah dan praktis untuk eksplorasi TMII.
            </p>
          </div>
        </dialog>
        {{-- End --}}
      
        <div class="card bg-base-100 w-96 shadow-xl">
          <figure class="w-full h-64">
            <img
              src="https://anekatempatwisata.com/wp-content/uploads/2021/03/Ancol.jpg"
              alt="Ancol"
              class="object-cover w-full h-full rounded-lg" />
          </figure>
          <div class="card-body">
            <h2 class="card-title">Pantai Ancol</h2>
            <p>Pantai Ancol merupakan kawasan wisata yang di dalamnya terdapat area pantai.</p>
            <div class="card-actions justify-end">
              <button class="btn btn-primary" onclick="ancol.showModal()">Selengkapnya</button>
            </div>
          </div>
        </div>
        {{-- Modal Ancol --}}
        <dialog id="ancol" class="modal">
            <div class="modal-box">
              <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
              </form>
              <h3 class="text-lg font-bold">Pantai Ancol</h3>
              <p class="py-4">
                Pantai Ancol merupakan kawasan wisata yang di dalamnya terdapat area pantai. Selama di sini kita dapat menikmati suasana segar Pantai Lagoon, Festival, Indah, Beach Pool dan Carnaval, serta Danau Impian. Berlibur di alam terbuka dipercaya memiliki efek menenangkan dan menyenangkan.
                Panjang garis pantainya yang kurang lebih 6,5 km menjadi tempat berbagai aktivitas wisata. Wisata pantai ini merupakan BUMD penghasil Pendapatan Asli Daerah kedua terbesar bagi provinsi DKI Jakarta.
              </p>
            </div>
          </dialog>
          {{-- End --}}

        <div class="card bg-base-100 w-96 shadow-xl">
          <figure class="w-full h-64">
            <img
              src="https://i2.wp.com/travel-lush.com/wp-content/uploads/2015/03/Kota-Tua-1-of-1.jpg"
              alt="kota tua"
              class="object-cover w-full h-full rounded-lg" />
          </figure>
          <div class="card-body">
            <h2 class="card-title">Kota Tua Jakarta</h2>
            <p>Kota Tua Jakarta, juga dikenal dengan sebutan Batavia Lama (Oud Batavia), adalah sebuah wilayah kecil di Jakarta, Indonesia. </p>
            <div class="card-actions justify-end">
              <button class="btn btn-primary" onclick="kota.showModal()">Selengkapnya</button>
            </div>
          </div>
        </div>
      </div>
        {{-- Modal Kota Tua --}}
        <dialog id="kota" class="modal">
            <div class="modal-box">
              <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
              </form>
              <h3 class="text-lg font-bold">Kota Tua Jakarta</h3>
              <p class="py-4">
                Kota Tua Jakarta, juga dikenal dengan sebutan Batavia Lama (Oud Batavia), adalah sebuah wilayah kecil di Jakarta, Indonesia. Wilayah khusus ini memiliki luas 1,3 kilometer persegi melintasi Jakarta Utara dan Jakarta Barat (Pinangsia, Taman Sari dan Roa Malaka).
                Dijuluki "Permata Asia" dan "Ratu dari Timur" pada abad ke-16 oleh pelayar Eropa, Jakarta Lama dianggap sebagai pusat perdagangan untuk benua Asia karena lokasinya yang strategis dan sumber daya melimpah.
              </p>
            </div>
          </dialog>
          {{-- End --}}
      
          <h1 class="flex items-center justify-center text-blue-600 uppercase text-4xl font-semibold text-center mt-24">
            Hello, {{ Auth::user()->name }}! <br> Sudah Siap Berwisata? Mulai Pencarianmu!
          </h1>
    <div class="flex justify-center mt-10">
      <form id="searchForm" class="flex items-center w-full max-w-lg">
          <input 
              type="text" 
              name="search" 
              id="searchInput"
              placeholder="Cari wisata..." 
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
          @forelse($jakartas as $jakarta)
          <div class="max-w-xs mx-auto bg-white shadow-lg overflow-hidden rounded-lg">
              <div class="relative">
                  <img class="w-full h-60 object-cover rounded-lg" src="{{ $jakarta->image }}">
              </div>
              <div class="p-4">
                  <h3 class="text-xl mb-2 font-semibold">{{ $jakarta->nama }}</h3>
                  <p class="text-gray-700 text-base">{{ $jakarta->keterangan }}</p>
                  <p class="text-gray-700 mt-4 text-base">{{ $jakarta->rating }}</p>
                  <p class="text-gray-700 text-sm"><span class="font-semibold">*Places to visit: </span> {{ $jakarta->lokasi }}</p>
              </div>
          </div>
          @empty
              <p class="text-gray-600">Tidak ada wisata yang ditemukan.</p>
          @endforelse
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
                  url: "{{ route('lokasiwisata.jakarta') }}", // Ganti dengan route pencarian yang benar
                  method: "GET",
                  data: { search: searchQuery },
                  success: function(response) {
                      // Kosongkan elemen hasil pencarian
                      $('#searchResults').empty();
  
                      // Jika ada data yang ditemukan
                      if (response.jakartas && response.jakartas.length > 0) {
                          response.jakartas.forEach(function(jakarta) {
                              $('#searchResults').append(`
                                  <div class="max-w-xs mx-auto  bg-white shadow-lg overflow-hidden rounded-lg">
                                      <div class="relative">
                                          <img class="w-full h-60 object-cover rounded-lg" src="${jakarta.image}">
                                      </div>
                                      <div class="p-4">
                                          <h3 class="text-xl mb-2 font-semibold">${jakarta.nama}</h3>
                                          <p class="text-gray-700 text-base">${jakarta.keterangan}</p>
                                          <p class="text-gray-700 mt-4 text-base">${jakarta.rating}</p>
                                          <p class="text-gray-700 text-sm"><span class="font-semibold">*Places to visit: </span> ${jakarta.lokasi}</p>
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
  
  <x-footer />
  
</body>
</html>
