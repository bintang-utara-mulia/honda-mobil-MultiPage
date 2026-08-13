@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="bg-gradient-to-r from-red-700 via-red-600 to-red-500 text-white">
    <div class="max-w-7xl mx-auto px-6 py-20 grid md:grid-cols-2 gap-10 items-center">

        <div>
            <span class="inline-block bg-white/20 px-4 py-2 rounded-full text-sm font-semibold mb-5">
                HONDA MOBIL
            </span>

            <h1 class="text-5xl md:text-6xl font-extrabold leading-tight">
                Mobil Honda
                <span class="text-yellow-300">Impian Anda</span>
            </h1>

            <p class="mt-6 text-lg text-red-100 leading-relaxed">
                Temukan berbagai pilihan mobil Honda terbaru dengan
                desain modern, teknologi canggih, performa terbaik,
                serta promo menarik untuk Anda.
            </p>

            <div class="mt-8 flex flex-wrap gap-4">
                <a href="#produk"
                   class="bg-white text-red-600 px-7 py-3 rounded-full font-bold hover:bg-gray-100 transition">
                    Lihat Produk
                </a>

                <a href="#kontak"
                   class="border-2 border-white px-7 py-3 rounded-full font-bold hover:bg-white hover:text-red-600 transition">
                    Hubungi Kami
                </a>
            </div>
        </div>

        <div class="flex justify-center">
            <img src="{{ asset('images/car.jpg') }}"
                 alt="Mobil Honda"
                 class="w-full max-w-xl rounded-2xl shadow-2xl">
        </div>

    </div>
</section>


<!-- KEUNGGULAN -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-12">
            <p class="text-red-600 font-bold uppercase">
                Mengapa Honda?
            </p>

            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">
                Pilihan Tepat Untuk Kebutuhan Anda
            </h2>
        </div>

        <div class="grid md:grid-cols-3 gap-8">

            <div class="p-8 rounded-2xl shadow-lg border text-center hover:-translate-y-2 transition">
                <div class="text-4xl mb-4">🚗</div>
                <h3 class="text-xl font-bold">Desain Modern</h3>
                <p class="text-gray-600 mt-3">
                    Desain stylish dan modern yang cocok untuk berbagai kebutuhan.
                </p>
            </div>

            <div class="p-8 rounded-2xl shadow-lg border text-center hover:-translate-y-2 transition">
                <div class="text-4xl mb-4">⚙️</div>
                <h3 class="text-xl font-bold">Teknologi Canggih</h3>
                <p class="text-gray-600 mt-3">
                    Dilengkapi teknologi dan fitur keselamatan untuk pengalaman berkendara.
                </p>
            </div>

            <div class="p-8 rounded-2xl shadow-lg border text-center hover:-translate-y-2 transition">
                <div class="text-4xl mb-4">💳</div>
                <h3 class="text-xl font-bold">Promo Menarik</h3>
                <p class="text-gray-600 mt-3">
                    Dapatkan penawaran menarik dan pilihan pembelian yang sesuai kebutuhan.
                </p>
            </div>

        </div>
    </div>
</section>


