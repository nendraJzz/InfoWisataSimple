<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Indonesia Travel</title>
</head>
<body class="bg-gray-100">
    
    <div class="relative flex h-screen justify-center items-center bg-cover bg-center" style="background-image: url('http://anekatempatwisata.com/wp-content/uploads/2017/07/Curug-Cikaso-Sukabumi.jpg');">

        <div class="absolute inset-0 bg-black bg-opacity-50"></div>

        <div class="relative z-10 text-center max-w-6xl mx-10">
            <h1 class="my-3 text-3xl font-bold tracking-tight text-gray-100 md:text-5xl">
                Jelajahi Keindahan
                Jawa Barat
            </h1>
            <div>
                <p class="max-w-2xl mx-auto my-2 text-base text-white md:leading-relaxed md:text-xl">
                    Jawa Barat adalah sebuah provinsi di Indonesia yang seluruh wilayahnya masuk ke dalam bagian dari Tatar Sunda. Ibu kotanya berada di Kota Bandung.
                </p>
            </div>
            <div class="flex flex-col items-center justify-center gap-5 mt-6 md:flex-row">
                <a class="inline-block w-auto text-center min-w-[200px] px-6 py-4 text-white transition-all rounded-md shadow-xl sm:w-auto border border-white hover:bg-white hover:text-black hover:shadow-2xl"
                    href="{{ route('dashboard') }}">Home
                </a>
                <a class="inline-block w-auto text-center min-w-[200px] px-6 py-4 text-white transition-all rounded-md shadow-xl sm:w-auto border border-white hover:bg-white hover:text-black hover:shadow-2xl"
                    href="{{ route('createwisata.tambahwisatajawabarat') }}">Tambah Wisata
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
              src="https://cdn-cms.pgimgs.com/areainsider/2021/09/Alt-Text-Cerita-Dibalik-Megahnya-Masjid-Kubah-Emas-Depok.jpeg"
              alt="Masjid Kubah emas"
              class="object-cover w-full h-full rounded-lg" />
          </figure>
          <div class="card-body">
            <h2 class="card-title">Masjid Kubah Emas</h2>
            <p>Masjid Kubah Emas di Depok, Jawa Barat, disebut-sebut sebagai masjid termegah se-Asia Tenggara. </p>
            <div class="card-actions justify-end">
              <button class="btn btn-primary" onclick="kubah.showModal()">Selengkapnya</button>
            </div>
          </div>
        </div>
      
        {{-- Modal Masjid Kubah --}}
        <dialog id="kubah" class="modal">
          <div class="modal-box">
            <form method="dialog">
              <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <h3 class="text-lg font-bold">Masjid Kubah Emas Depok</h3>
            <p class="py-4">
                Masjid Kubah Emas di Depok, Jawa Barat, disebut-sebut sebagai masjid termegah se-Asia Tenggara. Sejarah pembangunan masjid ini dimulai sejak tahun 2001. 
                Pendiri Masjid Kubah Emas adalah pasangan suami-istri yakni Maimun Al Rasyid dan Dian Al Mahri.
                Bukan tanpa alasan Masjid Kubah Emas diklaim sebagai masjid paling megah di kawasan ASEAN. Yuswohady dalam Marketing to the Middle Class Muslim (2014) mengungkapkan,
                Masjid Kubah Emas memiliki 5 kubah utama dan 4 kubah kecil.
                Kubah-kubah di masjid yang terletak di Jalan Raya Maruyung, Depok, ini konon dilapisi emas setebal 2 sampai 3 milimeter, dengan mozaik kristal. Bentuk kubah utama menyerupai
                 kubah Taj Mahal di India atau kubah-kubah masjid khas Persia.
            </p>
          </div>
        </dialog>
        {{-- End --}}
      
        <div class="card bg-base-100 w-96 shadow-xl">
          <figure class="w-full h-64">
            <img
              src="https://2.bp.blogspot.com/-xIXUbI2wQ_s/VEiQaCZmtaI/AAAAAAAAAY8/7el6RujbRQY/s1600/Pesona%2BSamudera%2BIndonesia%2Bdi%2BPantai%2BHiu.JPG"
              alt="Pantai Batu Karas"
              class="object-cover w-full h-full rounded-lg" />
          </figure>
          <div class="card-body">
            <h2 class="card-title">Pantai Batu Karas</h2>
            <p>Pantai Batu Karas adalah satu dari sekian banyak pantai-pantai yang populer di Kabupaten Pangandaran. </p>
            <div class="card-actions justify-end">
              <button class="btn btn-primary" onclick="karas.showModal()">Selengkapnya</button>
            </div>
          </div>
        </div>
        {{-- Modal Batu Karas --}}
        <dialog id="karas" class="modal">
            <div class="modal-box">
              <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
              </form>
              <h3 class="text-lg font-bold">Pantai Batu Karas</h3>
              <p class="py-4">
                Pantai Batu Karas adalah satu dari sekian banyak pantai-pantai yang populer di Kabupaten Pangandaran. Faktanya, setiap akhir pekan, apalagi setiap liburan tiba,
                Batu Karas Pangandaran selalu dipadati oleh para wisatawan.
                Pantai Batu Karas dilengkapi dengan beragam fasilitas wisata yang akan memanjakan para wisatawan. Dan perlu diketahui bahwa Batu Karas Pangandaran sangat terkenal sebagai salah-satu spot surfing terbaik bagi para pemula.
                Lokasi Pantai Batu Karas berda di alamat Desa Batu Karas, Kecamatan Cijulang, Kabupaten Pangandaran, Provinsi Jawa Barat.
              </p>
            </div>
          </dialog>
          {{-- End --}}

        <div class="card bg-base-100 w-96 shadow-xl">
          <figure class="w-full h-64">
            <img
              src="https://3.bp.blogspot.com/-xHRy7WexmpM/WhpbGSTI4KI/AAAAAAAABO0/PVbbuCDwrdg2g4gt31N7p_ZOQb_4Jcf7ACLcBGAs/s1600/harga%2Btiket%2Bmasuk%2Bgua%2Bsunyaragi%2Bcirebon.jpg"
              alt="Gua Sunyaragi"
              class="object-cover w-full h-full rounded-lg" />
          </figure>
          <div class="card-body">
            <h2 class="card-title">Gua Sunyaragi</h2>
            <p>Kota Cirebon memiliki salah satu tempat wisata di Jawa Barat yang cukup legendaris, Gua Sunyaragi atau Taman Sari Sunyaragi.</p>
            <div class="card-actions justify-end">
              <button class="btn btn-primary" onclick="gua.showModal()">Selengkapnya</button>
            </div>
          </div>
        </div>
      </div>
        {{-- Modal Gua --}}
        <dialog id="gua" class="modal">
            <div class="modal-box">
              <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
              </form>
              <h3 class="text-lg font-bold">Gua Sunyaragi</h3>
              <p class="py-4">
                Kota Cirebon memiliki salah satu tempat wisata di Jawa Barat yang cukup legendaris. Gua Sunyaragi atau Taman Sari Sunyaragi merupakan sebuah situs bersejarah. Dahulu, Para Sultan menggunakan tempat ini sebagai tempat bermeditasi bagi para anggota kerajaan Keraton Kasepuhan Cirebon serta mengatur taktik perlawanan kepada para penjajah Belanda.
                Di dalam kompleksnya terdapat kolam air yang berfungsi sebagai pendingin ruangan dalam gua. Dalam komplek Gua Sunyaragi tidak terdapat bangunan masjid, melainkan hanya ada kamar-kamar mirip ruangan bawah tanah yang merupakan tempat ibadah dengan ukuran ruangan yang kecil.
                Selain menyimpan sejarah, mitos terucap dari mulut ke mulut terkait Gua ini. Salah satu mitosnya yakni konon jika seorang gadis menyentuh Patung Perawan Sunti, maka ia akan sulit mendapatkan jodoh.
              </p>
            </div>
          </dialog>
          {{-- End --}}
      
    <h1 class="flex text-blue-600 uppercase justify-center text-4xl font-semibold mt-28">
        Temukan Wisata Impian
    </h1>
    <div class="container mx-auto py-10 px-6">
      <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
        @foreach($jawabarats as $jawabarat)
        <div class="max-w-xs mx-auto overflow-hidden rounded-lg">
          <div class="relative">
            <img class="w-full h-60 object-cover rounded-lg" src="{{ $jawabarat->image }}">
          </div>
          <div class="p-4">
            <h3 class="text-xl mb-2 font-semibold">{{ $jawabarat->nama }}</h3>
            <p class="text-gray-700 text-base">{{ $jawabarat->keterangan }}</p>
          </div>
        </div>
        @endforeach
      </div>
    </div>
</body>
</html>
