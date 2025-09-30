@extends('layouts.app')
@section('title', 'Outdura: Outdura Fabrics')
@section('content')
    <section class="relative h-screen flex items-center text-white overflow-hidden">
        <video 
            id="hero-video"
            class="absolute z-0 w-full h-full object-cover" 
            src="{{ asset('videos/Production_-_Outdura_Fabrics.mp4') }}" 
            autoplay 
            loop 
            muted 
            playsinline>
            Trình duyệt của bạn không hỗ trợ thẻ video.
        </video>
        <div class="relative z-20 w-full h-full flex flex-col justify-between p-8 sm:p-12 md:p-20">     
            <div class="w-fit bg-black bg-opacity-30 py-9 px-7 md:p-9">
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold uppercase tracking-wide leading-none">
                    <div>Our commitment to</div>
                    <div>Every moment</div>
                </h1>
                <p class="mt-6 text-base md:text-lg max-w-xl">
                    For nearly 150 years, we’ve been weaving brilliant, 100% solution-dyed acrylic fabrics made to the highest industry standards. From every fully saturated fiber to our 10-Year Promise, no detail is too small.
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

    <section class="py-16 sm:py-24">
        <div class="container mx-auto px-4">
            
            <div class="text-center max-w-3xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold text-custom-navy uppercase tracking-wider">
                    Worry-Free Comfort
                </h2>
                <p class="mt-4 text-gray-600">
                    We've put our fabrics to the test to ensure years of well-made, beautiful fabric.
                </p>
            </div>

            <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6 md:gap-8">
                
                <div class="bg-[#1d2d3d] rounded-xl p-6 flex flex-col items-center text-center transform hover:-translate-y-2 transition-transform duration-300">
                    <div class="h-20 w-20">
                        <img src="{{ asset('images/Outdura_ Outdura Fabrics/imgi_2_Icon_100-SDA.png') }}">
                    </div>
                    <h3 class="mt-4 font-semibold text-white">
                        100% Solution-Dyed Acrylic
                    </h3>
                </div>

                <div class="bg-[#1d2d3d] rounded-xl p-6 flex flex-col items-center text-center transform hover:-translate-y-2 transition-transform duration-300">
                    <div class="h-20 w-20 text-white">
                        <img src="{{ asset('images/Outdura_ Outdura Fabrics/imgi_3_Icon_Superior-Fade-Water-Stain-Resistance.png') }}">
                    </div>
                    <h3 class="mt-4 font-semibold text-white">
                        Fade, Water and Stain Resistance
                    </h3>
                </div>

                <div class="bg-[#1d2d3d] rounded-xl p-6 flex flex-col items-center text-center transform hover:-translate-y-2 transition-transform duration-300">
                    <div class="h-20 w-20 text-white">
                        <img src="{{ asset('images/Outdura_ Outdura Fabrics/imgi_4_Icon_Better-Softer-Feel.png') }}">
                    </div>
                    <h3 class="mt-4 font-semibold text-white">
                        Better, Softer Feel
                    </h3>
                </div>

                <div class="bg-[#1d2d3d] rounded-xl p-6 flex flex-col items-center text-center transform hover:-translate-y-2 transition-transform duration-300">
                    <div class="h-20 w-20">
                        <img src="{{ asset('images/Outdura_ Outdura Fabrics/imgi_5_Icon_Superior-Wear-Resistance.png') }}">
                    </div>
                    <h3 class="mt-4 font-semibold text-white">
                        Superior Wear Resistance (Anti-Pilling Technology)
                    </h3>
                </div>

                <div class="bg-[#1d2d3d] rounded-xl p-6 flex flex-col items-center text-center transform hover:-translate-y-2 transition-transform duration-300">
                    <div class="h-20 w-20">
                        <img src="{{ asset('images/Outdura_ Outdura Fabrics/imgi_6_Icon_Superior-Cleanability.png') }}">
                    </div>
                    <h3 class="mt-4 font-semibold text-white">
                        Superior Cleanability
                    </h3>
                </div>

            </div>
        </div>
    </section>

    <section class="py-16 sm:py-24">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">

                <div class="relative md:row-span-2 rounded-xl overflow-hidden group">
                    <img src="{{ asset('images/Outdura_ Outdura Fabrics/imgi_11_Backyard_All_Video.00_38_47_04.Still148.png') }}" 
                         alt="Family relaxing on outdoor furniture" 
                         class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="relative z-10 flex flex-col justify-end h-full p-6 md:p-10 text-white">
                        <div class="h-44 w-44 mb-4">
                            <img src="{{ asset('images/Outdura_ Outdura Fabrics/imgi_2_Icon_100-SDA.png') }}" alt="100% Solution-Dyed Acrylic">
                        </div>
                        <h3 class="text-2xl font-bold">100% Solution-Dyed Acrylic</h3>
                        <p class="mt-2 text-white/90">We ensure quality in every fiber, fully saturated with pigment to prevent fading.</p>
                    </div>
                </div>

                <div class="relative h-80 rounded-xl overflow-hidden group">
                    <img src="{{ asset('images/Outdura_ Outdura Fabrics/imgi_12_Backyard_All_Video.00_55_21_01.Still189.png') }}" 
                         alt="Outdoor pillows in the sun" 
                         class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="relative z-10 flex flex-col justify-end h-full p-6 md:p-10 text-white">
                        <div class="h-44 w-44 mb-4">
                            <img src="{{ asset('images/Outdura_ Outdura Fabrics/imgi_3_Icon_Superior-Fade-Water-Stain-Resistance.png') }}" alt="Fade, Water and Stain Resistance">
                        </div>
                        <h3 class="text-2xl font-bold">Fade, Water and Stain Resistance</h3>
                        <p class="mt-2 text-white/90">We expose our fabrics to the sun for over 1,500 hours to ensure they resist fading and remain color-fast.</p>
                    </div>
                </div>

                <div class="relative h-80 rounded-xl overflow-hidden group">
                    <img src="{{ asset('images/Outdura_ Outdura Fabrics/imgi_13_Backyard_All_Video.00_19_24_08.Still049.png') }}" 
                         alt="Woman touching a soft pillow" 
                         class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="relative z-10 flex flex-col justify-end h-full p-6 md:p-10 text-white">
                        <div class="h-44 w-44 mb-4">
                            <img src="{{ asset('images/Outdura_ Outdura Fabrics/imgi_4_Icon_Better-Softer-Feel.png') }}" alt="Better, Softer Feel">
                        </div>
                        <h3 class="text-2xl font-bold">Better, Softer Feel</h3>
                        <p class="mt-2 text-white/90">Not only woven to last, but to feel great to the touch - Outdura fabrics are incomparably soft.</p>
                    </div>
                </div>

                <div class="relative h-80 rounded-xl overflow-hidden group">
                    <img src="{{ asset('images/Outdura_ Outdura Fabrics/imgi_14_Backyard_All_Video.00_36_36_03.Still134.png') }}" 
                         alt="Close-up of durable fabric" 
                         class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="relative z-10 flex flex-col justify-end h-full p-6 md:p-10 text-white">
                        <div class="h-44 w-44 mb-4">
                            <img src="{{ asset('images/Outdura_ Outdura Fabrics/imgi_5_Icon_Superior-Wear-Resistance.png') }}" alt="Superior Wear Resistance">
                        </div>
                        <h3 class="text-2xl font-bold">Superior Wear Resistance (Anti-Pilling Technology)</h3>
                        <p class="mt-2 text-white/90">Our fabrics stand up to everyday wear and tear with up to 60,000 double rubs on the Wyzenbeek abrasion test scale.</p>
                    </div>
                </div>

                <div class="relative h-80 rounded-xl overflow-hidden group">
                    <img src="{{ asset('images/Outdura_ Outdura Fabrics/imgi_15_Backyard_All_Video.00_41_39_08.Still171.png') }}" 
                         alt="Cleaning outdoor furniture" 
                         class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="relative z-10 flex flex-col justify-end h-full p-6 md:p-10 text-white">
                        <div class="h-44 w-44 mb-4">
                           <img src="{{ asset('images/Outdura_ Outdura Fabrics/imgi_6_Icon_Superior-Cleanability.png') }}" alt="Superior Cleanability">
                        </div>
                        <h3 class="text-2xl font-bold">Superior Cleanability</h3>
                        <p class="mt-2 text-white/90">Our fabrics are bleachable, mold and mildew resistant, easy to care for and easy to clean.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="bg-gray-200 py-12 md:py-20">
        <div class="container mx-auto px-4 max-w-6xl">

            <!-- Title -->
            <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-800 tracking-wider uppercase">
                Understanding Acrylic Fabric
            </h2>
            <p class="mt-4 text-base text-gray-600 max-w-2xl mx-auto">
                Acrylic fabric is not only incredibly long lasting, its feel is incomparably soft. 
                Here is what to look out for when choosing your outdoor fabric.
            </p>
            </div>

            <!-- Swiper -->
            <div class="swiper fabricSwiper relative h-[520px] md:h-[400px] rounded-lg overflow-hidden">

            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 items-center h-full">
                    <div class="text-center md:text-left">
                    <h3 class="text-2xl font-semibold text-slate-800 mb-4">
                        Yarn or Solution-Dyed Fabric
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                        Outdoor fabrics can be yarn or solution dyed. In yarn dyeing, the yarns are dyed first 
                        before they have been spun. That way, color does not reach the core of the yarn. Think 
                        of it as the inside of a radish, where the outer layer may be a bright pink, but the core 
                        is white. Just like the radish, the pigments penetrate only the outer surface of the yarn, 
                        which is why the colors of yarn-dyed fabrics fade over time.
                    </p>
                    </div>
                    <div>
                    <img src="{{ asset('images/Outdura_ Outdura Fabrics/imgi_7_csm_GettyImages-519626155_d877f8d636.png') }}"
                        class="block w-full h-auto max-h-[320px] rounded-xl"
                        alt="Radishes illustrating yarn-dyed fabric">
                    </div>
                </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 items-center h-full">
                    <div class="text-center md:text-left">
                    <h3 class="text-2xl font-semibold text-slate-800 mb-4">
                        100% Solution-Dyed Acrylic
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                        All fabrics in the Outdura collection are woven from 100% solution-dyed acrylic. This 
                        means that color pigments are infused into the fiber before they are spun into yarn. 
                        This results in uniformly dyed yarns, resistant to UV rays for a long time, which makes 
                        them retain their color brilliance for years.
                    </p>
                    </div>
                    <div>
                    <img src="{{ asset('images/Outdura_ Outdura Fabrics/imgi_8_csm_GettyImages-469397218_4d6ad85524.png') }}"
                        class="block w-full h-auto max-h-[320px] rounded-xl"
                        alt="Spools of solution-dyed fabric">
                    </div>
                </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="swiper-pagination"></div>

            <!-- Navigation buttons -->
            <div class="swiper-button-prev !text-slate-800 z-50"></div>
            <div class="swiper-button-next !text-slate-800 z-50"></div>
            </div>
        </div>
    </section>

    <section class="py-16 md:py-24">
        <div class="container mx-auto px-6 max-w-6xl">
            
            <div class="text-center mb-10">
                <h2 class="text-2xl md:text-3xl font-bold text-[#F37820] tracking-wider uppercase">
                    Life-Friendly Outdoor Fabric
                </h2>
                <p class="mt-4 text-sm md:text-base text-gray-600 max-w-md mx-auto">
                    We know that life happens in the small moments. You focus on making memories—we’ll focus our expertise on the details.
                </p>
            </div>

            <div class="relative group cursor-pointer">
                <video controls class="w-full h-auto rounded-md shadow-lg">
                    <source src="{{ asset('videos/SST-9582_Outdura_Video_15_low.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            
        </div>
    </section>

    <section class="bg-gray-200 py-16 md:py-24">
        <div class="container mx-auto px-6 max-w-6xl">
            
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-[#0b2b4a] tracking-wider uppercase">
                    Outdura Design Collections
                </h2>
                <p class="mt-4 text-base text-gray-500 max-w-xl mx-auto">
                    Create your own designer looks with beautiful fabrics crafted for everything life has in store.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

                <div class="lg:col-span-4">
                    <div class="flex space-x-8 border-b border-gray-200 mb-6">
                        <button class="tab-button active text-[#E9842B] border-b-2 border-[#E9842B] hover:text-[#E9842B] py-2 text-lg font-semibold transition-colors duration-300" data-tab="ovation4">
                            Ovation 4
                        </button>
                        <button class="tab-button text-gray-500 border-b-2 border-transparent hover:text-[#E9842B] py-2 text-lg font-semibold transition-colors duration-300" data-tab="ovation2-3">
                            Ovation 2-3
                        </button>
                    </div>

                    <div id="tab-text-content" class="relative min-h-[150px]">
                        <div id="ovation4-text" class="tab-content absolute w-full transition-opacity duration-500 ease-in-out opacity-100">
                            <p class="text-gray-600 mb-6">
                                Inspired by moonlit nights, early morning sunrises and lush tropical gardens, this collection is a kaleidoscope of unforgettable jaquards, dobbys, stripes and solids.
                            </p>
                            <a href="#" class="inline-block bg-[#E9842B] text-white font-bold py-3 px-6 rounded hover:bg-opacity-90 transition-colors duration-300">
                                VIEW COLLECTION
                            </a>
                        </div>
                        <div id="ovation2-3-text" class="tab-content absolute w-full transition-opacity duration-500 ease-in-out opacity-0 invisible">
                            <p class="text-gray-600 mb-6">
                                A carefully curated selection of the most popular designs from Ovation 2 and 3, this collection consists of our best selling fabrics.
                            </p>
                            <a href="#" class="inline-block bg-[#E9842B] text-white font-bold py-3 px-6 rounded hover:bg-opacity-90 transition-colors duration-300">
                                VIEW COLLECTION
                            </a>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-8">
                    <div id="tab-image-content" class="grid">
                        
                        <div id="ovation4-img" class="tab-content col-start-1 row-start-1 transition-opacity duration-500 ease-in-out opacity-100">
                            <img src="{{ asset('images/Outdura_ Outdura Fabrics/imgi_9_csm_TawnySunset_V2_Outdura_462d3e201f.png') }}" alt="Ovation 4 collection rocking chair" class="w-full h-auto object-cover rounded-lg shadow-md">
                        </div>
                        
                        <div id="ovation2-3-img" class="tab-content col-start-1 row-start-1 transition-opacity duration-500 ease-in-out opacity-0 invisible">
                            <video controls class="w-full h-auto rounded-md shadow-lg">
                                <source src="{{ asset('videos/Ovation2_3.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>                        
                        </div>
                    </div>
                </div>
                </div>
        </div>
    </section>

    <section class="py-16 md:py-24">
        <div class="container mx-auto px-6 max-w-5xl">
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

    <script> 
        document.addEventListener("DOMContentLoaded", () => { new Swiper(".fabricSwiper", { 
                loop: true,
                autoplay: { delay: 4000, disableOnInteraction: false, }, 
                pagination: { el: ".swiper-pagination", clickable: true, }, 
                navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev", }, 
            }); 
        }); 
    </script>

@endsection