<!-- PRODUK -->
<section id="produk" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-12">
            <p class="text-red-600 font-bold uppercase">
                Produk Honda
            </p>

            <h2 class="text-4xl font-bold text-gray-900 mt-2">
                Pilihan Mobil Honda
            </h2>

            <p class="text-gray-600 mt-4">
                Pilih mobil Honda yang sesuai dengan kebutuhan dan gaya hidup Anda.
            </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- BRIO -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:-translate-y-2 transition">
                <img src="{{ asset('images/brio.jpg') }}"
                     alt="Honda Brio"
                     class="w-full h-52 object-cover">

                <div class="p-6">
                    <h3 class="text-2xl font-bold">
                        Honda Brio
                    </h3>

                    <p class="text-gray-600 mt-2">
                        City car stylish, compact, dan cocok untuk aktivitas sehari-hari.
                    </p>

                    <a href="#kontak"
                       class="inline-block mt-5 bg-red-600 text-white px-5 py-2 rounded-full font-semibold hover:bg-red-700 transition">
                        Tanya Sekarang
                    </a>
                </div>
            </div>


            <!-- WR-V -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:-translate-y-2 transition">
                <img src="{{ asset('images/wrv.jpg') }}"
                     alt="Honda WR-V"
                     class="w-full h-52 object-cover">

                <div class="p-6">
                    <h3 class="text-2xl font-bold">
                        Honda WR-V
                    </h3>

                    <p class="text-gray-600 mt-2">
                        SUV modern dengan desain sporty dan nyaman untuk perjalanan.
                    </p>

                    <a href="#kontak"
                       class="inline-block mt-5 bg-red-600 text-white px-5 py-2 rounded-full font-semibold hover:bg-red-700 transition">
                        Tanya Sekarang
                    </a>
                </div>
            </div>


            <!-- HR-V -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:-translate-y-2 transition">
                <img src="{{ asset('images/hrv.jpg') }}"
                     alt="Honda HR-V"
                     class="w-full h-52 object-cover">

                <div class="p-6">
                    <h3 class="text-2xl font-bold">
                        Honda HR-V
                    </h3>

                    <p class="text-gray-600 mt-2">
                        SUV stylish dengan teknologi modern dan kenyamanan maksimal.
                    </p>

                    <a href="#kontak"
                       class="inline-block mt-5 bg-red-600 text-white px-5 py-2 rounded-full font-semibold hover:bg-red-700 transition">
                        Tanya Sekarang
                    </a>
                </div>
            </div>


            <!-- BR-V -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:-translate-y-2 transition">
                <img src="{{ asset('images/brv.jpg') }}"
                     alt="Honda BR-V"
                     class="w-full h-52 object-cover">

                <div class="p-6">
                    <h3 class="text-2xl font-bold">
                        Honda BR-V
                    </h3>

                    <p class="text-gray-600 mt-2">
                        SUV keluarga dengan kabin luas dan nyaman untuk perjalanan bersama.
                    </p>

                    <a href="#kontak"
                       class="inline-block mt-5 bg-red-600 text-white px-5 py-2 rounded-full font-semibold hover:bg-red-700 transition">
                        Tanya Sekarang
                    </a>
                </div>
            </div>


            <!-- CIVIC -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:-translate-y-2 transition">
                <img src="{{ asset('images/civic.jpg') }}"
                     alt="Honda Civic"
                     class="w-full h-52 object-cover">

                <div class="p-6">
                    <h3 class="text-2xl font-bold">
                        Honda Civic
                    </h3>

                    <p class="text-gray-600 mt-2">
                        Sedan sporty dengan performa dan desain yang elegan.
                    </p>

                    <a href="#kontak"
                       class="inline-block mt-5 bg-red-600 text-white px-5 py-2 rounded-full font-semibold hover:bg-red-700 transition">
                        Tanya Sekarang
                    </a>
                </div>
            </div>


            <!-- CR-V -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:-translate-y-2 transition">
                <img src="{{ asset('images/crv.jpg') }}"
                     alt="Honda CR-V"
                     class="w-full h-52 object-cover">

                <div class="p-6">
                    <h3 class="text-2xl font-bold">
                        Honda CR-V
                    </h3>

                    <p class="text-gray-600 mt-2">
                        SUV premium dengan ruang luas, nyaman, dan teknologi terkini.
                    </p>

                    <a href="#kontak"
                       class="inline-block mt-5 bg-red-600 text-white px-5 py-2 rounded-full font-semibold hover:bg-red-700 transition">
                        Tanya Sekarang
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- TENTANG KAMI -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

        <div>
            <p class="text-red-600 font-bold uppercase">
                Tentang Kami
            </p>

            <h2 class="text-4xl font-bold mt-2">
                Partner Terbaik Untuk Mobil Honda Anda
            </h2>

            <p class="text-gray-600 mt-6 leading-relaxed">
                Honda Sales hadir untuk membantu Anda menemukan mobil Honda
                yang sesuai dengan kebutuhan. Kami memberikan informasi produk,
                promo, dan pelayanan terbaik untuk membantu proses pembelian Anda.
            </p>

            <p class="text-gray-600 mt-4 leading-relaxed">
                Dengan pelayanan yang ramah dan profesional, kami siap membantu
                Anda dari konsultasi hingga proses pembelian kendaraan.
            </p>
        </div>

        <div class="bg-red-600 rounded-3xl p-10 text-white">
            <h3 class="text-3xl font-bold">
                Pelayanan Terbaik
            </h3>

            <p class="mt-4 text-red-100">
                Konsultasikan kebutuhan mobil Honda Anda bersama sales kami.
                Dapatkan informasi produk dan promo terbaru.
            </p>

            <div class="mt-8 grid grid-cols-2 gap-5">
                <div class="bg-white/10 rounded-xl p-5">
                    <p class="text-3xl font-bold">6+</p>
                    <p class="text-sm mt-1">Pilihan Model</p>
                </div>

                <div class="bg-white/10 rounded-xl p-5">
                    <p class="text-3xl font-bold">24/7</p>
                    <p class="text-sm mt-1">Konsultasi</p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ================= PROMO ================= -->
