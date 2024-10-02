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
    
    <div class="relative flex h-screen justify-center items-center bg-cover bg-center" style="background-image: url('https://2.bp.blogspot.com/-EB2dUNPUjJI/V6eA49L_0nI/AAAAAAAADiA/oAgwb2kyd2sC4hW62SEP9PyihgfQE_SjgCLcB/s1600/Obyek-Wisata-Candi-Prambanan-Yogyakarta.jpg');">

        <div class="absolute inset-0 bg-black bg-opacity-50"></div>

        <div class="relative z-10 text-center max-w-6xl mx-10">
            <h1 class="my-3 text-3xl font-bold tracking-tight text-gray-100 md:text-5xl">
                Jelajahi Keindahan
                Yogyakarta
            </h1>
            <div>
                <p class="max-w-2xl mx-auto my-2 text-base text-white md:leading-relaxed md:text-lg">
                    Daerah Istimewa Yogyakarta adalah wilayah tertua kedua di Indonesia setelah Jawa Timur, yang dibentuk oleh pemerintah negara bagian Indonesia. 
            </div>
            <div class="flex flex-col items-center justify-center gap-5 mt-6 md:flex-row">
                <a class="inline-block w-auto text-center min-w-[200px] px-6 py-4 text-white transition-all rounded-md shadow-xl sm:w-auto border border-white hover:bg-white hover:text-black hover:shadow-2xl"
                    href="{{ route('dashboard') }}">Home
                </a>
                @if (Auth::user()->role == 'admin')
                <a class="inline-block w-auto text-center min-w-[200px] px-6 py-4 text-white transition-all rounded-md shadow-xl sm:w-auto border border-white hover:bg-white hover:text-black hover:shadow-2xl"
                    href="{{ route('createwisata.tambahwisatayogyakarta') }}">Tambah Wisata
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
              src="https://www.piknikdong.com/wp-content/uploads/2016/11/Malioboro-Jogja.jpg"
              alt="malioboro"
              class="object-cover w-full h-full rounded-lg" />
          </figure>
          <div class="card-body">
            <h2 class="card-title">Malioboro</h2>
            <p>Jalan Malioboro adalah salah satu kawasan jalan dari tiga jalan di Kota Yogyakarta yang membentang dari Tugu Yogyakarta hingga ke persimpangan Titik Nol Kilometer Yogyakarta.</p>
            <div class="card-actions justify-end">
              <button class="btn btn-primary" onclick="malioboro.showModal()">Selengkapnya</button>
            </div>
          </div>
        </div>
      
        {{-- Modal Malioboro --}}
        <dialog id="malioboro" class="modal">
          <div class="modal-box">
            <form method="dialog">
              <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <h3 class="text-lg font-bold">Malioboro</h3>
            <p class="py-4">
                Jalan Malioboro (bahasa Jawa: ꦢꦭꦤ꧀ꦩꦭꦶꦪꦧꦫ, translit. Dalan Maliabara) adalah salah satu kawasan jalan dari tiga jalan di Kota Yogyakarta yang membentang dari Tugu Yogyakarta hingga ke persimpangan Titik Nol Kilometer Yogyakarta.
                Secara keseluruhan, kawasan Malioboro terdiri atas Jalan Margo Utomo, Jalan Malioboro, dan Jalan Margo Mulyo.
                Jalan ini menghubungkan Tugu Yogyakarta hingga menjelang kompleks Keraton Yogyakarta. Di sisi utara adalah Jalan Margo Utomo, yang terbentang dari selatan kawasan Tugu hingga sisi timur Stasiun Yogyakarta. Antara Jalan Margo Utomo dan Jalan Malioboro dipisahkan dengan perlintasan kereta api yang cukup unik, di mana perlintasan ini menggunakan palang pintu berjenis geser.
            </p>
          </div>
        </dialog>
        {{-- End --}}
      
        <div class="card bg-base-100 w-96 shadow-xl">
          <figure class="w-full h-64">
            <img
              src="https://asset.kompas.com/crops/4mGaPX8LEpBNGka0xEFBpS4pbAE=/0x0:1800x1200/750x500/data/photo/2022/09/18/6326c44cda72b.jpg"
              alt="studio alam gamplong"
              class="object-cover w-full h-full rounded-lg" />
          </figure>
          <div class="card-body">
            <h2 class="card-title">Studio Alam Gamplong</h2>
            <p>Gamplong Studio Alam Yogyakarta merupakan salah satu destinasi wisata di Provinsi Daerah Istimewa Yogyakarta (DIY).</p>
            <div class="card-actions justify-end">
              <button class="btn btn-primary" onclick="gamplong.showModal()">Selengkapnya</button>
            </div>
          </div>
        </div>
        {{-- Modal gamplong --}}
        <dialog id="gamplong" class="modal">
            <div class="modal-box">
              <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
              </form>
              <h3 class="text-lg font-bold">Studio Alam Gamplong</h3>
              <p class="py-4">
                Gamplong Studio Alam Yogyakarta merupakan salah satu destinasi wisata di Provinsi Daerah Istimewa Yogyakarta (DIY). Desain bangunannya yang unik membuat studio alam ini dijuluki mini Hollywood yang cocok dijadikan spot fotografi.
                Tempat ini merupakan lokasi syuting film yang dimiliki oleh sutradara film terkenal Indonesia, Hanung Bramantyo. Di sana, para wisatawan bisa berpura-pura menjadi seorang pemain film ternama yang sedang melakukan pengambilan gambar untuk film.
              </p>
            </div>
          </dialog>
          {{-- End --}}

        <div class="card bg-base-100 w-96 shadow-xl">
          <figure class="w-full h-64">
            <img
              src="https://anekatempatwisata.com/wp-content/uploads/2021/05/Keraton-Yogyakarta1.jpeg"
              alt="keraton"
              class="object-cover w-full h-full rounded-lg" />
          </figure>
          <div class="card-body">
            <h2 class="card-title">Keraton Yogyakarta</h2>
            <p>Keraton Ngayogyakarta Hadiningrat atau Keraton Yogyakarta merupakan istana resmi Kesultanan Ngayogyakarta Hadiningrat yang kini berlokasi di Kota Yogyakarta.</p>
            <div class="card-actions justify-end">
              <button class="btn btn-primary" onclick="keraton.showModal()">Selengkapnya</button>
            </div>
          </div>
        </div>
      </div>
        {{-- Modal Keraton --}}
        <dialog id="keraton" class="modal">
            <div class="modal-box">
              <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
              </form>
              <h3 class="text-lg font-bold">Keraton Yogyakarta</h3>
              <p class="py-4">
                Keraton Ngayogyakarta Hadiningrat atau Keraton Yogyakarta merupakan istana resmi Kesultanan Ngayogyakarta Hadiningrat yang kini berlokasi di Kota Yogyakarta. Keraton ini didirikan oleh Sri Sultan Hamengkubuwana I pada tahun 1755 sebagai Istana/Keraton Yogyakarta yang baru berdiri akibat perpecahan Mataram Islam dengan adanya Perjanjian Giyanti.
                Keraton ini adalah pecahan dari Keraton Surakarta Hadiningrat dari Mataram Islam Surakarta (Kerajaan Surakarta). Sehingga dinasti Mataram diteruskan oleh 2 Kerajaan yakni Kesultanan Yogyakarta dan Kesunanan Surakarta. Total luas wilayah keseluruhan keraton yogyakarta mencapai 144 hektar, yakni meliputi seluruh area di dalam benteng Baluwarti, 
                alun-alun Lor, alun-alun Kidul, gapura Gladak, dan kompleks Masjid Gedhe Yogyakarta. Sementara luas dari kedhaton (inti keraton) mencapai 13 hektar.
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
          @forelse($yogyakartas as $yogyakarta)
          <div class="max-w-xs mx-auto  bg-white shadow-lg overflow-hidden rounded-lg">
              <div class="relative">
                  <img class="w-full h-60 object-cover rounded-lg" src="{{ $yogyakarta->image }}">
              </div>
              <div class="p-4">
                  <h3 class="text-xl mb-2 font-semibold">{{ $yogyakarta->nama }}</h3>
                  <p class="text-gray-700 text-base">{{ $yogyakarta->keterangan }}</p>
                  <p class="text-gray-700 mt-4 text-base">{{ $yogyakarta->rating }}</p>
                  <p class="text-gray-700 text-sm"><span class="font-semibold">*Places to visit: </span> {{ $yogyakarta->lokasi }}</p>
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
                  url: "{{ route('lokasiwisata.yogyakarta') }}", // Ganti dengan route yang benar
                  method: "GET",
                  data: { search: searchQuery },
                  success: function(response) {
                      // Kosongkan elemen hasil pencarian
                      $('#searchResults').empty();
  
                      // Jika ada data yang ditemukan
                      if (response.yogyakartas && response.yogyakartas.length > 0) {
                          response.yogyakartas.forEach(function(yogyakarta) {
                              $('#searchResults').append(`
                                  <div class="max-w-xs mx-auto bg-white shadow-lg overflow-hidden rounded-lg">
                                      <div class="relative">
                                          <img class="w-full h-60 object-cover rounded-lg" src="${yogyakarta.image}">
                                      </div>
                                      <div class="p-4">
                                          <h3 class="text-xl mb-2 font-semibold">${yogyakarta.nama}</h3>
                                          <p class="text-gray-700 text-base">${yogyakarta.keterangan}</p>
                                          <p class="text-gray-700 mt-4 text-base">${yogyakarta.rating}</p>
                                          <p class="text-gray-700 text-sm"><span class="font-semibold">*Places to visit: </span> ${yogyakarta.lokasi}</p>
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
