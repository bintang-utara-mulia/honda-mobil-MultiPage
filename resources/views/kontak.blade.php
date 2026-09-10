@extends('layouts.app')

@section('content')

<!-- HEADER -->
<section class="bg-gradient-to-r from-red-700 via-red-600 to-red-500 text-white">

    <div class="max-w-7xl mx-auto px-6 py-16 text-center">

        <span class="inline-block bg-white/20 px-4 py-2 rounded-full text-sm font-semibold mb-5">
            HONDA MOBIL
        </span>

        <h1 class="text-4xl md:text-5xl font-extrabold">
            Kontak Kami
        </h1>

        <p class="mt-5 text-lg text-red-100 max-w-2xl mx-auto">
            Hubungi Honda Sales untuk mendapatkan informasi
            mengenai produk, promo, dan konsultasi mobil Honda.
        </p>

    </div>

</section>


<!-- KONTAK -->
<section class="py-20 bg-gray-50">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid md:grid-cols-2 gap-12">


            <!-- INFORMASI -->
            <div>

                <p class="text-red-600 font-bold uppercase">
                    Hubungi Kami
                </p>

                <h2 class="text-4xl font-bold text-gray-900 mt-2">
                    Siap Membantu Anda
                </h2>

                <p class="text-gray-600 mt-5 leading-relaxed">
                    Ingin mengetahui lebih lanjut mengenai mobil Honda?
                    Hubungi kami untuk mendapatkan informasi produk,
                    promo, dan konsultasi.
                </p>


                <!-- WHATSAPP -->
                <div class="mt-8 space-y-5">

                    <div class="bg-white rounded-2xl p-5 shadow-sm">

                        <div class="flex items-center gap-4">

                            <div class="w-12 h-12 bg-green-100 rounded-full
                                        flex items-center justify-center text-2xl">
                                📱
                            </div>

                            <div>

                                <p class="text-sm text-gray-500">
                                    WhatsApp
                                </p>

                                <p class="font-bold text-gray-900">
                                    0812-3456-7890
                                </p>

                            </div>

                        </div>

                    </div>


                    <!-- EMAIL -->
                    <div class="bg-white rounded-2xl p-5 shadow-sm">

                        <div class="flex items-center gap-4">

                            <div class="w-12 h-12 bg-red-100 rounded-full
                                        flex items-center justify-center text-2xl">
                                📧
                            </div>

                            <div>

                                <p class="text-sm text-gray-500">
                                    Email
                                </p>

                                <p class="font-bold text-gray-900">
                                    info@hondasales.com
                                </p>

                            </div>

                        </div>

                    </div>


                    <!-- LOKASI -->
                    <div class="bg-white rounded-2xl p-5 shadow-sm">

                        <div class="flex items-center gap-4">

                            <div class="w-12 h-12 bg-blue-100 rounded-full
                                        flex items-center justify-center text-2xl">
                                📍
                            </div>

                            <div>

                                <p class="text-sm text-gray-500">
                                    Lokasi
                                </p>

                                <p class="font-bold text-gray-900">
                                    Sidoarjo, Jawa Timur
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- FORM -->
            <div class="bg-white rounded-2xl shadow-lg p-8">

                <h3 class="text-2xl font-bold text-gray-900">
                    Hubungi Sales
                </h3>

                <p class="text-gray-600 mt-2">
                    Isi formulir berikut untuk menyampaikan pesan Anda.
                </p>


                <form class="mt-6 space-y-5">

                    <!-- NAMA -->
                    <div>

                        <label class="block font-semibold text-gray-700 mb-2">
                            Nama
                        </label>

                        <input
                            type="text"
                            placeholder="Masukkan nama Anda"
                            class="w-full border rounded-lg px-4 py-3
                                   outline-none focus:ring-2
                                   focus:ring-red-500">

                    </div>


                    <!-- WHATSAPP -->
                    <div>

                        <label class="block font-semibold text-gray-700 mb-2">
                            Nomor WhatsApp
                        </label>

                        <input
                            type="text"
                            placeholder="Masukkan nomor WhatsApp"
                            class="w-full border rounded-lg px-4 py-3
                                   outline-none focus:ring-2
                                   focus:ring-red-500">

                    </div>


                    <!-- PESAN -->
                    <div>

                        <label class="block font-semibold text-gray-700 mb-2">
                            Pesan
                        </label>

                        <textarea
                            rows="5"
                            placeholder="Tulis pesan Anda..."
                            class="w-full border rounded-lg px-4 py-3
                                   outline-none focus:ring-2
                                   focus:ring-red-500"></textarea>

                    </div>


                    <!-- BUTTON -->
                    <button
                        type="button"
                        class="w-full bg-red-600 text-white py-3
                               rounded-lg font-bold
                               hover:bg-red-700 transition">

                        Kirim Pesan

                    </button>

                </form>

            </div>

        </div>

    </div>

</section>


<!-- WHATSAPP CTA -->
<section class="py-16 bg-red-600 text-white">

    <div class="max-w-4xl mx-auto px-6 text-center">

        <div class="text-5xl mb-5">
            💬
        </div>

        <h2 class="text-3xl md:text-4xl font-bold">
            Ingin Respon Lebih Cepat?
        </h2>

        <p class="mt-4 text-red-100">
            Hubungi kami melalui WhatsApp untuk mendapatkan
            informasi lebih lanjut mengenai mobil Honda.
        </p>

        <a href="https://wa.me/6281234567890"
           target="_blank"
           class="inline-block mt-7 bg-white text-red-600
                  px-7 py-3 rounded-full font-bold
                  hover:bg-gray-100 transition">

            Chat WhatsApp

        </a>

    </div>

</section>

@endsection