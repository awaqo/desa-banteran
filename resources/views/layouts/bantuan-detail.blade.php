@extends('templates.master')

@section('content')
    <div class="flex flex-col justify-center items-center">
        {{-- modal --}}
        <div id="cekBantuan" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
            class="fixed top-4 left-4 right-4 z-50 hidden overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
            <div class="relative w-full h-full max-w-lg md:h-auto">
                <div class="relative bg-white rounded-lg shadow">
                    <div class="px-4 sm:px-10 pb-5">
                        <form class="w-full mt-5" action="{{ route('cek-bantuan') }}" method="POST"
                            enctype="multipart/form-data">
                            {{-- data diri --}}
                            @csrf
                            <div class="mb-6">
                                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama
                                    Lengkap</label>
                                <input type="text" name="nama" id="nama"
                                    class="bg-gray-100 border border-gray-400 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                                    required>
                            </div>
                            <div>
                                <label for="nik" class="block mb-2 text-sm font-medium text-gray-900 ">Nomor Induk
                                    Kependudukan (NIK)</label>
                                <input type="number" min="16" name="nik" id="nik"
                                    class="bg-gray-100 border border-gray-400 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                                    required>
                            </div>

                            <button type="submit"
                                class="my-6 text-white bg-green-600 hover:bg-green-700 transition duration-300 ease-in-out focus:ring-1 focus:outline-none focus:ring-green-500 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center">Cek
                                Bantuan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- data penerima bantuan --}}
        <div class="w-full sm:max-w-5xl my-0 sm:my-10 bg-white rounded-xl shadow-lg p-5 sm:p-8">
            <h1 class="text-2xl sm:text-3xl text-center py-4 font-bold border-b border-green-600">Detail Penerima Bantuan
            </h1>

            <p class="block sm:hidden mt-5 font-normal text-sm italic"><span class="text-red-500">** </span>Geser kanan
                untuk melihat isi lengkap tabel</p>
            <div class="mb-8 mt-3 sm:my-8 overflow-x-auto relative sm:rounded-lg">
                <div class="text-gray-500 text-xl">
                    <h1><span class="font-bold">Nama Lengkap:</span> {{ $dataBantuan[0]->nama }}</h1>
                    <h1><span class="font-bold">NIK:</span> {{ $dataBantuan[0]->nik }}</h1>
                    <h1><span class="font-bold">Alamat:</span> {{ $dataBantuan[0]->alamat }}</h1>
                    <h1><span class="font-bold">Jenis Bantuan:</span> {{ $dataBantuan[0]->jenis_bantuan }}</h1>
                    <h1><span class="font-bold">Nominal:</span> {{ $dataBantuan[0]->nominal }}</h1>
                </div>
            </div>
        </div>
    </div>
@endsection
