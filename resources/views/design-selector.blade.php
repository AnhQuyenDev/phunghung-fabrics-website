@extends('layouts.app')

@section('title', 'Outdura: Design Selector')

@section('content')
    <section id="sofa-customizer-container" class="relative w-full max-w-7xl mx-auto my-8 px-8 lg:px-1">
        <div class="text-center py-12 px-4">
            <h1 class="text-4xl font-bold text-orange-500 tracking-wide">EVERY FABRIC AT YOUR FINGERTIPS</h1>
            <p class="mt-4 max-w-2xl mx-auto text-lg text-gray-600">
                Explore what’s possible with Outdura fabrics through our Design Selector,
                visualize familiar favorites and discover our newest collections.
            </p>
        </div>
        <canvas id="bg-canvas" class="w-full h-auto aspect-video rounded-lg shadow-lg"></canvas>
        <div class="absolute bottom-4 left-1/2 -translate-x-1/2 z-10">
            <div class="relative font-sans">
                <div class="flex gap-3 p-2 bg-white/90 backdrop-blur-md rounded-xl shadow-lg">
                    <div id="pillow-selector" class="flex items-center gap-2 py-2 px-3 bg-white border-2 border-transparent rounded-lg shadow-sm cursor-pointer transition-all duration-200 ease-in-out hover:shadow-md">
                        <img src="{{ asset('images/Outdura_ Our Collections/Pikto Kissen.e0a9a80d0304eb153255.png') }}" class="w-6 h-6">
                        <div id="pillow-swatch" class="w-20 h-8 bg-gray-100 border border-gray-200 rounded-md bg-cover bg-center transition-all"></div>
                    </div>
                    <div id="sofa-selector" class="flex items-center gap-2 py-2 px-3 bg-white border-2 border-transparent rounded-lg shadow-sm cursor-pointer transition-all duration-200 ease-in-out hover:shadow-md">
                        <img src="{{ asset('images/Outdura_ Our Collections/sofaicon.png') }}" class="w-6 h-6">
                        <div id="sofa-swatch" class="w-20 h-8 bg-gray-100 border border-gray-200 rounded-md bg-cover bg-center transition-all"></div>
                    </div>
                </div>
                <div id="sofa-palette" class="absolute bottom-full mb-2.5 left-1/2 -translate-x-1/2 w-80 p-3 bg-white rounded-lg shadow-xl z-10 hidden">
                    <div class="grid grid-cols-6 gap-2.5">
                    </div>
                    <div class="mt-4 pt-3 border-t flex justify-between items-center text-sm">
                        <button id="sofa-prev-btn" class="hover:text-black text-gray-500">&lt; Previous</button>
                        <span id="sofa-page-info" class="text-gray-600 font-semibold"></span>
                        <button id="sofa-next-btn" class="hover:text-black text-gray-500">Next &gt;</button>
                    </div>
                </div>
                <div id="pillow-palette" class="absolute bottom-full mb-2.5 left-1/2 -translate-x-1/2 w-80 p-3 bg-white rounded-lg shadow-xl z-10 hidden">
                    <div class="grid grid-cols-6 gap-2.5">
                    </div>
                    <div class="mt-4 pt-3 border-t flex justify-between items-center text-sm">
                        <button id="pillow-prev-btn" class="hover:text-black text-gray-500">&lt; Previous</button>
                        <span id="pillow-page-info" class="text-gray-600 font-semibold"></span>
                        <button id="pillow-next-btn" class="hover:text-black text-gray-500">Next &gt;</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-16 sm:py-24">
        <div class="container mx-auto max-w-7xl px-4">

            <div class="text-center max-w-3xl mx-auto">
                <h2 class="text-3xl font-bold uppercase tracking-wider text-orange-500">
                    The Outdura Difference
                </h2>
                <p class="mt-4 text-lg text-gray-600">
                    Our fabric is woven to last, ensuring durability for every moment and whatever life has in store.
                </p>
            </div>

            <div class="mt-16 grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-7 lg:gap-8">

                <div class="h-full flex flex-col items-center justify-center text-center bg-[#1e293b] text-white p-4 rounded-lg aspect-square">
                    <img src="{{ asset('images/Outdura_ Outdura Fabrics/imgi_2_Icon_100-SDA.png') }}" class="h-16 w-16 mb-4">
                    <h3 class="font-semibold">100% Solution-Dyed Acrylic</h3>
                </div>

                <div class="h-full flex flex-col items-center justify-center text-center bg-[#1e293b] text-white p-4 rounded-lg aspect-square">
                    <img src="{{ asset('images/Outdura_ Outdura Fabrics/imgi_3_Icon_Superior-Fade-Water-Stain-Resistance.png') }}" class="h-16 w-16 mb-4">
                    <h3 class="font-semibold">Fade, Water and Stain Resistance</h3>
                </div>

                <div class="h-full flex flex-col items-center justify-center text-center bg-[#1e293b] text-white p-6 rounded-lg aspect-square">
                    <img src="{{ asset('images/Outdura_ Outdura Fabrics/imgi_4_Icon_Better-Softer-Feel.png') }}" class="h-16 w-16 mb-4">
                    <h3 class="font-semibold">Better, Softer Feel</h3>
                </div>

                <div class="h-full flex flex-col items-center justify-center text-center bg-[#1e293b] text-white p-6 rounded-lg aspect-square">
                    <img src="{{ asset('images/Outdura_ Outdura Fabrics/imgi_5_Icon_Superior-Wear-Resistance.png') }}" class="h-16 w-16 mb-4">
                    <h3 class="font-semibold">Superior Wear Resistance</h3>
                </div>

                <div class="h-full flex flex-col items-center justify-center text-center bg-[#1e293b] text-white p-6 rounded-lg aspect-square">
                    <img src="{{ asset('images/Outdura_ Outdura Fabrics/imgi_6_Icon_Superior-Cleanability.png') }}" class="h-16 w-16 mb-4">
                    <h3 class="font-semibold">Superior Cleanability</h3>
                </div>

                <div class="h-full flex flex-col items-center justify-center text-center bg-[#1e293b] text-white p-6 rounded-lg aspect-square">
                    <img src="{{ asset('images/Outdura_ Fabric Care/imgi_10_Icon_10-Year-Promise.png') }}" class="h-16 w-16 mb-4">
                    <h3 class="font-semibold">10-Year Promise</h3>
                </div>

                <div class="h-full flex flex-col items-center justify-center text-center bg-[#1e293b] text-white p-6 rounded-lg aspect-square">
                    <img src="{{ asset('images/Outdura_ Outdura Fabrics/imgi_8_Icon_PFAS-Free.png') }}" class="h-16 w-16 mb-4">
                    <h3 class="font-semibold">PFAS-Free Fabrics</h3>
                </div>
                
            </div>
        </div>
    </section>

    <section class="py-16 md:py-24 px-8 lg:px-1">
        <div class="container mx-auto max-w-7xl">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <a href="#" class="group bg-gray-100 p-8 md:p-12 text-center rounded-lg transition-transform duration-300 ease-in-out hover:-translate-y-2 flex flex-col">
                    <div>
                        <h3 class="text-2xl font-bold text-[#0b2b4a] uppercase tracking-wider mb-4">
                            Where to buy Outdura Fabrics
                        </h3>
                        <p class="text-gray-600 mb-8">
                            Find select retailers who offer Outdura Fabric options for their furniture collections.
                        </p>
                    </div>
                    <span class="inline-block bg-[#E9842B] text-white font-bold py-3 px-8 rounded transition-colors duration-300 group-hover:bg-orange-500 mt-auto">
                        SHOW ME
                    </span>
                </a>

                <a href="#" class="group bg-gray-100 p-8 md:p-12 text-center rounded-lg transition-transform duration-300 ease-in-out hover:-translate-y-2 flex flex-col">
                    <div>
                        <h3 class="text-2xl font-bold text-[#0b2b4a] uppercase tracking-wider mb-4">
                            Here for you
                        </h3>
                        <p class="text-gray-600 mb-8">
                            We're here to answer any questions and receive any feedback you may have.
                        </p>
                    </div>
                    <span class="inline-block bg-[#E9842B] text-white font-bold py-3 px-8 rounded transition-colors duration-300 group-hover:bg-orange-500 mt-auto">
                        CONTACT US
                    </span>
                </a>
            </div>
        </div>
    </section>

    
@endsection
