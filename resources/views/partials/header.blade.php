<header class="bg-[#0b2b4a] text-white shadow-lg fixed top-0 left-0 right-0 z-50">
    <div class="container mx-auto px-4">
        <div class="flex justify-center items-center h-20">
            <div class="flex items-center space-x-8">
                <a href="{{ url('/') }}" class="font-bold tracking-wider">
                    <img class="max-h-12 md:max-h-14 lg:max-h-16 h-auto w-auto align-top"
                         src="{{ asset('images/Outdura_ Outdura Fabrics/imgi_1_logo-outdura.png') }}"
                         alt="logo">
                </a>

                <nav class="hidden md:flex items-center space-x-8 text-sm font-semibold">
                    <a href="{{ url('outdura-fabrics') }}" class="hover:text-yellow-500">Outdura Fabrics</a>
                    <a href="{{ url('our-collections') }}" class="hover:text-yellow-500">Our Collections</a>
                    <a href="{{ url('design-selector') }}" class="hover:text-yellow-500">Design Selector</a>
                    <a href="{{ url('fabric-care') }}" class="hover:text-yellow-500">Fabric Care</a>
                    <a href="{{ url('blog') }}" class="hover:text-yellow-500">Blog</a>
                    <a href="{{ url('where-to-buy') }}" class="hover:text-yellow-500">Where to Buy</a>
                    <a href="{{ url('faq') }}" class="hover:text-yellow-500">FAQ</a>
                    <a href="{{ url('contact') }}" class="hover:text-yellow-500">Contact</a>
                </nav>
            </div>

            {{-- search + mobile menu --}}
            <div class="flex items-center space-x-4 ml-auto md:ml-8 lg:ml-14">
                <div class="relative">
                    <button id="search-toggle" class="bg-yellow-500 p-3 rounded-md hover:bg-yellow-600">
                        <i class="fa fa-search text-gray-800"></i>
                    </button>
                    <div id="search-bar" class="hidden absolute right-0 top-full mt-3 z-10">
                        <input type="search" placeholder="Search..."
                               class="w-64 p-3 text-gray-900 border-2 border-yellow-500 rounded-lg shadow-lg">
                    </div>
                </div>

                <button id="menu-toggle" class="md:hidden bg-yellow-500 p-3 rounded-md hover:bg-yellow-600">
                    <i class="fa fa-bars text-gray-800"></i>
                </button>
            </div>
        </div>
    </div>

    {{-- mobile nav --}}
    <div id="mobile-menu" class="hidden md:hidden bg-[#3c5a7d] text-left">
        <nav class="flex flex-col">
            <a href="{{ url('outdura-fabrics') }}" class="px-6 py-3 border-b border-gray-600">Outdura Fabrics</a>
            <a href="{{ url('our-collections') }}" class="px-6 py-3 border-b border-gray-600">Our Collections</a>
            <a href="{{ url('design-selector') }}" class="px-6 py-3 border-b border-gray-600">Design Selector</a>
            <a href="{{ url('fabric-care') }}" class="px-6 py-3 border-b border-gray-600">Fabric Care</a>
            <a href="{{ url('blog') }}" class="px-6 py-3 border-b border-gray-600">Blog</a>
            <a href="{{ url('where-to-buy') }}" class="px-6 py-3 border-b border-gray-600">Where to Buy</a>
            <a href="{{ url('faq') }}" class="px-6 py-3 border-b border-gray-600">FAQ</a>
            <a href="{{ url('contact') }}" class="px-6 py-3">Contact</a>
        </nav>
    </div>
</header>
    