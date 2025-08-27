@extends('layouts.main')

@section('title', 'Beranda')

@section('content')
    <div class="relative bg-gray-900 text-white">
        <!-- Background -->
        <div class="absolute inset-0">
            <img class="w-full h-full object-cover opacity-30"
                src="" alt="SMK Plus Pelita Nusantara">
            <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-gray-900"></div>
        </div>

        <!-- Hero Section -->
        <div class="relative z-10 py-24 md:py-32 text-center shadow-lg">
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight mb-4 animate-fade-in-up">
                Selamat Datang di Aplikasi SMK Plus Pelita Nusantara
            </h1>
            <p class="text-lg md:text-xl opacity-90 max-w-3xl mx-auto leading-relaxed animate-fade-in-down">
                Platform manajemen data terintegrasi yang dibangun untuk efisiensi dan inovasi di lingkungan sekolah.
            </p>
        </div>
    </div>

    <!-- Features Section -->
    <div class="container mx-auto py-16 px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <!-- Card: Manajemen Siswa -->
            <div
                class="p-8 bg-gray-800 rounded-2xl border-2 border-sky-500 text-center transform hover:scale-105 transition-transform duration-300">
                <h3 class="text-xl font-semibold mb-2 text-white">Manajemen Siswa</h3>
                <p class="text-gray-400">Kelola data siswa secara lengkap dan terstruktur.</p>
            </div>

            <!-- Card: Manajemen Guru -->
            <div
                class="p-8 bg-gray-800 rounded-2xl border-2 border-sky-500 text-center transform hover:scale-105 transition-transform duration-300">
                <h3 class="text-xl font-semibold mb-2 text-white">Manajemen Guru</h3>
                <p class="text-gray-400">Kelola data guru dan mata pelajaran yang diampu.</p>
            </div>

            <!-- Card: Antarmuka Modern -->
            <div
                class="p-8 bg-gray-800 rounded-2xl border-2 border-sky-500 text-center transform hover:scale-105 transition-transform duration-300">
                <h3 class="text-xl font-semibold mb-2 text-white">Antarmuka Modern</h3>
                <p class="text-gray-400">Desain bersih dan responsif untuk pengalaman pengguna terbaik.</p>
            </div>

        </div>
    </div>
@endsection
