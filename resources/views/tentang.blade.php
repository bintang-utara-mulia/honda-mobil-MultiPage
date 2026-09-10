@extends('layouts.app')

@section('content')

<!-- HEADER -->
<section class="bg-gradient-to-r from-red-700 via-red-600 to-red-500 text-white">
    <div class="max-w-7xl mx-auto px-6 py-16 text-center">

        <span class="inline-block bg-white/20 px-4 py-2 rounded-full text-sm font-semibold mb-5">
            HONDA MOBIL
        </span>

        <h1 class="text-4xl md:text-5xl font-extrabold">
            Tentang Kami
        </h1>

        <p class="mt-5 text-lg text-red-100 max-w-2xl mx-auto">
            Kenali lebih dekat Honda Sales dan pelayanan yang
            kami berikan untuk membantu Anda menemukan mobil Honda.
        </p>

    </div>
</section>


<!-- TENTANG KAMI -->
<section class="py-20 bg-white">

    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

        <!-- TEKS -->
        <div>

            <p class="text-red-600 font-bold uppercase">
                Tentang Kami
            </p>

            <h2 class="text-4xl font-bold text-gray-900 mt-2">
                Partner Terbaik Untuk Mobil Honda Anda
            </h2>

            <p class="text-gray-600 mt-6 leading-relaxed">
                Honda Sales hadir untuk membantu Anda menemukan
                mobil Honda yang sesuai dengan kebutuhan dan
                aktivitas sehari-hari.
            </p>

            <p class="text-gray-600 mt-4 leading-relaxed">
                Kami menyediakan informasi mengenai berbagai
                pilihan mobil Honda, promo, serta membantu
                memberikan konsultasi sebelum melakukan pembelian.
            </p>

            <p class="text-gray-600 mt-4 leading-relaxed">
                Dengan pelayanan yang ramah dan profesional,
                kami berusaha memberikan pengalaman yang mudah
                dan nyaman bagi setiap pelanggan.
            </p>

        </div>


        <!-- KARTU -->
        <div class="bg-red-600 rounded-3xl p-10 text-white shadow-xl">

            <h3 class="text-3xl font-bold">
                Pelayanan Terbaik
            </h3>

            <p class="mt-4 text-red-100 leading-relaxed">
                Kami siap membantu Anda mendapatkan informasi
                mengenai produk Honda dan memberikan konsultasi
                sesuai dengan kebutuhan Anda.
            </p>

            <div class="mt-8 grid grid-cols-2 gap-5">

                <div class="bg-white/10 rounded-xl p-5">
                    <p class="text-3xl font-bold">
                        6+
                    </p>

                    <p class="text-sm mt-1">
                        Pilihan Model
                    </p>
                </div>

                <div class="bg-white/10 rounded-xl p-5">
                    <p class="text-3xl font-bold">
                        24/7
                    </p>

                    <p class="text-sm mt-1">
                        Konsultasi
                    </p>
                </div>

                <div class="bg-white/10 rounded-xl p-5">
                    <p class="text-3xl font-bold">
                        100%
                    </p>

                    <p class="text-sm mt-1">
                        Pelayanan
                    </p>
                </div>

                <div class="bg-white/10 rounded-xl p-5">
                    <p class="text-3xl font-bold">
                        Honda
                    </p>

                    <p class="text-sm mt-1">
                        Pilihan Anda
                    </p>
                </div>

            </div>

        </div>

    </div>

</section>


<!-- KEUNGGULAN -->
<section class="py-20 bg-gray-50">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-12">

            <p class="text-red-600 font-bold uppercase">
                Mengapa Memilih Kami?
            </p>

            <h2 class="text-4xl font-bold text-gray-900 mt-2">
                Kami Siap Membantu Anda
            </h2>

        </div>


        <div class="grid md:grid-cols-3 gap-8">

            <!-- CARD 1 -->
            <div class="bg-white rounded-2xl p-8 shadow-lg text-center
                        hover:-translate-y-2 transition">

                <div class="text-5xl mb-5">
                    🚗
                </div>

                <h3 class="text-xl font-bold text-gray-900">
                    Pilihan Mobil
                </h3>

                <p class="text-gray-600 mt-3">
                    Berbagai pilihan model mobil Honda tersedia
                    untuk memenuhi kebutuhan Anda.
                </p>

            </div>


            <!-- CARD 2 -->
            <div class="bg-white rounded-2xl p-8 shadow-lg text-center
                        hover:-translate-y-2 transition">

                <div class="text-5xl mb-5">
                    💬
                </div>

                <h3 class="text-xl font-bold text-gray-900">
                    Konsultasi
                </h3>

                <p class="text-gray-600 mt-3">
                    Dapatkan bantuan dan informasi untuk menentukan
                    mobil Honda yang sesuai.
                </p>

            </div>


            <!-- CARD 3 -->
            <div class="bg-white rounded-2xl p-8 shadow-lg text-center
                        hover:-translate-y-2 transition">

                <div class="text-5xl mb-5">
                    ⭐
                </div>

                <h3 class="text-xl font-bold text-gray-900">
                    Pelayanan Profesional
                </h3>

                <p class="text-gray-600 mt-3">
                    Kami memberikan pelayanan yang ramah,
                    mudah dipahami, dan profesional.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- CTA -->
<section class="py-16 bg-red-600 text-white">

    <div class="max-w-4xl mx-auto px-6 text-center">

        <h2 class="text-3xl md:text-4xl font-bold">
            Siap Menemukan Mobil Honda Pilihan Anda?
        </h2>

        <p class="mt-4 text-red-100">
            Lihat berbagai pilihan mobil Honda yang tersedia.
        </p>

        <a href="{{ route('mobil') }}"
           class="inline-block mt-7 bg-white text-red-600
                  px-7 py-3 rounded-full font-bold
                  hover:bg-gray-100 transition">
            Lihat Produk
        </a>

    </div>

</section>

@endsection