<section id="promo" class="py-20 bg-red-600 text-white">

    <div class="max-w-7xl mx-auto px-6 text-center">

        <span class="text-yellow-300 font-bold">
            PROMO SPESIAL
        </span>

        <h2 class="text-3xl md:text-5xl font-extrabold mt-2">
            Promo Mobil Honda
        </h2>

        <p class="mt-5 max-w-2xl mx-auto text-red-100">
            Dapatkan penawaran menarik dan kemudahan pembelian motor Honda.
        </p>

        <div class="mt-10 grid md:grid-cols-3 gap-6">

            <div class="bg-white text-gray-900 rounded-2xl p-7">
                <h3 class="text-xl font-bold">
                    DP Ringan
                </h3>

                <p class="mt-3 text-gray-600">
                    Dapatkan pilihan paket pembelian dengan DP yang ringan.
                </p>
            </div>

            <div class="bg-white text-gray-900 rounded-2xl p-7">
                <h3 class="text-xl font-bold">
                    Cicilan Mudah
                </h3>

                <p class="mt-3 text-gray-600">
                    Pilihan tenor cicilan yang dapat disesuaikan dengan kebutuhan.
                </p>
            </div>

            <div class="bg-white text-gray-900 rounded-2xl p-7">
                <h3 class="text-xl font-bold">
                    Bonus Menarik
                </h3>

                <p class="mt-3 text-gray-600">
                    Nikmati berbagai penawaran dan bonus menarik selama periode promo.
                </p>
            </div>

        </div>

    </div>

</section>



<!-- TESTIMONI -->
<section id="testimoni" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-12">
            <p class="text-red-600 font-bold uppercase">
             
            Testimoni
            </p>

            <h2 class="text-4xl font-bold mt-2">
                Apa Kata Pelanggan?
            </h2>
        </div>

        <div class="grid md:grid-cols-3 gap-8">

            <div class="bg-white p-7 rounded-2xl shadow-lg">
                <div class="text-yellow-400 text-xl">
                    ★★★★★
                </div>

                <p class="text-gray-600 mt-4">
                    "Pelayanannya sangat membantu dan informasinya jelas.
                    Saya jadi lebih mudah menentukan pilihan mobil."
                </p>

                <h3 class="font-bold mt-5">
                    Angkasa
                </h3>

                <p class="text-sm text-gray-500">
                    Pelanggan Honda
                </p>
            </div>


            <div class="bg-white p-7 rounded-2xl shadow-lg">
                <div class="text-yellow-400 text-xl">
                    ★★★★★
                </div>

                <p class="text-gray-600 mt-4">
                    "Proses konsultasinya cepat dan sales sangat ramah.
                    Sangat membantu mencari mobil yang sesuai."
                </p>

                <h3 class="font-bold mt-5">
                    Serla
                </h3>

                <p class="text-sm text-gray-500">
                    Pelanggan Honda
                </p>
            </div>


            <div class="bg-white p-7 rounded-2xl shadow-lg">
                <div class="text-yellow-400 text-xl">
                    ★★★★★
                </div>

                <p class="text-gray-600 mt-4">
                    "Informasi produk dan promo mudah dipahami.
                    Pelayanannya juga sangat baik."
                </p>

                <h3 class="font-bold mt-5">
                    Bagas
                </h3>

                <p class="text-sm text-gray-500">
                    Pelanggan Honda
                </p>
            </div>

        </div>
    </div>
