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

    
    @foreach ($jawatimurs as $jawatimur)
    <div class="relative pt-24 flex flex-col items-center mx-auto lg:flex-row-reverse lg:max-w-5xl lg:mt-12 xl:max-w-6xl">
        <div class="w-full h-64 lg:w-1/2 lg:h-auto">
            <img class="h-full w-full object-cover" src="{{ $jawatimur->image }}" alt="Winding mountain road">
        </div>
        <div class="max-w-lg bg-white md:max-w-2xl md:z-10 md:shadow-lg md:absolute md:top-0 md:mt-48 lg:w-3/5 lg:left-0 lg:mt-20 lg:ml-20 xl:mt-24 xl:ml-12">
            <div class="flex flex-col p-12 md:px-16">
                <h2 class="text-2xl font-medium uppercase text-blue-600 lg:text-4xl">{{ $jawatimur->nama }}</h2>
                <p class="mt-4">
                    {{ $jawatimur->keterangan }}
                </p>
            </div>
        </div>
    </div>
    @endforeach
</body>
</html>
