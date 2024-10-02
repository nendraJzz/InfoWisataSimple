<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Tambah Wisata - Yogyakarta</title>
</head>
    <body class="">
        <h1 class="flex justify-center font-bold mt-5 text-4xl">Tambahkan Wisata Di Yogyakarta</h1>
        <div class="flex items-center justify-center p-12">

            <div class="mx-auto w-full max-w-[550px] bg-white">
                <form method="POST" action="/addyogya" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-5">
                        <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                            Nama Wisata
                        </label>
                        <input type="text" id="name" name="nama" placeholder="Masukan Nama Wisata"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-600  focus:shadow-md" />
                    </div>
                    <div class="mb-5">
                        <label for="phone" class="mb-3 block text-base font-medium text-[#07074D]">
                            Keterangan Wisata
                        </label>
                        <input type="text" id="phone" name="keterangan" placeholder="Masukan Keterangan Wisata"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-600 focus:shadow-md" />
                    </div>
                    <div class="mb-5">
                        <label for="phone" class="mb-3 block text-base font-medium text-[#07074D]">
                            Rating Wisata
                        </label>
                        <input type="text" id="phone" name="rating" placeholder="Masukan Rating Wisata"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-600 focus:shadow-md" />
                    </div>
                    <div class="mb-5">
                        <label for="phone" class="mb-3 block text-base font-medium text-[#07074D]">
                            Lokasi Wisata
                        </label>
                        <input type="text" id="phone" name="lokasi" placeholder="Masukan Lokasi Wisata"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-600 focus:shadow-md" />
                    </div>
                    <div class="mb-5">
                        <label for="phone" class="mb-3 block text-base font-medium text-[#07074D]">
                            Masukan Gambar Wisata
                        </label>
                        <input type="file" class="file-input file-input-bordered w-full max-w-xs" accept="jpg.jpeg.image/png.image/jpeg" name="image" />
                    </div>
                   
                    <div>
                        <button
                            class="hover:shadow-form w-full rounded-md bg-blue-600 py-3 px-8 text-center text-base font-semibold text-white outline-none">
                            Tambah Wisata
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </body>
</html>
