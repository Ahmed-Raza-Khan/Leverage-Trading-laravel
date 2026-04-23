<html>
<head>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    @stack('styles')
    <title>@yield('title', 'Leverage Trading - Dashboard')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.umd.min.js"></script>
    <link rel="icon" type="image/x-icon" href="assets/images/logo-header-footer.png">
    <link rel="stylesheet" href="{{ asset('assets/css/leverage-dashboard.css') }}">
</head>

<body>
    <header>
        @include('partials.navbar')
    </header>

    <div class="m-10 bg-[#FFFFFF] shadow-lg border rounded-xl min-h-screen p-3">
        <div class="flex bg-[#FFFFFF] rounded-md m-4">
            @yield('content')

            {{-- @yield('coin-card-content') --}}
        </div>
    </div>

        
    @include('partials.footer')
    
    @stack('scripts')
</body>
</html>