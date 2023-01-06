@extends('templates.master')

@section('content')
    <!-- Kenali -->
    <div class="bg-cover bg-center h-screen w-full" style="background-image: url('{{ asset('images/foto-tugu.jpg') }}');">
        <div class="flex flex-col gap-y-9 text-white max-w-2xl mx-3 sm:mx-32 mt-20">
            <div class="mt-10">
                <h1 class="font-bold sm:text-5xl text-4xl drop-shadow-md tracking-wide">Pengecekan data penerima bantuan</h1>
            </div>
            <div class="max-w-md text-xl mx-3">
                <p>Kini masyarakat dapat dengan mudah mengecek data penerima bantuan dimanapun dan kapanpun</p>
            </div>
            <a href="{{ route('layanan') }}" class="max-w-fit px-8 py-5 font-bold uppercase bg-green-600 hover:bg-green-700 transition duration-300 ease-in-out rounded-full">
                Cek Penerima Bantuan
            </a>
        </div>
    </div>

    <!-- Selamat Datang -->
    <div class="flex flex-col gap-y-4 text-center items-center mt-16">
        <h1 class="text-3xl mx-6 font-bold">Selamat Datang di Desa Banteran</h1>
        <p class="text-lg mx-6 max-w-xl text-gray-400">Pemerintah Desa Banteran berkomitmen penuh melayani masyarakat. Sebagai Desa mandiri, Desa Banteran terus bertumbuh bersama dengan masyarakat Desa.</p>
    </div>

    <!-- Menu Website -->
    <div class="md:flex md:items-center md:justify-evenly mt-24 mb-24 mx-8">
        <a href="{{ route('profil') }}" class="group max-w-full lg:max-w-xs p-6 rounded-xl sm:bg-white sm:hover:bg-[#f1f5ff] transition duration-300 ease-in-out">
            <div class="flex flex-row lg:items-center sm:justify-center items-center gap-x-8 mb-4">
                <img class="h-14 group-hover:rotate-45 transition duration-300 ease-in-out" src="{{ asset('images/circle-progress.png') }}" alt="">
                <h5 class="text-xl font-medium text-green-900">Profil</h5>
            </div>
            <p class="font-normal text-green-700 text-center">Desa kami adalah Desa yang menjunjung tinggi kearifan lokal dalam bermasyarakat dan bernegara</p>
        </a>

        <div class="hidden md:block w-0.5 h-56 bg-green-600"></div>

        <a href="{{ route('layanan') }}" class="group max-w-full lg:max-w-xs p-6 rounded-xl sm:bg-white sm:hover:bg-[#f1f5ff] transition duration-300 ease-in-out">
            <div class="flex flex-row lg:items-center sm:justify-center items-center gap-x-8 mb-4">
                <img class="h-14 group-hover:rotate-45 transition duration-300 ease-in-out" src="{{ asset('images/circle-progress.png') }}" alt="">
                <h5 class="text-xl font-medium text-green-900">Layanan</h5>
            </div>
            <p class="font-normal text-green-700 text-center">Pemerintah Desa selalu berusaha memberikan layanan publik secara prima kepada masyarakat.</p>
        </a>

        <div class="hidden md:block w-0.5 h-56 bg-green-600"></div>

        <a href="#" class="group max-w-full lg:max-w-xs p-6 rounded-xl sm:bg-white sm:hover:bg-[#f1f5ff] transition duration-300 ease-in-out">
            <div class="flex flex-row lg:items-center sm:justify-center items-center gap-x-8 mb-4">
                <img class="h-14 group-hover:rotate-45 transition duration-300 ease-in-out" src="{{ asset('images/circle-progress.png') }}" alt="">
                <h5 class="text-xl font-medium text-green-900">Informasi</h5>
            </div>
            <p class="font-normal text-green-700 text-center">Pemerintah Desa  menyebarkan informasi  secara merata kepada masyarakat.</p>
        </a>
    </div>
    
    <!-- Kabar -->
    {{-- <div class="max-w-full mx-4 sm:mx-16 mt-24 mb-24">
        <h1 class="font-bold text-3xl text-center">Kabar Desa</h1>

        <!-- Recent Post -->
        <div class="mt-8 w-full sm:flex sm:justify-between space-y-5 sm:space-y-0">
            <div class="max-w-sm mx-auto bg-white border border-gray-200 rounded-lg shadow-md">
                <a href="#">
                    <img class="rounded-t-lg" src="" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">as</h5>
                    </a>
                    <div class="mb-3 font-normal text-gray-700 line-clamp-3">as</div>
                    <div class="mb-1 font-normal text-gray-400">
                        <i class="fa-solid fa-calendar mr-2"></i>
                    </div>
                    <div class="mb-3 font-normal text-gray-400">
                        <i class="fa-solid fa-user mr-2"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

@endsection
