@extends('layouts.app')

@section('content')

<!-- HEADER -->
<section class="bg-gradient-to-r from-red-700 via-red-600 to-red-500 text-white">
    <div class="max-w-7xl mx-auto px-6 py-16 text-center">

        <span class="inline-block bg-white/20 px-4 py-2 rounded-full text-sm font-semibold mb-5">
            HONDA MOBIL
        </span>

        <h1 class="text-4xl md:text-5xl font-extrabold">
            Testimoni Pelanggan
        </h1>

        <p class="mt-5 text-lg text-red-100 max-w-2xl mx-auto">
            Simak pengalaman pelanggan setelah mendapatkan
            informasi dan pelayanan dari Honda Sales.
        </p>

    </div>
</section>


<!-- TESTIMONI -->
<section class="py-20 bg-gray-50">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-12">

            <p class="text-red-600 font-bold uppercase">
                Testimoni
            </p>

            <h2 class="text-4xl font-bold text-gray-900 mt-2">
                Apa Kata Pelanggan?
            </h2>

            <p class="text-gray-600 mt-4">
                Pengalaman pelanggan menjadi bagian penting bagi pelayanan kami.
            </p>

        </div>


        <div class="grid md:grid-cols-3 gap-8">


            <!-- TESTIMONI 1 -->
            <div class="bg-white rounded-2xl shadow-lg p-8
                        hover:-translate-y-2 transition">

                <div class="text-yellow-400 text-xl">
                    ★★★★★
                </div>

                <p class="text-gray-600 mt-5 leading-relaxed">
                    "Pelayanannya sangat membantu dan informasinya jelas.
                    Saya jadi lebih mudah menentukan pilihan mobil Honda
                    yang sesuai dengan kebutuhan."
                </p>

                <div class="mt-6 border-t pt-5">

                    <h3 class="font-bold text-gray-900">
                        Angkasa
                    </h3>

                    <p class="text-sm text-gray-500 mt-1">
                        Pelanggan Honda
                    </p>

                </div>

            </div>


            <!-- TESTIMONI 2 -->
            <div class="bg-white rounded-2xl shadow-lg p-8
                        hover:-translate-y-2 transition">

                <div class="text-yellow-400 text-xl">
                    ★★★★★
                </div>

                <p class="text-gray-600 mt-5 leading-relaxed">
                    "Proses konsultasinya cepat dan mudah.
                    Sales juga ramah sehingga saya lebih nyaman
                    dalam mencari mobil yang sesuai."
                </p>

                <div class="mt-6 border-t pt-5">

                    <h3 class="font-bold text-gray-900">
                        Serla
                    </h3>

                    <p class="text-sm text-gray-500 mt-1">
                        Pelanggan Honda
                    </p>

                </div>

            </div>


            <!-- TESTIMONI 3 -->
            <div class="bg-white rounded-2xl shadow-lg p-8
                        hover:-translate-y-2 transition">

                <div class="text-yellow-400 text-xl">
                    ★★★★★
                </div>

                <p class="text-gray-600 mt-5 leading-relaxed">
                    "Informasi produk dan promo mudah dipahami.
                    Pelayanannya juga sangat baik dan membantu
                    sebelum menentukan pilihan."
                </p>

                <div class="mt-6 border-t pt-5">

                    <h3 class="font-bold text-gray-900">
                        Bagas
                    </h3>

                    <p class="text-sm text-gray-500 mt-1">
                        Pelanggan Honda
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- PENILAIAN -->
<section class="py-20 bg-white">

    <div class="max-w-5xl mx-auto px-6">

        <div class="bg-gray-900 rounded-3xl p-10 md:p-14 text-white text-center">

            <p class="text-red-400 font-bold uppercase">
                Kepuasan Pelanggan
            </p>

            <h2 class="text-3xl md:text-4xl font-extrabold mt-2">
                Kami Mengutamakan Pelayanan Terbaik
            </h2>

            <p class="text-gray-400 mt-5 max-w-2xl mx-auto leading-relaxed">
                Kami berusaha memberikan informasi yang jelas,
                pelayanan yang ramah, dan membantu pelanggan
                menemukan pilihan mobil Honda yang sesuai.
            </p>

            <div class="mt-10 grid sm:grid-cols-3 gap-6">

                <div class="bg-white/10 rounded-2xl p-6">

                    <div class="text-yellow-400 text-2xl">
                        ★★★★★
                    </div>

                    <p class="font-bold mt-3">
                        Pelayanan
                    </p>

                </div>


                <div class="bg-white/10 rounded-2xl p-6">

                    <div class="text-yellow-400 text-2xl">
                        ★★★★★
                    </div>

                    <p class="font-bold mt-3">
                        Informasi
                    </p>

                </div>


                <div class="bg-white/10 rounded-2xl p-6">

                    <div class="text-yellow-400 text-2xl">
                        ★★★★★
                    </div>

                    <p class="font-bold mt-3">
                        Konsultasi
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- CTA -->
<section class="py-16 bg-red-600 text-white">

    <div class="max-w-4xl mx-auto px-6 text-center">

        <h2 class="text-3xl md:text-4xl font-bold">
            Ingin Mendapatkan Informasi Lebih Lanjut?
        </h2>

        <p class="mt-4 text-red-100">
            Lihat pilihan mobil Honda atau hubungi kami untuk konsultasi.
        </p>

        <div class="mt-7 flex flex-wrap justify-center gap-4">

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

</section>

@endsection