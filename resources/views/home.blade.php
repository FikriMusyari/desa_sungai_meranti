@extends('layout.app')

@section('content')
<div class="relative">
    <!-- Background Image -->
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/desasungaimeranti.jpeg') }}'); height: 100vh;">
        <div class="absolute inset-0 bg-black opacity-50"></div>
    </div>
    
    <div class="relative z-10 text-center py-24">
        <h1 class="text-4xl md:text-5xl font-bold text-white">Selamat Datang di Website Desa Sungai Meranti</h1>
        <p class="mt-4 text-lg text-white">Melayani masyarakat dengan cepat, transparan, dan modern.</p>
    </div>
</div>

<div class="container mx-auto px-4 py-12">
    <div class="grid md:grid-cols-3 gap-8 text-center">
        {{-- Card Pembuatan Surat --}}
        <div class="bg-white p-6 rounded-lg shadow-lg transition transform hover:scale-105 hover:shadow-2xl">
            <svg class="w-16 h-16 mx-auto text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
            <h4 class="text-xl font-semibold mt-3">Pembuatan Surat</h4>
            <p class="text-gray-600 mt-2">Buat berbagai surat administrasi desa secara online dengan mudah.</p>
            <a href="{{ route('pengajuan.create') }}" class="mt-4 inline-block bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition">Masuk</a>
        </div>

        {{-- Card Data Penduduk --}}
        <div class="bg-white p-6 rounded-lg shadow-lg transition transform hover:scale-105 hover:shadow-2xl">
            <svg class="w-16 h-16 mx-auto text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
            <h4 class="text-xl font-semibold mt-3">Data Penduduk</h4>
            <p class="text-gray-600 mt-2">Lihat dan kelola data penduduk desa secara real-time.</p>
            <a href="{{ route('penduduk') }}" class="mt-4 inline-block bg-green-500 text-white font-bold py-2 px-4 rounded hover:bg-green-600 transition">Lihat Data</a>
        </div>

        {{-- Card Profil Desa --}}
        <div class="bg-white p-6 rounded-lg shadow-lg transition transform hover:scale-105 hover:shadow-2xl">
            <svg class="w-16 h-16 mx-auto text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
            <h4 class="text-xl font-semibold mt-3">Profil Desa</h4>
            <p class="text-gray-600 mt-2">Jelajahi profil, sejarah, dan potensi Desa Sungai Meranti.</p>
            <a href="{{ route('profil') }}" class="mt-4 inline-block bg-cyan-500 text-white font-bold py-2 px-4 rounded hover:bg-cyan-600 transition">Kunjungi</a>
        </div>
    </div>
</div>
@endsection
