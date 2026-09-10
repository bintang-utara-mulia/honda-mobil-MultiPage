@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="bg-gray-900 text-white">

    <div class="max-w-7xl mx-auto px-6 py-24
                flex flex-col md:flex-row
                items-center gap-12">

        <div class="md:w-1/2">

            <p class="text-red-500 font-semibold mb-3">
                HONDA MOBIL
            </p>

            <h1 class="text-4xl md:text-6xl font-bold leading-tight">
                Temukan Mobil Honda
                <span class="text-red-500">
                    Impian Anda
                </span>
            </h1>

            <p class="mt-6 text-gray-300 text-lg">
                Pilihan mobil Honda berkualitas dengan pelayanan
                terbaik untuk kebutuhan perjalanan Anda.
            </p>

            <div class="mt-8 flex flex-wrap gap-4">

                <a href="{{ route('mobil') }}"
                   class="bg-red-600 hover:bg-red-700
                          px-6 py-3 rounded-lg font-semibold">
                    Lihat Produk
                </a>

                <a href="{{ route('kontak') }}"
                   class="border border-white
                          hover:bg-white hover:text-gray-900
                          px-6 py-3 rounded-lg font-semibold">
                    Hubungi Kami
                </a>

            </div>

        </div>


        <div class="md:w-1/2">

            <img src="{{ asset('images/car.jpg') }}"
                 alt="Mobil Honda"
                 class="w-full rounded-2xl shadow-2xl">

        </div>

    </div>

</section>


<!-- KEUNGGULAN -->
<section class="py-20 bg-white">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-12">

            <h2 class="text-3xl md:text-4xl font-bold">
                Kenapa Memilih Honda?
            </h2>

            <p class="mt-3 text-gray-600">
                Honda hadir dengan kualitas dan kenyamanan terbaik.
            </p>

        </div>


        <div class="grid md:grid-cols-3 gap-8">

            <div class="bg-gray-50 p-8 rounded-2xl shadow text-center">

                <div class="text-4xl mb-4">
                    🚗
                </div>

                <h3 class="text-xl font-bold">
                    Mobil Berkualitas
                </h3>

                <p class="mt-3 text-gray-600">
                    Mobil Honda dirancang dengan kualitas dan teknologi
                    modern.
                </p>

            </div>


            <div class="bg-gray-50 p-8 rounded-2xl shadow text-center">

                <div class="text-4xl mb-4">
                    💰
                </div>

                <h3 class="text-xl font-bold">
                    Harga Kompetitif
                </h3>

                <p class="mt-3 text-gray-600">
                    Dapatkan pilihan harga dan promo menarik untuk
                    berbagai kebutuhan.
                </p>

            </div>


            <div class="bg-gray-50 p-8 rounded-2xl shadow text-center">

                <div class="text-4xl mb-4">
                    ⭐
                </div>

                <h3 class="text-xl font-bold">
                    Pelayanan Terbaik
                </h3>

                <p class="mt-3 text-gray-600">
                    Kami siap membantu Anda mendapatkan mobil Honda
                    yang sesuai.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- CTA -->
<section class="bg-red-600 text-white py-16">

    <div class="max-w-4xl mx-auto px-6 text-center">

        <h2 class="text-3xl md:text-4xl font-bold">
            Siap Memiliki Mobil Honda?
        </h2>

        <p class="mt-4 text-red-100">
            Konsultasikan kebutuhan mobil Anda bersama kami.
        </p>

        <a href="{{ route('kontak') }}"
           class="inline-block mt-8 bg-white text-red-600
                  px-8 py-3 rounded-lg font-bold
                  hover:bg-gray-100">
            Hubungi Kami
        </a>

    </div>

</section>

@endsection