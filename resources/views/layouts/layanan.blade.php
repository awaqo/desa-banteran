@extends('templates.master')

@section('content')
<div class="flex flex-col justify-center items-center">
    {{-- modal --}}
    <div id="cekBantuan" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-4 left-4 right-4 z-50 hidden overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full h-full max-w-lg md:h-auto">
            <div class="relative bg-white rounded-lg shadow">
                <div class="flex items-start justify-between p-4 border-b rounded-t">
                    <h3 class="pt-0 pl-0 sm:pt-4 sm:pl-4 text-xl font-semibold text-indigo-900">
                        Cek Penerima Bantuan
                    </h3>
                    <button type="button" class="absolute top-3 right-2.5 text-indigo-400 bg-transparent hover:bg-indigo-200 hover:text-indigo-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="cekBantuan">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>

                <div class="px-4 sm:px-10 pb-5">
                    <form class="w-full mt-5" action="#" method="POST" enctype="multipart/form-data">
                        {{-- data diri --}}
                        @csrf
                        <div class="mb-6">
                            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama Lengkap</label>
                            <input type="text" name="nama" id="nama" class="bg-gray-100 border border-gray-400 text-gray-900 text-sm rounded-lg block w-full p-2.5" required>
                        </div>
                        <div>
                            <label for="nik" class="block mb-2 text-sm font-medium text-gray-900 ">Nomor Induk Kependudukan (NIK)</label>
                            <input type="number" min="16" name="nik" id="nik" class="bg-gray-100 border border-gray-400 text-gray-900 text-sm rounded-lg block w-full p-2.5" required>
                        </div>
                        
                        <button type="submit" class="my-6 text-white bg-green-600 hover:bg-green-700 transition duration-300 ease-in-out focus:ring-1 focus:outline-none focus:ring-green-500 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center">Cek Bantuan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="mt-10 mb-5 w-full sm:max-w-5xl flex justify-end">
        <button data-modal-target="cekBantuan" data-modal-toggle="cekBantuan" type="button" class="py-3 px-5 mx-auto md:mx-4 lg:mx-0 rounded-md w-full max-w-xs text-white bg-emerald-500 hover:bg-emerald-600">
            <i class="fa-solid fa-search mr-1"></i> Cek Bantuan
        </button>
    </div>
    {{-- data penerima bantuan --}}
    <div class="w-full sm:max-w-5xl my-0 sm:mb-10 bg-white rounded-xl shadow-lg p-5 sm:p-8">
        <h1 class="text-2xl sm:text-3xl text-center py-4 font-bold border-b border-green-600">Data Penerima Bantuan</h1>
        
        <p class="block sm:hidden mt-5 font-normal text-sm italic"><span class="text-red-500">** </span>Geser kanan untuk melihat isi lengkap tabel</p>
        <div class="mb-8 mt-3 sm:my-8 overflow-x-auto relative shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-white uppercase bg-indigo-400">
                    <tr class="divide-x divide-y">
                        <th scope="col" class="py-3 px-6">
                            NO
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Nama
                        </th>
                        <th scope="col" class="py-3 px-6">
                            NIK
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Alamat
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Nominal
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y">
                    @if ($dataBantuan->count() < 1)
                        <tr>
                            <td colspan="5" class="py-4 px-6 text-center text-lg">Belum ada data penerima bantuan</td>
                        </tr>
                    @else  
                        @php $i=1 @endphp
                        @foreach ($dataBantuan as $d)
                            <tr class="divide-x">
                                <td class="w-16 py-4 px-6 text-center font-normal text-gray-900 whitespace-nowrap">
                                    {{ $i++ }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $d->nama }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $d->nik }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $d->alamat }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $d->nominal }}
                                </td>
                            </tr>
                        @endforeach    
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection