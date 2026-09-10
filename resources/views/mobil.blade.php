@extends('layouts.app')

@section('content')

<section class="py-20">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-12">

            <h1 class="text-4xl font-bold">
                Pilihan Mobil Honda
            </h1>

            <p class="mt-3 text-gray-600">
                Pilih mobil Honda yang sesuai dengan kebutuhan Anda.
            </p>

        </div>


        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">


            <!-- BRIO -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden">

                <img src="{{ asset('images/brio.jpg') }}"
                     alt="Honda Brio"
                     class="w-full h-56 object-cover">

                <div class="p-6">

                    <h2 class="text-2xl font-bold">
                        Honda Brio
                    </h2>

                    <p class="mt-2 text-gray-600">
                        Mobil city car yang compact, nyaman dan cocok
                        untuk aktivitas sehari-hari.
                    </p>

                    <a href="{{ route('kontak') }}"
                       class="inline-block mt-5 bg-red-600
                              hover:bg-red-700 text-white
                              px-5 py-2 rounded-lg">
                        Tanya Sekarang
                    </a>

                </div>

            </div>


            <!-- WR-V -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden">

                <img src="{{ asset('images/wrv.jpg') }}"
                     alt="Honda WR-V"
                     class="w-full h-56 object-cover">

                <div class="p-6">

                    <h2 class="text-2xl font-bold">
                        Honda WR-V
                    </h2>

                    <p class="mt-2 text-gray-600">
                        SUV compact dengan desain modern dan nyaman
                        digunakan sehari-hari.
                    </p>

                    <a href="{{ route('kontak') }}"
                       class="inline-block mt-5 bg-red-600
                              hover:bg-red-700 text-white
                              px-5 py-2 rounded-lg">
                        Tanya Sekarang
                    </a>

                </div>

            </div>


            <!-- HR-V -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden">

                <img src="{{ asset('images/hrv.jpg') }}"
                     alt="Honda HR-V"
                     class="w-full h-56 object-cover">

                <div class="p-6">

                    <h2 class="text-2xl font-bold">
                        Honda HR-V
                    </h2>

                    <p class="mt-2 text-gray-600">
                        SUV stylish dengan teknologi modern dan
                        kenyamanan berkendara.
                    </p>

                    <a href="{{ route('kontak') }}"
                       class="inline-block mt-5 bg-red-600
                              hover:bg-red-700 text-white
                              px-5 py-2 rounded-lg">
                        Tanya Sekarang
                    </a>

                </div>

            </div>


            <!-- BR-V -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden">

                <img src="{{ asset('images/brv.jpg') }}"
                     alt="Honda BR-V"
                     class="w-full h-56 object-cover">

                <div class="p-6">

                    <h2 class="text-2xl font-bold">
                        Honda BR-V
                    </h2>

                    <p class="mt-2 text-gray-600">
                        SUV keluarga dengan kabin luas dan nyaman
                        untuk perjalanan bersama.
                    </p>

                    <a href="{{ route('kontak') }}"
                       class="inline-block mt-5 bg-red-600
                              hover:bg-red-700 text-white
                              px-5 py-2 rounded-lg">
                        Tanya Sekarang
                    </a>

                </div>

            </div>


            <!-- CIVIC -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden">

                <img src="{{ asset('images/civic.jpg') }}"
                     alt="Honda Civic"
                     class="w-full h-56 object-cover">

                <div class="p-6">

                    <h2 class="text-2xl font-bold">
                        Honda Civic
                    </h2>

                    <p class="mt-2 text-gray-600">
                        Sedan sporty dengan desain elegan dan performa
                        yang menarik.
                    </p>

                    <a href="{{ route('kontak') }}"
                       class="inline-block mt-5 bg-red-600
                              hover:bg-red-700 text-white
                              px-5 py-2 rounded-lg">
                        Tanya Sekarang
                    </a>

                </div>

            </div>


            <!-- CR-V -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden">

                <img src="{{ asset('images/crv.jpg') }}"
                     alt="Honda CR-V"
                     class="w-full h-56 object-cover">

                <div class="p-6">

                    <h2 class="text-2xl font-bold">
                        Honda CR-V
                    </h2>

                    <p class="mt-2 text-gray-600">
                        SUV premium dengan ruang luas, nyaman dan
                        teknologi modern.
                    </p>

                    <a href="{{ route('kontak') }}"
                       class="inline-block mt-5 bg-red-600
                              hover:bg-red-700 text-white
                              px-5 py-2 rounded-lg">
                        Tanya Sekarang
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection