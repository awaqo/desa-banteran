@extends('admin.master')

@section('content-admin')
<div class="p-8">
    {{-- modal --}}
    <div id="importModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full h-full max-w-md md:h-auto">
            <div class="relative bg-white rounded-lg shadow">
                <div class="flex items-start justify-between p-4 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-indigo-900">
                        Import Data Penerima Bantuan
                    </h3>
                    <button type="button" class="absolute top-3 right-2.5 text-indigo-400 bg-transparent hover:bg-indigo-200 hover:text-indigo-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="importModal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <form action="bantuan/import-data" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="space-y-2 p-6">
                        <label for="file" class="font-medium">Pilih file Excel</label>
                        <input type="file" name="file" id="file" required
                        class="block w-full text-sm border border-gray-300 rounded-md cursor-pointer bg-gray-50 text-gray-400 focus:outline-none">
                    </div>
                    
                    <div class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b">
                        <button data-modal-toggle="importModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-1 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Batal</button>
                        <button type="submit" class="text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-1 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Import</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <h1 class="text-2xl font-medium text-black pb-6">Data Penerima Bantuan</h1>

    {{-- alert data --}}
    @if ($message = Session::get('success'))
        <div id="alert-success" class="flex p-4 mb-4 mx-3 bg-green-100 rounded-lg" role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-green-700" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-base text-green-700">
                {{ $message }}
            </div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8" data-dismiss-target="#alert-success" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
    @endif

    {{-- Tambah data --}}
    <div class="my-4 mb-6">
        <button data-modal-target="importModal" data-modal-toggle="importModal" type="button" class="py-3 px-5 rounded-md text-white bg-emerald-500 hover:bg-emerald-600">
            <i class="fa-solid fa-plus mr-1"></i> Import data
        </button>
    </div>

    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-white uppercase bg-indigo-500">
                <tr class="divide-x divide-y">
                    <th scope="col" class="w-16 py-3 px-6">
                        ID
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Nama
                    </th>
                    <th scope="col" class="w-52 py-3 px-6">
                        NIK
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Alamat
                    </th>
                    <th scope="col" class="w-40 py-3 px-6">
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

    {{-- tooltip action button --}}
    <div id="tooltip-open" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 shadow-sm opacity-0 tooltip">
        Edit akun
        <div class="tooltip-arrow" data-popper-arrow></div>
    </div>
    <div id="tooltip-delete" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 shadow-sm opacity-0 tooltip">
        Hapus akun
        <div class="tooltip-arrow" data-popper-arrow></div>
    </div>
</div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.deleteBtn', function (e) {
                e.preventDefault();

                var d_id = $(this).val();
                $('#delete_id').val(d_id);

                $('#importModal').modal('show');
            });
        })
    </script>
@endsection