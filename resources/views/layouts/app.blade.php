<html>
<head>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    @stack('styles')
    <title>@yield('title', 'Leverage Trading - Dashboard')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="icon" type="image/x-icon" href="assets/images/logo-header-footer.png">
    <link rel="stylesheet" href="{{ asset('assets/css/leverage-dashboard.css') }}">
</head>

<body>
    <header>
        @include('partials.navbar')
    </header>

    {{-- <div class="pt-25 flex min-h-screen bg-[#F8F9FA]"> --}}
        {{-- @include('partials.sidebar') --}}
        @yield('content')
    {{-- </div> --}}
    
        @include('partials.footer')
    @stack('scripts')
</body>
</html>