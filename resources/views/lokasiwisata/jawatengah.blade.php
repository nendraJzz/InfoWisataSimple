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
                <a class="inline-block w-auto text-center min-w-[200px] px-6 py-4 text-white transition-all rounded-md shadow-xl sm:w-auto bg-gradient-to-r from-blue-600 to-blue-500 hover:bg-gradient-to-b hover:shadow-2xl"
                    href="{{ route('dashboard') }}">Home
                </a>
                <a class="inline-block w-auto text-center min-w-[200px] px-6 py-4 text-white transition-all rounded-md shadow-xl sm:w-auto bg-gradient-to-r from-blue-600 to-blue-500 hover:bg-gradient-to-b hover:shadow-2xl"
                    href="{{ route('createwisata.tambahwisatajawatengah') }}">Tambah Wisata
                </a>
            </div>
        </div>
    </div>

    
    @foreach ($jawatengahs as $jawatengah)
    <div class="relative pt-24 flex flex-col items-center mx-auto lg:flex-row-reverse lg:max-w-5xl lg:mt-12 xl:max-w-6xl">
        <div class="w-full h-64 lg:w-1/2 lg:h-auto">
            <img class="h-full w-full object-cover" src="{{ $jawatengah->image }}" alt="Winding mountain road">
        </div>
        <div class="max-w-lg bg-white md:max-w-2xl md:z-10 md:shadow-lg md:absolute md:top-0 md:mt-48 lg:w-3/5 lg:left-0 lg:mt-20 lg:ml-20 xl:mt-24 xl:ml-12">
            <div class="flex flex-col p-12 md:px-16">
                <h2 class="text-2xl font-medium uppercase text-blue-600 lg:text-4xl">{{ $jawatengah->nama }}</h2>
                <p class="mt-4">
                    {{ $jawatengah->keterangan }}
                </p>
            </div>
        </div>
    </div>
    @endforeach
</body>
</html>
