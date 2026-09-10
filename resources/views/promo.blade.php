@extends('layouts.app')

@section('content')

<!-- HEADER PROMO -->
<section class="bg-gradient-to-r from-red-700 via-red-600 to-red-500 text-white">
    <div class="max-w-7xl mx-auto px-6 py-16 text-center">

        <span class="inline-block bg-white/20 px-4 py-2 rounded-full text-sm font-semibold mb-5">
            PROMO HONDA
        </span>

        <h1 class="text-4xl md:text-5xl font-extrabold">
            Promo Mobil Honda
        </h1>

        <p class="mt-5 text-lg text-red-100 max-w-2xl mx-auto">
            Dapatkan berbagai penawaran menarik dan kemudahan
            pembelian mobil Honda sesuai kebutuhan Anda.
        </p>

    </div>
</section>


<!-- PROMO -->
<section class="py-20 bg-gray-50">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-12">

            <p class="text-red-600 font-bold uppercase">
                Penawaran Spesial
            </p>

            <h2 class="text-4xl font-bold text-gray-900 mt-2">
                Pilih Promo Terbaik
            </h2>

            <p class="text-gray-600 mt-4">
                Nikmati berbagai pilihan promo untuk mendapatkan mobil Honda impian Anda.
            </p>

        </div>


        <div class="grid md:grid-cols-3 gap-8">


            <!-- PROMO 1 -->
            <div class="bg-white rounded-2xl shadow-lg p-8
                        hover:-translate-y-2 transition">

                <div class="w-16 h-16 bg-red-100 text-red-600
                            rounded-2xl flex items-center justify-center
                            text-3xl mb-6">
                    💰
                </div>

                <h3 class="text-2xl font-bold text-gray-900">
                    DP Ringan
                </h3>

                <p class="text-gray-600 mt-4 leading-relaxed">
                    Dapatkan pilihan paket pembelian dengan
                    uang muka yang lebih ringan dan sesuai kebutuhan.
                </p>

                <a href="{{ route('kontak') }}"
                   class="inline-block mt-6 bg-red-600 text-white
                          px-6 py-3 rounded-full font-semibold
                          hover:bg-red-700 transition">
                    Konsultasi
                </a>

            </div>


            <!-- PROMO 2 -->
            <div class="bg-white rounded-2xl shadow-lg p-8
                        hover:-translate-y-2 transition">

                <div class="w-16 h-16 bg-red-100 text-red-600
                            rounded-2xl flex items-center justify-center
                            text-3xl mb-6">
                    📅
                </div>

                <h3 class="text-2xl font-bold text-gray-900">
                    Cicilan Mudah
                </h3>

                <p class="text-gray-600 mt-4 leading-relaxed">
                    Pilihan tenor cicilan yang dapat disesuaikan
                    dengan kemampuan dan kebutuhan Anda.
                </p>

                <a href="{{ route('kontak') }}"
                   class="inline-block mt-6 bg-red-600 text-white
                          px-6 py-3 rounded-full font-semibold
                          hover:bg-red-700 transition">
                    Konsultasi
                </a>

            </div>


            <!-- PROMO 3 -->
            <div class="bg-white rounded-2xl shadow-lg p-8
                        hover:-translate-y-2 transition">

                <div class="w-16 h-16 bg-red-100 text-red-600
                            rounded-2xl flex items-center justify-center
                            text-3xl mb-6">
                    🎁
                </div>

                <h3 class="text-2xl font-bold text-gray-900">
                    Bonus Menarik
                </h3>

                <p class="text-gray-600 mt-4 leading-relaxed">
                    Nikmati berbagai penawaran dan bonus menarik
                    selama periode promo berlangsung.
                </p>

                <a href="{{ route('kontak') }}"
                   class="inline-block mt-6 bg-red-600 text-white
                          px-6 py-3 rounded-full font-semibold
                          hover:bg-red-700 transition">
                    Konsultasi
                </a>

            </div>

        </div>

    </div>

</section>


<!-- INFO -->
<section class="py-20 bg-white">

    <div class="max-w-5xl mx-auto px-6">

        <div class="bg-red-600 rounded-3xl p-10 md:p-14 text-white text-center">

            <p class="text-yellow-300 font-bold uppercase">
                Jangan Lewatkan
            </p>

            <h2 class="text-3xl md:text-4xl font-extrabold mt-2">
                Temukan Penawaran Mobil Honda Anda
            </h2>

            <p class="mt-5 text-red-100 max-w-2xl mx-auto leading-relaxed">
                Konsultasikan kebutuhan Anda dengan sales untuk
                mendapatkan informasi mengenai produk dan promo
                yang tersedia.
            </p>

            <div class="mt-8 flex flex-wrap justify-center gap-4">

                <a href="{{ route('mobil') }}"
                   class="bg-white text-red-600 px-7 py-3 rounded-full
                          font-bold hover:bg-gray-100 transition">
                    Lihat Produk
                </a>

                <a href="{{ route('kontak') }}"
                   class="border-2 border-white px-7 py-3 rounded-full
                          font-bold hover:bg-white hover:text-red-600 transition">
                    Hubungi Kami
                </a>

            </div>

        </div>

    </div>

</section>

@endsection