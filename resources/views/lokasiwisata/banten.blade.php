<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Indonesia Travel</title>
</head>
<body class="bg-gray-100">
    
    <div class="relative flex h-screen justify-center items-center bg-cover bg-center" style="background-image: url('http://4.bp.blogspot.com/-8AUO702HkVU/ViMRoAF7upI/AAAAAAAAAaQ/zToFJbZEf78/s1600/anyer1.JPG');">

        <div class="absolute inset-0 bg-black bg-opacity-50"></div>

        <div class="relative z-10 text-center max-w-6xl mx-10">
            <h1 class="my-3 text-3xl font-bold tracking-tight text-gray-100 md:text-5xl">
                Jelajahi Keindahan
                Banten
            </h1>
            <div>
                <p class="max-w-2xl mx-auto my-2 text-base text-white md:leading-relaxed md:text-xl">
                    Banten, sebagai provinsi yang relatif muda, terus berkembang dengan penuh semangat, memanfaatkan beragam potensi yang dimilikinya. 
                </p>
            </div>
            <div class="flex flex-col items-center justify-center gap-5 mt-6 md:flex-row">
                <a class="inline-block w-auto text-center min-w-[200px] px-6 py-4 text-white transition-all rounded-md shadow-xl sm:w-auto bg-gradient-to-r from-blue-600 to-blue-500 hover:bg-gradient-to-b hover:shadow-2xl"
                    href="{{ route('dashboard') }}">Home
                </a>
                <a class="inline-block w-auto text-center min-w-[200px] px-6 py-4 text-white transition-all rounded-md shadow-xl sm:w-auto bg-gradient-to-r from-blue-600 to-blue-500 hover:bg-gradient-to-b hover:shadow-2xl"
                    href="{{ route('createwisata.tambahwisatabanten') }}">Tambah Wisata
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
              src="http://indonesia-tourism.com/blog/wp-content/uploads/2012/12/tanjung.jpg"
              alt="Tanjung Lesung"
              class="object-cover w-full h-full" />
          </figure>
          <div class="card-body">
            <h2 class="card-title">Pantai Tanjung Lesung</h2>
            <p>Tanjung Lesung memiliki pesona yang sangat menakjubkan. Pantai ini memiliki panorama yang alami dan indah.</p>
            <div class="card-actions justify-end">
              <button class="btn btn-primary" onclick="lesung.showModal()">Selengkapnya</button>
            </div>
          </div>
        </div>
      
        {{-- Modal Tanjung Lesung --}}
        <dialog id="lesung" class="modal">
          <div class="modal-box">
            <form method="dialog">
              <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <h3 class="text-lg font-bold">Pantai Tanjung Lesung</h3>
            <p class="py-4">
                Tanjung Lesung memiliki pesona yang sangat menakjubkan. Pantai ini memiliki panorama yang alami dan indah. Selain itu, pantai ini memiliki pasir putih dengan karang yang unik. 
                Di bagian utara Tanjung merupakan daerah perbukitan yang tidak begitu curam. Di sini terdapat bagian laut yang menjorok ke pantai dan membentuk lagoon. Bagian air laut membentuk danau yang luas dan dalam sekali.
                pantai ini terletak di Desa Tanjung Jaya, Kecamatan Panimbang, Kabupaten Pandeglang, Provinsi Banten. Pantai ini buka selama 24 jam.
                Dinamakan Pantai Tanjung Lesung karena lokasinya berupa daratan yang menjorok ke laut mirip ujung lesung. Lesung merupakan salah satu alat yang digunakan masyarakat tradisional Nusantara untuk menumbuk padi. 
            </p>
          </div>
        </dialog>
        {{-- End --}}
      
        <div class="card bg-base-100 w-96 shadow-xl">
          <figure class="w-full h-64">
            <img
              src="https://indonesiatraveler.id/wp-content/uploads/2020/06/Ujung-Kulon-Taman-Nasional-Ujung-Kulon.jpg"
              alt="Taman nasional ujung kulon"
              class="object-cover w-full h-full" />
          </figure>
          <div class="card-body">
            <h2 class="card-title">Taman Nasional Ujung Kulon</h2>
            <p>Keindahan alam dan keanekaragaman hayati di taman nasional yang menakjubkan.</p>
            <div class="card-actions justify-end">
              <button class="btn btn-primary" onclick="kulon.showModal()">Selengkapnya</button>
            </div>
          </div>
        </div>
        {{-- Modal Taman Nasional --}}
        <dialog id="kulon" class="modal">
            <div class="modal-box">
              <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
              </form>
              <h3 class="text-lg font-bold">Taman Nasional Ujung Kulon</h3>
              <p class="py-4">
                Taman Nasional Ujung Kulon terletak di Semenanjung Ujung Kulon, bagian paling barat di Pulau Jawa, Indonesia. 
                Kawasan taman nasional ini pada mulanya meliputi wilayah Krakatau dan beberapa pulau kecil di sekitarnya seperti Pulau Handeuleum dan Pulau Peucang dan Pulau Panaitan. 
                Kawasan taman nasional ini mempunyai luas sekitar 122.956 Ha; (443 km² di antaranya adalah laut), yang dimulai dari tanah genting Semenanjung Ujung Kulon sampai dengan Samudra Hindia.
                Ujung Kulon merupakan taman nasional tertua di Indonesia yang sudah diresmikan sebagai salah satu Warisan Dunia yang dilindungi oleh UNESCO pada tahun 1991, karena wilayahnya mencakupi 
                hutan lindung yang sangat luas. Sampai saat ini kurang lebih 50 sampai dengan 60 badak hidup di habitat ini.
              </p>
            </div>
          </dialog>
          {{-- End --}}

        <div class="card bg-base-100 w-96 shadow-xl">
          <figure class="w-full h-64">
            <img
              src="https://pergiyuk.com/wp-content/uploads/2020/11/Masjid-Agung-Banten.jpg"
              alt="Masjid agung banten"
              class="object-cover w-full h-full" />
          </figure>
          <div class="card-body">
            <h2 class="card-title">Masjid Agung Banten</h2>
            <p>Masjid Agung Banten merupakan peninggalan Kerajaan Banten yang berdiri di wilayah Desa Banten, Kecamatan Kasemen, Kabupaten Serang.</p>
            <div class="card-actions justify-end">
              <button class="btn btn-primary" onclick="banten.showModal()">Selengkapnya</button>
            </div>
          </div>
        </div>
      </div>
        {{-- Modal Masjid Agung Banten --}}
        <dialog id="banten" class="modal">
            <div class="modal-box">
              <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
              </form>
              <h3 class="text-lg font-bold">Masjid Agung Banten</h3>
              <p class="py-4">
                Masjid Agung Banten merupakan peninggalan Kerajaan Banten yang berdiri di wilayah Desa Banten, Kecamatan Kasemen, Kabupaten Serang. Masjid bersejarah ini dibangun pada abad ke-16, pada masa 
                pemerintahan Sultan Maulana Hasanuddin (1552-1570). Sultan Maulana Hasanuddin adalah raja pertama Kesultanan Banten yang juga putra dari Sunan Gunung Jati. Masjid Agung Banten menjadi salah satu bukti kejayaan kota pelabuhan Banten yang masih berdiri hingga saat ini.
                Meski keadaannya tidak seperti pada saat didirikan, tetapi kondisinya tetap terpelihara dengan baik. Setiap harinya, Masjid Agung Banten ramai dikunjungi oleh para peziarah dan wisatawan.
                Para pengunjung dapat menikmati peninggalan bersejarah kerajaan Islam di Banten serta melihat keunikan arsitekturnya, yang merupakan bentuk akulturasi budaya Hindu Jawa, Cina, dan Eropa.
              </p>
            </div>
          </dialog>
          {{-- End --}}
      
    <h1 class="flex text-blue-600 uppercase justify-center text-4xl font-semibold mt-28">
        Temukan Wisata Impian
    </h1>
    @foreach ($bantens as $banten)
    <div class="container mx-auto py-10 px-6">
      <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
          <div class="max-w-xs mx-auto overflow-hidden rounded-lg">
              <div class="relative">
                  <img class="w-full h-60 object-cover rounded-lg" src="{{ $banten->image }}" alt="Yogyakarta">
              </div>
              <div class="p-4">
                  <h3 class="text-xl mb-2 font-semibold">{{ $banten->nama }}</h3>
                  <p class="text-gray-700 text-base">{{ $banten->keterangan }}</p>
              </div>
          </div>
      </div>
  </div>
@endforeach




</body>
</html>
