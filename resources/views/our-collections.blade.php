@extends('layouts.app')
@section('title', 'Outdura: Our Collections')
@section('content')
    <section class="relative h-screen flex items-center text-white overflow-hidden">
        <video 
            id="hero-video"
            class="absolute z-0 w-full h-full object-cover" 
            src="{{ asset('videos/Design_Process_-_Our_Collections.mp4') }}" 
            autoplay 
            loop 
            muted 
            playsinline>
            Trình duyệt của bạn không hỗ trợ thẻ video.
        </video>
        <div class="relative z-20 w-full h-full flex flex-col justify-between p-8 sm:p-12 md:p-20">     
            <div class="max-w-3xl bg-black bg-opacity-30 py-9 px-7 md:p-9">
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold uppercase tracking-wide leading-none">
                    <div>Design-Friendly Fabric</div>
                </h1>
                <p class="mt-6 text-base md:text-lg max-w-xl">
                    We love bringing our inspiration into your backyard. Outdura's design collections are designed to celebrate the beauty in every little moment.                
                </p>
            </div>

            <button id="video-control-btn" 
                class="h-20 w-20 bg-white/80 hover:bg-white transition-colors text-black rounded-md 
                    focus:outline-none focus:ring-2 focus:ring-white 
                    flex items-center justify-center">

                <svg id="pause-icon" xmlns="http://www.w3.org/2000/svg" 
                    class="h-20 w-20"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 9v6m4-6v6" />
                </svg>

                <svg id="play-icon" xmlns="http://www.w3.org/2000/svg" 
                    class="h-20 w-20 hidden"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" 
                        d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                </svg>
            </button>
        </div>
    </section>

    <section class="py-12 px-8 lg:px-1 md:py-20">
        <div class="container mx-auto max-w-6xl">

            <div class="text-center max-w-3xl mx-auto mb-10 md:mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-[#1e293b] tracking-wider uppercase">
                    FABRICS BY USE
                </h2>
                <p class="mt-4 text-base text-gray-600">
                    Outdura fabrics enhance every aspect of outdoor living, from cushions, to accent pillows, to umbrellas.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12">

                <div class="group">
                    <div class="overflow-hidden rounded-xl shadow-xl shadow-gray-500">
                        <img src="{{ asset('images/Outdura_ Our Collections/imgi_3__Q4A1127.png') }}" 
                            alt="Upholstery" 
                            class="w-full h-auto object-cover aspect-video transition-transform duration-300 group-hover:scale-105">
                    </div>
                    <div class="mt-4">
                        <h3 class="text-xl font-semibold text-gray-800">Upholstery</h3>
                        <p class="mt-2 text-gray-600">
                            Easy-to-care for, fade resistant, water resistant, and woven to ensure long-lasting durability. Outdura fabrics are designed for comfortable, beautiful, outdoor living.
                        </p>
                    </div>
                </div>

                <div class="group">
                    <div class="overflow-hidden  rounded-xl shadow-xl shadow-gray-500">
                        <img src="{{ asset('images/Outdura_ Our Collections/imgi_4_csm_1713520_Simone_3-Piece_Seating_Set_Myra_Sky_01_V2_59437b9435.png') }}" 
                            alt="Shade" 
                            class="w-full h-auto object-cover aspect-video transition-transform duration-300 group-hover:scale-105">
                    </div>
                    <div class="mt-4">
                        <h3 class="text-xl font-semibold text-gray-800">Shade</h3>
                        <p class="mt-2 text-gray-600">
                            Outdura fabrics are ready to withstand hours of sun intensity without fading. Because Outdura fabric is 100% solution-dyed acrylic, every fiber is fully saturated with pigment - that's what makes them ideal for umbrellas.
                        </p>
                    </div>
                </div>

                <div class="group">
                    <div class="overflow-hidden rounded-xl shadow-xl shadow-gray-500">
                        <img src="{{ asset('images/Outdura_ Our Collections/imgi_5_SST-9582_Home_Location_Stills-2.png') }}" 
                            alt="Pillows" 
                            class="w-full h-auto object-cover aspect-video transition-transform duration-300 group-hover:scale-105">
                    </div>
                    <div class="mt-4">
                        <h3 class="text-xl font-semibold text-gray-800">Pillows</h3>
                        <p class="mt-2 text-gray-600">
                            Switch it up every season with pillows that add a little flair to your outdoor set. Resistant to water, fading and wear, pillows made with Outdura fabric look beautiful and last year after year.
                        </p>
                    </div>
                </div>

                <div class="group">
                    <div class="overflow-hidden rounded-xl shadow-xl shadow-gray-500">
                        <img src="{{ asset('images/Outdura_ Our Collections/imgi_6_AdobeStock_356397635.png') }}" 
                            alt="Contract/Commercial" 
                            class="w-full h-auto object-cover aspect-video transition-transform duration-300 group-hover:scale-105">
                    </div>
                    <div class="mt-4">
                        <h3 class="text-xl font-semibold text-gray-800">Contract/Commercial</h3>
                        <p class="mt-2 text-gray-600">
                            Outdura is engineered to be the most durable, resilient fabric on the market, making it the perfect solution for contract and hospitality applications.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="sofa-customizer-container" class="relative w-full max-w-6xl mx-auto my-8 px-8 lg:px-1">
        <div class="text-center py-12 px-4">
            <h1 class="text-4xl font-bold text-[#1e293b] tracking-wide">VIEW OUR COLLECTIONS</h1>
            <p class="mt-4 max-w-2xl mx-auto text-lg text-gray-600">
                Browse our beautiful collections and create your own designer looks with an assortment of jacquards, dobbies, stripes and solids.
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

    <section class="flex items-center justify-center mt-28 px-8 lg:px-1">
        <div 
            class="relative max-w-6xl bg-contain bg-center h-fit w-full rounded-xl shadow-xl" 
            style="background-image: url('{{ asset('images/Outdura_ Our Collections/imgi_7_csm_Coast2Coast_Presentation_Loop_5f5f512c82.png') }}');">

            <div class="absolute inset-0 bg-black opacity-40 rounded-xl"></div>

            <div class="relative h-full flex flex-col justify-center items-start text-white p-6 sm:p-12 md:p-24">
                
                <span class="text-yellow-400 font-semibold text-sm tracking-widest uppercase">
                Collections + Blog
                </span>

                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mt-2 leading-tight">
                FROM EAST TO WEST<br>BEYOND
                </h1>

                <p class="mt-4 max-w-md text-gray-200">
                The essence of our company and the presentation of the various regions in the USA.
                </p>

                <button class="mt-8 bg-orange-500 hover:bg-orange-600 text-white font-bold py-3 px-8 transition-colors duration-300">
                READ MORE
                </button>

            </div>

        </div>
    </section>

    <section class="py-16 md:py-24 px-8 lg:px-1">
        <div class="container mx-auto max-w-6xl">
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