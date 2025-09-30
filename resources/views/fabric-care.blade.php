@extends('layouts.app')

@section('title', 'Outdura: Fabric care')

@section('content')
    <section class="relative h-[80vh] flex items-center text-white overflow-hidden">
        <video 
            id="hero-video"
            class="absolute z-0 w-full h-full object-cover" 
            src="{{ asset('videos/Pillows_-_Fabric_Care.mp4') }}" 
            autoplay 
            loop 
            muted 
            playsinline>
            Trình duyệt của bạn không hỗ trợ thẻ video.
        </video>
        
        <div class="relative z-20 w-full h-full py-8 sm:py-12 md:p-20"> 
            
            <div class="container mx-auto px-4 h-full flex flex-col items-start justify-between">
                
                <div class="max-w-3xl bg-black bg-opacity-30 py-9 px-7 xl:mx-56 md:p-9">
                    <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold uppercase tracking-wide leading-none">
                        <div>woven for every moment</div>
                    </h1>
                    <p class="mt-6 text-base md:text-lg max-w-xl">
                        Our fabrics are not only woven to last, they're also easy to care for. Whatever life has in store, let us show you how to care for your outdoor fabrics.
                    </p>
                </div>

                <button id="video-control-btn" 
                        class="h-20 w-20 xl:mx-56 bg-white/80 hover:bg-white transition-colors text-black rounded-md 
                               focus:outline-none focus:ring-2 focus:ring-white 
                               flex items-center justify-center">

                    <svg id="pause-icon" xmlns="http://www.w.org/2000/svg" 
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
        </div>

    </section>

    <section class="bg-[#E9842B] py-16 sm:py-24">
        <div class="container mx-auto max-w-6xl px-4">

            <div class="text-center max-w-2xl mx-auto mb-12">
                <h2 class="text-3xl font-bold uppercase tracking-wider text-white">
                    Easy To Care For Beautiful Fabric
                </h2>
                <p class="mt-4 text-lg text-orange-100">
                    Our performance fabrics are designed to resist stains and withstand the treatable mess and wear from everyday living, ensuring you'll enjoy Outdura fabrics for years to come.
                </p>
            </div>

            <div class="grid grid-cols-2 max-w-6xl mx-auto">
                <button data-tab-target="#general-cleaning" class="tab-btn active text-lg font-semibold py-4 px-6 bg-white text-orange-600 rounded-t-lg flex items-center justify-center gap-3">
                    <img src="{{ asset('images/Outdura_ Fabric Care/imgi_2_Icon_100-SDA_orange.png') }}" alt="General Cleaning Icon" class="h-6 w-6">
                    General Cleaning & Care
                </button>
                <button data-tab-target="#spill-stain" class="tab-btn text-lg font-semibold py-4 px-6 bg-orange-300 text-white rounded-t-lg flex items-center justify-center gap-3">
                     <img src="{{ asset('images/Outdura_ Fabric Care/imgi_3_Icon_Spill-and-Stain-Guide_orange.png') }}" alt="Spill And Stain Guide Icon" class="h-6 w-6">
                    Spill And Stain Guide
                </button>
            </div>

            <div class="bg-white p-8 md:p-12 rounded-b-lg max-w-6xl mx-auto transition-opacity duration-500 ease-in-out">
                
                <div id="general-cleaning" class="tab-content">
                    <h3 class="text-2xl font-bold text-gray-800 mb-8">ACRYLIC FABRIC GENERAL CLEANING AND CARE</h3>
                    <div class="gap-4 mb-8">
                        <img src="{{ asset('images/Outdura_ Fabric Care/imgi_4_csm_C_C_general_778faedea4.png') }}" alt="Dirty fabric surface" class="rounded-lg object-cover h-full">
                    </div>
                    <div class="grid md:grid-cols-2 gap-8 text-gray-600">
                        <div>
                            <h4 class="text-lg font-bold text-gray-800 mb-4">How to clean:</h4>
                            <ol class="list-decimal list-inside space-y-3">
                                <li>Remove any loose dirt.</li>
                                <li>Blot (don't rub) liquid spills with a clean, dry cloth.</li>
                                <li>Mix a mild solution of soap and warm water (do not exceed 100° F).</li>
                                <li>Never use detergents. Spray the solution on the fabric and gently scrub with a soft-bristle brush.</li>
                            </ol>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-gray-800 mb-4">What you'll need:</h4>
                             <ul class="list-disc list-inside space-y-2">
                                <li>Clean, dry towels</li>
                                <li>Mild soap, no sub</li>
                                <li>Spray Fabric</li>
                                <li>Dish detergent</li>
                                <li>Bucket of water or garden hose</li>
                                <li>Clean running water</li>
                            </ul>
                        </div>
                    </div>
                    <hr class="my-8">
                </div>

                <div id="spill-stain" class="tab-content hidden">
                    <h3 class="text-2xl font-bold text-gray-800 mb-8">ACRYLIC FABRIC SPILL AND STAIN GUIDE</h3>
                    <div id="video-player" class="relative bg-gray-900 rounded-lg overflow-hidden mb-8 aspect-video">
                        <div id="video-thumbnail-container">
                            <div id="video-thumbnail"  class="absolute top-0 left-0 w-full h-full object-cover" alt="Texgard Cleaner"></div>
                            <div class="absolute inset-0 flex items-center justify-center">
                                <button id="video-play-btn" class="bg-white/30 rounded-full h-20 w-20 flex items-center justify-center backdrop-blur-sm transition-transform hover:scale-110">
                                    <img src="{{ asset('images/Outdura_ Fabric Care/imgi_12_default.png') }}" alt="" srcset="">
                                </button>
                            </div>
                        </div>
                        <div id="video-iframe-container" class="w-full h-full"></div>
                    </div>
                    
                    <div>
                        <h4 class="text-lg font-semibold text-gray-700 mb-2">Select stain type</h4>
                        <div class="relative" id="stain-dropdown">
                            <button id="stain-dropdown-btn" class="w-full bg-gray-100 border border-gray-300 rounded-lg p-4 text-left flex justify-between items-center">
                                <span id="selected-stain" class="font-semibold text-orange-600"></span>
                                <svg id="dropdown-arrow" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                            </button>
                            <div id="stain-options" class="hidden absolute top-full left-0 right-0 mt-1 bg-white border border-gray-200 rounded-lg shadow-lg z-10">
                                </div>
                        </div>
                    </div>

                    <div id="dynamic-content" class="grid md:grid-cols-2 gap-8 text-gray-600 mt-8">
                         <div>
                            <h4 class="text-lg font-bold text-gray-800 mb-4">How to clean:</h4>
                            <ol id="cleaning-steps" class="list-decimal list-inside space-y-3"></ol>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-gray-800 mb-4">What you'll need:</h4>
                             <ul id="what-you-need" class="list-disc list-inside space-y-2"></ul>
                        </div>
                    </div>

                </div>

                <div class="grid md:grid-cols-2 gap-8 bg-[#f78c1f22] p-2 mt-2 rounded-lg">
                        <div>
                        <h4 class="text-lg font-bold text-gray-800 mb-4">How to care for your Outdura Fabric:</h4>
                        <p class="text-gray-600">To keep your Outdura fabrics looking beautiful, brush off any loose dirt as soon as possible and address spills and messes immediately.</p>
                        </div>
                        <div>
                        <p class="text-gray-600 mt-10">Outdura fabrics require minimal labor. Filter by cloth and fabric type to learn how to properly treat and clean.</p>
                        </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-16 sm:py-24">
        <div class="container mx-auto max-w-6xl px-4">

            <div class="text-center max-w-3xl mx-auto">
                <h2 class="text-3xl font-bold uppercase tracking-wider text-orange-500">
                    The Outdura Difference
                </h2>
                <p class="mt-4 text-lg text-gray-600">
                    Our fabric is woven to last, ensuring durability for every moment and whatever life has in store.
                </p>
            </div>

            <div class="mt-16 grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-6 lg:gap-8">

                <div class="h-full flex flex-col items-center justify-center text-center bg-[#1e293b] text-white p-6 rounded-lg aspect-square">
                    <img src="{{ asset('images/Outdura_ Outdura Fabrics/imgi_2_Icon_100-SDA.png') }}" class="h-16 w-16 mb-4">
                    <h3 class="font-semibold">100% Solution-Dyed Acrylic</h3>
                </div>

                <div class="h-full flex flex-col items-center justify-center text-center bg-[#1e293b] text-white p-6 rounded-lg aspect-square">
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
                
            </div>
        </div>
    </section>

    <section class="bg-slate-50 py-16 sm:py-24">
        <div class="container mx-auto max-w-6xl px-4">  
            <div class="grid grid-cols-1 items-center gap-12 md:grid-cols-2 lg:gap-20">         
                <div>
                    <img 
                        src="{{ asset('images/Outdura_ Fabric Care/imgi_11_csm_10-year-promise_e454eccf2f.png') }}" 
                        alt="Pillows on outdoor furniture with 10-year promise icon" 
                        class="rounded-lg shadow-lg ring-1 ring-black/5"
                    >
                </div>       
                <div>
                    <h2 class="text-2xl font-bold uppercase text-slate-800 sm:text-3xl">
                        Guaranteed Quality, Durability and Color
                    </h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600">
                        Produced with pride in North Carolina, made with the highest quality standards in the industry and backed by our <strong class="font-semibold text-slate-700">10-Year Promise</strong>. Enjoy the brilliance and beauty of Outdura fabrics for years to come.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section class="py-16 md:py-24">
        <div class="container mx-auto max-w-6xl px-4">
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