</section>


<!-- FAQ -->
<section id="faq" class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-6">

        <div class="text-center mb-12">
            <p class="text-red-600 font-bold uppercase">
                FAQ
            </p>

            <h2 class="text-4xl font-bold mt-2">
                Pertanyaan Umum
            </h2>
        </div>

        <div class="space-y-5">

            <details class="border rounded-xl p-5">
                <summary class="font-bold cursor-pointer">
                    Bagaimana cara mendapatkan informasi harga?
                </summary>

                <p class="text-gray-600 mt-3">
                    Silakan hubungi kami melalui kontak yang tersedia untuk
                    mendapatkan informasi harga dan penawaran terbaru.
                </p>
            </details>


            <details class="border rounded-xl p-5">
                <summary class="font-bold cursor-pointer">
                    Apakah tersedia simulasi kredit?
                </summary>

                <p class="text-gray-600 mt-3">
                    Kami dapat membantu memberikan informasi dan simulasi
                    pembelian kendaraan sesuai kebutuhan Anda.
                </p>
            </details>


            <details class="border rounded-xl p-5">
                <summary class="font-bold cursor-pointer">
                    Bagaimana cara melakukan konsultasi?
                </summary>

                <p class="text-gray-600 mt-3">
                    Anda dapat menghubungi sales melalui kontak yang tersedia
                    pada halaman ini.
                </p>
            </details>

        </div>
    </div>
</section>


<!-- KONTAK -->
<section id="kontak" class="py-20 bg-gray-900 text-white">
    <div class="max-w-7xl mx-auto px-6">

        <div class="grid md:grid-cols-2 gap-12">

            <div>
                <p class="text-red-500 font-bold uppercase">
                    Kontak Kami
                </p>

                <h2 class="text-4xl font-bold mt-2">
                    Siap Membantu Anda
                </h2>

                <p class="text-gray-400 mt-5 leading-relaxed">
                    Ingin mengetahui lebih lanjut mengenai mobil Honda?
                    Hubungi kami untuk mendapatkan informasi produk,
                    promo, dan konsultasi.
                </p>

                <div class="mt-8 space-y-4">

                    <p>
                        📱 WhatsApp:
                        <span class="text-gray-300">
                            0812-3456-7890
                        </span>
                    </p>

                    <p>
                        📧 Email:
                        <span class="text-gray-300">
                            info@hondasales.com
                        </span>
                    </p>

                    <p>
                        📍 Lokasi:
                        <span class="text-gray-300">
                            Sisoarjo, Jawa Timur
                        </span>
                    </p>

                </div>
            </div>


            <div class="bg-white text-gray-900 rounded-2xl p-8">

                <h3 class="text-2xl font-bold">
                    Hubungi Sales
                </h3>

                <form class="mt-6 space-y-4">

                    <input
                        type="text"
                        placeholder="Nama Anda"
                        class="w-full border rounded-lg px-4 py-3 outline-none focus:ring-2 focus:ring-red-500">

                    <input
                        type="text"
                        placeholder="Nomor WhatsApp"
                        class="w-full border rounded-lg px-4 py-3 outline-none focus:ring-2 focus:ring-red-500">

                    <textarea
                        rows="4"
                        placeholder="Tulis pesan Anda..."
                        class="w-full border rounded-lg px-4 py-3 outline-none focus:ring-2 focus:ring-red-500"></textarea>

                    <button
                        type="button"
                        class="w-full bg-red-600 text-white py-3 rounded-lg font-bold hover:bg-red-700 transition">
                        Kirim Pesan
                    </button>

                </form>

            </div>

        </div>
    </div>
</section>


<!-- FLOATING WHATSAPP -->
<a href="https://wa.me/6281234567890"
   target="_blank"
   class="fixed bottom-6 right-6 bg-green-500 hover:bg-green-600 text-white w-16 h-16 rounded-full flex items-center justify-center text-3xl shadow-2xl transition z-50">
    💬
</a>

@endsection