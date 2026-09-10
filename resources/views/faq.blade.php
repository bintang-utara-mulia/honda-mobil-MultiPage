@extends('layouts.app')

@section('content')

<!-- HEADER FAQ -->
<section class="bg-gradient-to-r from-red-700 via-red-600 to-red-500 text-white">

    <div class="max-w-7xl mx-auto px-6 py-16 text-center">

        <span class="inline-block bg-white/20 px-4 py-2 rounded-full text-sm font-semibold mb-5">
            HONDA MOBIL
        </span>

        <h1 class="text-4xl md:text-5xl font-extrabold">
            Pertanyaan Umum
        </h1>

        <p class="mt-5 text-lg text-red-100 max-w-2xl mx-auto">
            Temukan jawaban dari beberapa pertanyaan yang
            sering ditanyakan mengenai mobil Honda.
        </p>

    </div>

</section>


<!-- FAQ -->
<section class="py-20 bg-gray-50">

    <div class="max-w-4xl mx-auto px-6">

        <div class="text-center mb-12">

            <p class="text-red-600 font-bold uppercase">
                FAQ
            </p>

            <h2 class="text-4xl font-bold text-gray-900 mt-2">
                Pertanyaan yang Sering Ditanyakan
            </h2>

            <p class="text-gray-600 mt-4">
                Berikut beberapa informasi yang mungkin Anda butuhkan.
            </p>

        </div>


        <div class="space-y-5">

            <!-- FAQ 1 -->
            <details class="bg-white border rounded-2xl p-6 shadow-sm">

                <summary class="font-bold text-lg text-gray-900 cursor-pointer">
                    Bagaimana cara mendapatkan informasi harga mobil Honda?
                </summary>

                <p class="text-gray-600 mt-4 leading-relaxed">
                    Anda dapat menghubungi kami melalui halaman kontak
                    untuk mendapatkan informasi harga dan penawaran
                    mobil Honda yang tersedia.
                </p>

            </details>


            <!-- FAQ 2 -->
            <details class="bg-white border rounded-2xl p-6 shadow-sm">

                <summary class="font-bold text-lg text-gray-900 cursor-pointer">
                    Apa saja mobil Honda yang tersedia?
                </summary>

                <p class="text-gray-600 mt-4 leading-relaxed">
                    Kami menyediakan beberapa pilihan mobil Honda,
                    seperti Honda Brio, WR-V, HR-V, BR-V, Civic,
                    dan CR-V.
                </p>

            </details>


            <!-- FAQ 3 -->
            <details class="bg-white border rounded-2xl p-6 shadow-sm">

                <summary class="font-bold text-lg text-gray-900 cursor-pointer">
                    Apakah tersedia konsultasi sebelum membeli?
                </summary>

                <p class="text-gray-600 mt-4 leading-relaxed">
                    Ya. Anda dapat berkonsultasi mengenai pilihan mobil,
                    kebutuhan penggunaan, serta informasi pembelian
                    sebelum menentukan pilihan.
                </p>

            </details>


            <!-- FAQ 4 -->
            <details class="bg-white border rounded-2xl p-6 shadow-sm">

                <summary class="font-bold text-lg text-gray-900 cursor-pointer">
                    Apakah tersedia simulasi kredit?
                </summary>

                <p class="text-gray-600 mt-4 leading-relaxed">
                    Informasi mengenai pilihan pembelian dan simulasi
                    kredit dapat dikonsultasikan melalui sales kami.
                </p>

            </details>


            <!-- FAQ 5 -->
            <details class="bg-white border rounded-2xl p-6 shadow-sm">

                <summary class="font-bold text-lg text-gray-900 cursor-pointer">
                    Bagaimana cara menghubungi Honda Sales?
                </summary>

                <p class="text-gray-600 mt-4 leading-relaxed">
                    Silakan menuju halaman Kontak untuk melihat
                    informasi kontak dan mengirimkan pesan kepada
                    Honda Sales.
                </p>

            </details>


            <!-- FAQ 6 -->
            <details class="bg-white border rounded-2xl p-6 shadow-sm">

                <summary class="font-bold text-lg text-gray-900 cursor-pointer">
                    Di mana lokasi Honda Sales?
                </summary>

                <p class="text-gray-600 mt-4 leading-relaxed">
                    Honda Sales berlokasi di Sidoarjo, Jawa Timur.
                    Silakan hubungi kami terlebih dahulu untuk
                    mendapatkan informasi lebih lanjut.
                </p>

            </details>

        </div>

    </div>

</section>


<!-- CTA -->
<section class="py-16 bg-red-600 text-white">

    <div class="max-w-4xl mx-auto px-6 text-center">

        <h2 class="text-3xl md:text-4xl font-bold">
            Masih Punya Pertanyaan?
        </h2>

        <p class="mt-4 text-red-100">
            Jangan ragu untuk menghubungi kami dan dapatkan
            informasi mengenai mobil Honda.
        </p>

        <a href="{{ route('kontak') }}"
           class="inline-block mt-7 bg-white text-red-600
                  px-7 py-3 rounded-full font-bold
                  hover:bg-gray-100 transition">
            Hubungi Kami
        </a>

    </div>

</section>

@endsection