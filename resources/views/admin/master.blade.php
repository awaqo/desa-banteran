<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Desa Banteran</title>
    <link rel="shortcut icon" href="{{ asset('images/logo-bms.png') }}" type="image/x-icon">

    @include('templates.partials.styles')

    <style>
        .bg-sidebar { background: #040f39; }
        .cta-btn { color: #2563eb; }
        .logout-btn { background: #040f39; }
        .logout-btn:hover { background: #7666f026; }
        .active-nav-link { background: #7566f0; border-left-width: 4px; border-color: white; }
        .nav-item:hover { background: #7666f026; }
        .account-link:hover { background: #2563eb; }
    </style>
</head>
<body class="bg-slate-100 flex">
    @include('admin.templates.sidebar')

    <div class="w-full flex flex-col h-screen overflow-y-hidden">
        <!-- Desktop Header -->
        @include('admin.templates.header')

        <!-- Mobile Header & Nav -->
        @include('admin.templates.mobile_header')
        
        {{-- Content --}}
        <div class="w-full overflow-x-hidden border-t flex flex-col">
            <main class="h-full pb-16 overflow-y-auto">
                @yield('content-admin')
            </main>
        </div>
        
    </div>

    @include('templates.partials.scripts')

    @yield('script')

</body>
</html>