<!-- Footer -->
<footer class="mt-auto w-full px-4 py-10 sm:p-16 bg-[#040f39]">
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-20 mx-3 text-white">
        <div class="col-span-4 md:col-span-1 space-y-5">
            <img src="{{ asset('images/logo-bms.png') }}" class="h-10" alt="" />
            <h1 class="text-2xl font-semibold whitespace-nowrap">Desa Banteran</h1>
            <p class="text-gray-400">Desa Banteran merupakan salah satu desa besar yang terletak di kecamatan Sumbang, kabupaten Banyumas</p>  
        </div>
        <div class="col-span-4 md:col-span-1 space-y-5 text[#182126]">
            <h1 class="text-2xl">Peta Situs</h1>
            <div class="grid gap-4">
                <a href="{{ route('beranda') }}" class="text-gray-400 hover:text-white transition ease-in-out">Beranda</a>
                <a href="{{ route('layanan') }}" class="text-gray-400 hover:text-white transition ease-in-out">Layanan</a>
                <a href="{{ route('informasi') }}" class="text-gray-400 hover:text-white transition ease-in-out">Informasi</a>
                <a href="{{ route('profil') }}" class="text-gray-400 hover:text-white transition ease-in-out">Profil</a>
            </div>
        </div>
        <div class="col-span-4 md:col-span-1 space-y-5 text[#182126]">
            <h1 class="text-2xl">Layanan</h1>
            <div class="grid gap-4">
                <a href="{{ route('layanan') }}" class="text-gray-400 hover:text-white transition ease-in-out">Cek Penerima Bantuan</a>
                {{-- <a href="#" class="text-gray-400 hover:text-white transition ease-in-out">Vaksin Covid-19</a>
                <a href="#" class="text-gray-400 hover:text-white transition ease-in-out">Pembuatan KTP</a>
                <a href="#" class="text-gray-400 hover:text-white transition ease-in-out">Perubahan KK</a>
                <a href="#" class="text-gray-400 hover:text-white transition ease-in-out">Laporan Masyarakat</a> --}}
            </div>
        </div>
        <div class="col-span-4 md:col-span-1 space-y-5 text[#182126]">
            <h1 class="text-2xl">Kontak</h1>
            <div class="grid gap-4">
                <p>Email:</p>
                <a href="mailto:pemdesbanteransumbang@gmail.com" class="text-gray-400 hover:text-white transition ease-in-out">pemdesbanteransumbang@gmail.com</a>
                <p>No.HP/Whatsapp:</p>
                <a href="#" class="text-gray-400 hover:text-white transition ease-in-out">085877404557</a>
            </div>
        </div>
    </div>
</footer>