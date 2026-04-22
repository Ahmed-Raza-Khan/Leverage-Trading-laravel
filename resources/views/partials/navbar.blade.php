<nav class="bg-nav-gray border-b border-[#2C3E5033] sticky top-0 z-50">
    <div class="max-w-[95%] mx-auto px-4 sm:px-6 lg:px-8 py-4">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <div class="flex items-center justify-center w-40 h-15">
                    <a href="{{ url('/dashboard') }}">
                        <img src="assets/images/logo-header-footer.png" alt="logo">
                    </a>
                </div>
            </div>

            <div class="hidden md:flex items-center space-x-5 text-[13px] font-bold text-[#000000] uppercase tracking-wider">
                <a href="{{ url('/dashboard') }}" class="hover:text-gray-600 transition duration-150">HOME</a>
                <div class="relative group">
                    <button class="flex items-center space-x-1 hover:text-gray-600 transition duration-150 focus:outline-none">
                        <span>CALCULATORS</span>
                        <img src="{{ asset('assets/images/dropdown-arrow-down.svg') }}" alt="arrow">
                    </button>
                    <div class="absolute left-0 mt-2 w-48 bg-white border border-gray-100 rounded-md shadow-lg opacity-0 group-hover:opacity-100 group-hover:visible invisible transition-all duration-300 z-10">
                        <div class="py-1">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Forex Calculator</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Margin Calculator</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profit Calculator</a>
                        </div>
                    </div>
                </div>
                <div class="relative group">
                    <button class="flex items-center space-x-1 hover:text-gray-600 transition duration-150 focus:outline-none">
                        <span>GUIDES</span>
                        <img src="{{ asset('assets/images/dropdown-arrow-down.svg') }}" alt="arrow">
                    </button>
                    <div class="absolute left-0 mt-2 w-48 bg-white border border-gray-100 rounded-md shadow-lg opacity-0 group-hover:opacity-100 group-hover:visible invisible transition-all duration-300 z-10">
                        <div class="py-1">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Trading Guides</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Platform Guides</a>
                        </div>
                    </div>
                </div>
                <div class="relative group">
                    <button class="flex items-center space-x-1 hover:text-gray-600 transition duration-150 focus:outline-none">
                        <span>EDUCATION</span>
                        <img src="{{ asset('assets/images/dropdown-arrow-down.svg') }}" alt="arrow">
                    </button>
                    <div class="absolute left-0 mt-2 w-48 bg-white border border-gray-100 rounded-md shadow-lg opacity-0 group-hover:opacity-100 group-hover:visible invisible transition-all duration-300 z-10">
                        <div class="py-1">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Webinars</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Articles</a>
                        </div>
                    </div>
                </div>

                <a href="#" class="hover:text-gray-600 transition duration-150 whitespace-nowrap">LEVERAGE INSIGHTS</a>                       
                <a href="#" class="hover:text-gray-600 transition duration-150">ABOUT</a>
                <a href="#" class="hover:text-gray-600 transition duration-150">MEDIA</a>
            </div>
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-button" class="text-black hover:text-gray-600 focus:outline-none">
                    <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div id="mobile-menu" class="hidden md:hidden bg-nav-gray border-t border-gray-200">
        <div class="px-4 pt-2 pb-4 space-y-2 text-black uppercase font-bold text-sm">
            <a href="/dashboard" class="block py-2 hover:text-gray-600">HOME</a>
            <a href="#" class="block py-2 hover:text-gray-600">CALCULATORS</a>
            <a href="#" class="block py-2 hover:text-gray-600">GUIDES</a>
            <a href="#" class="block py-2 hover:text-gray-600">EDUCATION</a>
            <a href="#" class="block py-2 hover:text-gray-600">LEVERAGE INSIGHTS</a>
            <a href="#" class="block py-2 hover:text-gray-600">ABOUT</a>
            <a href="#" class="block py-2 hover:text-gray-600">MEDIA</a>
            <a href="#" class="block mt-4 py-2 px-4 text-center bg-black text-white rounded-md">Login</a>
        </div>
    </div>
</nav>

    {{-- <div class="p-10 space-y-10">
        <h1 class="text-3xl font-extrabold text-gray-900">Leverage Trading Landing Page</h1>
        <p class="text-gray-600 max-w-2xl">This is a placeholder content section. The navbar above is sticky and will stay at the top of the viewport when you scroll down. Hover over 'CALCULATORS' to see the dropdown menu effect.</p>
        <div class="h-screen bg-gray-200 rounded-xl p-6">More content...</div>
        <div class="h-screen bg-gray-300 rounded-xl p-6">Even more content...</div>
    </div> --}}

<script src="assets/js/dashboard-mobile-button.js"></script>