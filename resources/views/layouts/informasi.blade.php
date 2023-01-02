@extends('templates.master')

@section('content')
<div class="bg-white">
    <div class="py-3 px-3 sm:py-10 sm:px-16 w-full bg-white">
        <h1 class="text-xl sm:text-3xl mt-4 sm:mt-1 font-bold">Berita terkini</h1>
        <div class="w-24 h-0.5 bg-black mt-2"></div>
    
        {{-- list postingan berita --}}
        <div class="mt-8 grid grid-flow-row auto-rows-max md:grid-cols-2 lg:grid-cols-4 gap-2">
            <div class="w-full max-w-xl shadow-md rounded-lg">
                <div class="p-4 border border-gray-300 rounded-lg">
                    <div class="header-berita space-y-1">
                        <h2 class="text-xl font-bold">Judul Berita</h2>
                        <p class="author space-x-2 text-gray-400">
                            <span><i class="fa-solid fa-calendar"></i> 01-01-2023</span>
                            <span><i class="fa-solid fa-user"></i> Author</span>
                        </p>
                    </div>
    
                    <div class="gambar mt-5">
                        <img class="w-full sm:max-w-md h-auto rounded-md" 
                        src="{{ asset('images/foto-tugu.jpg') }}" alt="">
                    </div>
    
                    <div class="content mt-3 mb-5 mx-2 text-justify line-clamp-5">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </div>
                    <div class="mb-3">
                        <a href="#" class="py-3 px-6 block sm:inline text-center bg-blue-500 hover:bg-blue-600 text-white rounded-md">
                            Selengkapnya <i class="fa-solid fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-full max-w-xl shadow-md rounded-lg">
                <div class="p-4 border border-gray-300 rounded-lg">
                    <div class="header-berita space-y-1">
                        <h2 class="text-xl font-bold">Judul Berita</h2>
                        <p class="author space-x-2 text-gray-400">
                            <span><i class="fa-solid fa-calendar"></i> 01-01-2023</span>
                            <span><i class="fa-solid fa-user"></i> Author</span>
                        </p>
                    </div>
    
                    <div class="gambar mt-5">
                        <img class="w-full sm:max-w-md h-auto rounded-md" 
                        src="{{ asset('images/foto-tugu.jpg') }}" alt="">
                    </div>
    
                    <div class="content mt-3 mb-5 mx-2 text-justify line-clamp-5">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </div>
                    <div class="mb-3">
                        <a href="#" class="py-3 px-6 block sm:inline text-center bg-blue-500 hover:bg-blue-600 text-white rounded-md">
                            Selengkapnya <i class="fa-solid fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-full max-w-xl shadow-md rounded-lg">
                <div class="p-4 border border-gray-300 rounded-lg">
                    <div class="header-berita space-y-1">
                        <h2 class="text-xl font-bold">Judul Berita</h2>
                        <p class="author space-x-2 text-gray-400">
                            <span><i class="fa-solid fa-calendar"></i> 01-01-2023</span>
                            <span><i class="fa-solid fa-user"></i> Author</span>
                        </p>
                    </div>
    
                    <div class="gambar mt-5">
                        <img class="w-full sm:max-w-md h-auto rounded-md" 
                        src="{{ asset('images/foto-tugu.jpg') }}" alt="">
                    </div>
    
                    <div class="content mt-3 mb-5 mx-2 text-justify line-clamp-5">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </div>
                    <div class="mb-3">
                        <a href="#" class="py-3 px-6 block sm:inline text-center bg-blue-500 hover:bg-blue-600 text-white rounded-md">
                            Selengkapnya <i class="fa-solid fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-full max-w-xl shadow-md rounded-lg">
                <div class="p-4 border border-gray-300 rounded-lg">
                    <div class="header-berita space-y-1">
                        <h2 class="text-xl font-bold">Judul Berita</h2>
                        <p class="author space-x-2 text-gray-400">
                            <span><i class="fa-solid fa-calendar"></i> 01-01-2023</span>
                            <span><i class="fa-solid fa-user"></i> Author</span>
                        </p>
                    </div>
    
                    <div class="gambar mt-5">
                        <img class="w-full sm:max-w-md h-auto rounded-md" 
                        src="{{ asset('images/foto-tugu.jpg') }}" alt="">
                    </div>
    
                    <div class="content mt-3 mb-5 mx-2 text-justify line-clamp-5">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </div>
                    <div class="mb-3">
                        <a href="#" class="py-3 px-6 block sm:inline text-center bg-blue-500 hover:bg-blue-600 text-white rounded-md">
                            Selengkapnya <i class="fa-solid fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection