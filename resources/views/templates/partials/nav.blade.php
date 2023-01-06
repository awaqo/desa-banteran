<!-- Navbar -->
<nav class="bg-green-600 sticky top-0 w-full z-20 border-gray-200 px-4 sm:px-16 py-4 shadow-lg">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="{{ route('beranda') }}" class="flex items-center">
            <img src="{{ asset('images/logo-bms.png') }}" class="h-6 mr-3 sm:h-9" alt="Logo" />
            <div class="flex flex-col">
                <span class="text-xl font-bold whitespace-nowrap text-white">Banteran</span>
                <span class="text-base whitespace-nowrap text-white">Kab. Banyumas</span>
            </div>
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-white rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-green-600/25 focus:text-green-800" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="flex flex-col p-4 mt-4 bg-green-800/25 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-transparent">
                <li>
                    <a href="{{ route('beranda') }}" class="{{ ($title === "Beranda") ? 'md:bg-transparent bg-green-800 text-white font-bold' : 'text-green-200' }} block py-2 pl-3 pr-4 rounded md:border-0 md:hover:text-white md:p-0">
                        Beranda
                    </a>
                </li>
                <li>
                    <a href="{{ route('layanan') }}" class="{{ ($title === "Layanan") ? 'md:bg-transparent bg-green-800 text-white font-bold' : 'text-green-200' }} block py-2 pl-3 pr-4 rounded md:border-0 md:hover:text-white md:p-0">
                        Layanan
                    </a>
                </li>
                <li>
                    <a href="{{ route('informasi') }}" class="{{ ($title === "Informasi") ? 'md:bg-transparent bg-green-800 text-white font-bold' : 'text-green-200' }} block py-2 pl-3 pr-4 rounded md:border-0 md:hover:text-white md:p-0">
                        Informasi
                    </a>
                </li>
                <li>
                    <a href="{{ route('profil') }}" class="{{ ($title === "Profil") ? 'md:bg-transparent bg-green-800 text-white font-bold' : 'text-green-200' }} block py-2 pl-3 pr-4 rounded md:border-0 md:hover:text-white md:p-0">
                        Profil
                    </a>
                </li>
                {{-- <li>
                    <a href="#" class="{{ ($title === "Berita Desa") ? 'md:bg-transparent md:text-[#2EB5F8] bg-[#2EB5F8] text-white' : '' }} block py-2 pl-3 pr-4 text-gray-500 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#2EB5F8] md:p-0">
                        Berita Desa
                    </a>
                </li> --}}
                {{-- <li>
                    <a href="/" class="block py-2 pl-3 pr-4 text-gray-500 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#2EB5F8] md:p-0">
                        <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
                    </a>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>