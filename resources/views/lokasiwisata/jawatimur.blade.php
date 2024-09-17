<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Indonesia Travel</title>
</head>
<body class="bg-gray-100">
    
    <div class="relative flex h-screen justify-center items-center bg-cover bg-center" style="background-image: url('https://sgp1.digitaloceanspaces.com/tz-mag-id/wp-content/uploads/2019/01/020201014646/10-1-GunungMasjid-By-farizal_hakim.jpg');">

        <div class="absolute inset-0 bg-black bg-opacity-50"></div>

        <div class="relative z-10 text-center max-w-6xl mx-10">
            <h1 class="my-3 text-3xl font-bold tracking-tight text-gray-100 md:text-5xl">
                Jelajahi Keindahan
                Jawa Timur
            </h1>
            <div>
                <p class="max-w-2xl mx-auto my-2 text-base text-white md:leading-relaxed md:text-xl">
                    Jawa Timur adalah salah satu provinsi paling bersejarah dan berpengaruh di Indonesia. Kekayaan budaya hingga sejarah panjang menjadikan Jawa Timur pusat peradaban dan perkembangan Indonesia selama berabad-abad.
            </div>
            <div class="flex flex-col items-center justify-center gap-5 mt-6 md:flex-row">
                <a class="inline-block w-auto text-center min-w-[200px] px-6 py-4 text-white transition-all rounded-md shadow-xl sm:w-auto bg-gradient-to-r from-blue-600 to-blue-500 hover:bg-gradient-to-b hover:shadow-2xl"
                    href="{{ route('dashboard') }}">Home
                </a>
                <a class="inline-block w-auto text-center min-w-[200px] px-6 py-4 text-white transition-all rounded-md shadow-xl sm:w-auto bg-gradient-to-r from-blue-600 to-blue-500 hover:bg-gradient-to-b hover:shadow-2xl"
                    href="{{ route('createwisata.tambahwisatajawatimur') }}">Tambah Wisata
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
              src="https://res-1.cloudinary.com/enchanting/f_auto/et-web/2016/07/43795460_L-1.jpg"
              alt="Gunung Bromo"
              class="object-cover w-full h-full" />
          </figure>
          <div class="card-body">
            <h2 class="card-title">Gunung Bromo</h2>
            <p>Gunung Bromo adalah sebuah gunung berapi aktif di Jawa Timur, Indonesia.</p>
            <div class="card-actions justify-end">
              <button class="btn btn-primary" onclick="bromo.showModal()">Selengkapnya</button>
            </div>
          </div>
        </div>
      
        {{-- Modal bromo --}}
        <dialog id="bromo" class="modal">
          <div class="modal-box">
            <form method="dialog">
              <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <h3 class="text-lg font-bold">Gunung Bromo</h3>
            <p class="py-4">
                Gunung Bromo atau dalam bahasa Tengger dieja "Brama", juga disebut Kaldera Tengger, adalah sebuah gunung berapi aktif di Jawa Timur, Indonesia. Gunung ini memiliki ketinggian 2.614 meter di atas permukaan laut dan berada dalam empat wilayah kabupaten, yakni Kabupaten Probolinggo, Kabupaten Pasuruan, Kabupaten Lumajang, dan Kabupaten Malang. Gunung Bromo terkenal sebagai objek wisata utama di Jawa Timur. Sebagai sebuah objek wisata, Bromo menjadi menarik karena statusnya sebagai gunung berapi yang masih aktif. Gunung Bromo termasuk dalam kawasan Taman Nasional Bromo Tengger Semeru.
                Nama Bromo berasal dari nama dewa utama dalam agama Hindu, Brahma.
                Kawasan Kota Lama juga dilengkapi dengan Museum bernama Museum Kota Lama yang terletak di kawasan Jalan Cenderawasih, Semarang Tengah.
            </p>
          </div>
        </dialog>
        {{-- End --}}
      
        <div class="card bg-base-100 w-96 shadow-xl">
          <figure class="w-full h-64">
            <img
              src="https://ksmtour.com/media/images/articles26/pantai-pasir-putih-situbondo.jpg"
              alt="pantai pasir putih"
              class="object-cover w-full h-full" />
          </figure>
          <div class="card-body">
            <h2 class="card-title">Pantai Pasir Putih</h2>
            <p>Salah satu pantai eksotis yang berada di Jawa Timur adalah Pantai Pasir Putih.</p>
            <div class="card-actions justify-end">
              <button class="btn btn-primary" onclick="putih.showModal()">Selengkapnya</button>
            </div>
          </div>
        </div>
        {{-- Modal gamplong --}}
        <dialog id="putih" class="modal">
            <div class="modal-box">
              <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
              </form>
              <h3 class="text-lg font-bold">Pantai Pasir Putih</h3>
              <p class="py-4">
                Jawa Timur terkenal memiliki garis pantai yang panjang dengan berbagai karakteristiknya. Menjadikan Jawa Timur sebagai salah satu destinasi wisata pantai pilihan. Salah satu pantai eksotis yang berada di Jawa Timur adalah Pantai Pasir Putih.
                Pantai pasir putih Situbondo Jawa Timur, sejak lama selalu ramai dikunjungi oleh berbagai wisatawan. Baik wisatawan lokal maupun mancanegara. Tempat wisata ini menawarkan pemandangan laut yang eksotis banget. Pasir putihnya menjadi salah satu daya tarik tersendiri yang sayang sekali bila terlewatkan.
                Pantai Pasir Putih Situbondo terletak di wilayah yang strategis. Yaitu dipinggir Jalan Daendels yang menghubungkan Surabaya, Pasuruan, Probolinggo, Situbondo, dan berakhir di Banyuwangi.
                Pantai Pasir Putih Situbondo terkenal dengan pantainya yang landai dan berpasir putih. Pantai ini memiliki karakter ombak yang tenang. Wisata pantai yang menawarkan berbagai aktivitas seru cocok untuk liburan keluarga. Setiap akhir pekan dan hari libur, pantai ini semakin dipadati oheh wisatawan dari berbagai daerah.
              </p>
            </div>
          </dialog>
          {{-- End --}}

        <div class="card bg-base-100 w-96 shadow-xl">
          <figure class="w-full h-64">
            <img
              src="https://indonesiatraveler.id/wp-content/uploads/2020/07/Magetan-Telaga-Sarangan4-e1595905605934.jpeg"
              alt="k"
              class="object-cover w-full h-full" />
          </figure>
          <div class="card-body">
            <h2 class="card-title">Telaga Sarangan</h2>
            <p>Telaga Sarangan, juga dikenal sebagai Telaga Pasir adalah telaga alami yang berada di ketinggian 1.200 meter di atas permukaan laut.</p>
            <div class="card-actions justify-end">
              <button class="btn btn-primary" onclick="telaga.showModal()">Selengkapnya</button>
            </div>
          </div>
        </div>
      </div>
        {{-- Modal telaga --}}
        <dialog id="telaga" class="modal">
            <div class="modal-box">
              <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
              </form>
              <h3 class="text-lg font-bold">Telaga Sarangan</h3>
              <p class="py-4">
                Telaga Sarangan, juga dikenal sebagai Telaga Pasir adalah telaga alami yang berada di ketinggian 1.200 meter di atas permukaan laut dan terletak di lereng Gunung Lawu, Kecamatan Plaosan, Magetan.[1] Telaga ini berjarak sekitar 16 kilometer arah barat Kota Magetan. Telaga ini luasnya sekitar 30 hektare dan berkedalaman 28 meter.Dengan suhu udara antara 15 hingga 20 derajat Celsius. Telaga Sarangan mampu menarik ratusan ribu pengunjung setiap tahunnya. Telaga Sarangan adalah objek wisata andalan Magetan Di sekeliling telaga terdapat dua hotel berbintang, 43 hotel kelas melati, dan 18 pondok wisata.Di samping puluhan kios cendera mata,pengunjung dapat pula menikmati indahnya Sarangan dengan berkuda mengitari telaga,atau mengendarai kapal cepat.Fasilitas objek wisata lainnya pun tersedia,misalnya rumah makan, tempat bermain,pasar wisata,tempat parkir,tempat ibadah,dan taman.
              </p>
            </div>
          </dialog>
          {{-- End --}}
      
    <h1 class="flex text-blue-600 uppercase justify-center text-4xl font-semibold mt-28">
        Temukan Wisata Impian
    </h1>


    @foreach ($jawatimurs as $jawatimur)
    <div class="container mx-auto py-10 px-6">
      <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
          <div class="max-w-xs mx-auto overflow-hidden rounded-lg">
              <div class="relative">
                  <img class="w-full h-60 object-cover rounded-lg" src="{{ $jawatimur->image }}" alt="Yogyakarta">
              </div>
              <div class="p-4">
                  <h3 class="text-xl mb-2 font-semibold">{{ $jawatimur->nama }}</h3>
                  <p class="text-gray-700 text-base">{{ $jawatimur->keterangan }}</p>
              </div>
          </div>
      </div>
  </div>
    @endforeach
</body>
</html>
