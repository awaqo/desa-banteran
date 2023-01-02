@extends('templates.master')

@section('content')
<div class="flex justify-center items-center">
    {{-- form container --}}
    <div class="w-full sm:max-w-5xl my-0 sm:my-10 bg-white rounded-xl shadow-lg p-5 sm:p-8 flex flex-col items-center">
        <h1 class="text-2xl sm:text-3xl text-center mt-3 font-bold uppercase">Form Pengecekan Penerima Bantuan</h1>
        <div class="h-1 w-24 mt-6 bg-[#2EB5F8]"></div>

        <form class="w-full mt-10" action="#" method="POST" enctype="multipart/form-data">
            {{-- data diri --}}
            @csrf
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#2EB5F8] focus:border-[#2EB5F8] block w-full p-2.5" required>
                </div>
                <div>
                    <label for="nik" class="block mb-2 text-sm font-medium text-gray-900 ">Nomor Induk Kependudukan (NIK)</label>
                    <input type="number" min="16" name="nik" id="nik" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#2EB5F8] focus:border-[#2EB5F8] block w-full p-2.5" required>
                </div>
                <div>
                    <label for="no_hp" class="block mb-2 text-sm font-medium text-gray-900 ">Nomor Handphone</label>
                    <input type="text" name="no_hp" id="no_hp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#2EB5F8] focus:border-[#2EB5F8] block w-full p-2.5" required>
                </div>  
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Alamat Email</label>
                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#2EB5F8] focus:border-[#2EB5F8] block w-full p-2.5">
                </div>
            </div>
            
            <button type="submit" class="my-6 text-white bg-[#2EB5F8] hover:bg-[#009AE7] transition duration-300 ease-in-out focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center">Cek Bantuan</button>
        </form>
    </div>
</div>
@endsection