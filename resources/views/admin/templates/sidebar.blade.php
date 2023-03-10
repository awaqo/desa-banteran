<aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
    <div class="flex gap-3 p-6">
        <img class="w-10 h-10" src="{{ asset('images/logo-bms.png') }}" alt="">
        <span class="text-white text-3xl font-semibold">Admin</span>
    </div>
    <nav class="text-white text-base font-semibold pt-3">
        <a href="{{ route('dashboard') }}" class="{{ (request()->is('admin/dashboard')) ? 'active-nav-link' : 'opacity-75' }} flex items-center hover:opacity-100 text-white py-4 pl-6 nav-item">
            <i class="fas fa-tachometer-alt mr-3"></i>
            Dashboard
        </a>
        <a href="{{ route('data_bantuan') }}" class="{{ (request()->is('admin/bantuan')) ? 'active-nav-link' : 'opacity-75' }} flex items-center text-white hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-file mr-3"></i>
            Data Bantuan
        </a>
        <a href="{{ route('berita') }}" class="{{ (request()->is('admin/berita')) ? 'active-nav-link' : 'opacity-75' }} flex items-center text-white hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fa-solid fa-newspaper mr-3"></i>
            Berita
        </a>
        <a href="{{ route('akun_admin') }}" class="{{ (request()->is('admin/akun')) ? 'active-nav-link' : 'opacity-75' }} flex items-center text-white hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fa-solid fa-user-shield mr-3"></i>
            Admin
        </a>
    </nav>

    <a href="{{ route('logout') }}" class="absolute w-full logout-btn bottom-0 text-white font-bold flex items-center justify-center py-4">
        <i class="fa-solid fa-right-from-bracket mr-3"></i>
        Logout
    </a>
</aside>