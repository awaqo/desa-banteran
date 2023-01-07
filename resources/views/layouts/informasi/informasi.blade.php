@extends('templates.master')

@section('content')
<div>
    <div class="py-3 px-3 sm:py-10 sm:px-16 w-full">
        <h1 class="text-xl sm:text-3xl mt-4 sm:mt-1 font-bold">Berita terkini</h1>
        <div class="w-24 h-0.5 bg-black mt-2"></div>

        {{-- pagination --}}
        <div class="my-5">
            {{ $dataBerita->links() }}
        </div>
    
        {{-- list postingan berita --}}
        @if ($dataBerita->count() < 1)
            <div class="m-5 text-center mt-10 text-xl font-normal">
                Belum ada postingan berita
            </div>
        @else
            <div class="mt-8 grid grid-flow-row auto-rows-max md:grid-cols-2 lg:grid-cols-4 gap-4">
                @foreach ($dataBerita as $d)
                <div class="w-full max-w-xl bg-white shadow-lg rounded-lg">
                    <div class="p-4 rounded-lg">
                        <div class="header-berita space-y-1">
                            <h2 class="text-xl font-bold">{{ $d->judul }}</h2>
                            <p class="author space-x-2 text-gray-400 truncate">
                                <span><i class="fa-solid fa-calendar"></i> {{ $d->created_at->format('d M Y') }}</span>
                                <span><i class="fa-solid fa-user"></i> {{ $d->author }}</span>
                            </p>
                        </div>
        
                        <div class="gambar mt-5">
                            <img class="w-full sm:max-w-md h-auto rounded-md" 
                            src="{{ asset('berita/'.$d->gambar) }}" alt="">
                        </div>
        
                        <div class="content mt-3 mb-5 mx-2 text-justify line-clamp-5">
                            {!! $d->konten !!}
                        </div>
                        <div class="mb-3">
                            <a href="{{ url('informasi/berita/'.$d->slug) }}" class="py-2 px-6 block sm:inline text-center font-medium bg-green-200 hover:bg-green-400 text-green-900 rounded-xl transition ease-in-out">
                                Selengkapnya <i class="fa-solid fa-chevron-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        @endif

        {{-- pagination --}}
        <div class="my-5">
            {{ $dataBerita->links() }}
        </div>
    </div>
</div>
@endsection