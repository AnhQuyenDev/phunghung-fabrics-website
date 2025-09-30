@extends('layouts.app')

@section('title', 'Outdura: Blog')

@section('content')
    <section class="relative min-h-[600px] md:min-h-[600px] flex items-center">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/Outdura_ Blog/imgi_10_csm_Factory_All_Video.01_35_17_13.Still118_3f623a5d72.png') }}" 
                alt="Close-up of threads on a weaving machine" 
                class="w-full h-full object-cover">
        </div>    
        <div class="absolute inset-0 bg-black opacity-40 z-10"></div>
        <div class="relative z-20 container mx-auto max-w-6xl px-4">         
            <div class="bg-black/30 p-8 md:p-12 max-w-2xl rounded-sm">          
                <h1 class="text-4xl md:text-5xl font-extrabold text-white uppercase tracking-wide">
                    Woven Together
                </h1>                
                <p class="mt-4 text-lg text-white font-semibold">
                    The Outdura Blog
                </p>               
                <p class="mt-6 text-base text-gray-200 leading-relaxed">
                    Our story began nearly 150 years ago and continues today with our commitment to quality, beautifully crafted outdoor fabrics.
                </p>
                <p class="mt-4 text-base text-gray-200 leading-relaxed">
                    Follow our blog to see more of the story we're weaving in North Carolina: behind-the-scenes looks, collection inspiration, industry insights and more.
                </p>
            </div>
        </div>
    </section>

    <section class="py-12 sm:py-16">
        <div class="container mx-auto max-w-6xl px-4">
            <div id="filter-container" class="flex flex-wrap justify-center gap-2 mb-12"></div>
            <div id="posts-grid" class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-12"></div>
        </div>
    </section>

    <section class="bg-[#F07C28] py-16 sm:py-20">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-white font-bold text-4xl uppercase tracking-widest mb-12">
                Series / Trending / Category
            </h2>
            <div class="max-w-lg mx-auto">
                <div class="p-1 inline-block rounded-xl">
                    <img 
                        src="{{ asset('images/Outdura_ Blog/imgi_8_csm_Factory_All_Video.01_11_40_23.Still101_ac16d90ed0.png') }}" 
                        alt="Fabric manufacturing machine" 
                        class="block w-full h-auto rounded-xl"
                    >
                </div>
                
                <h3 class="text-xl font-bold text-white mt-6">
                    Our Legacy
                </h3>
                
                <p class="text-white mt-2">
                    For over 150 years, we've been huge on details.
                </p>

                <div class="flex flex-wrap justify-center items-center gap-4 mt-8">
                    <a href="#" class="border border-white text-white font-semibold py-2 px-8 rounded-full text-sm transition-colors duration-300 hover:bg-white hover:text-[#F07C28]">
                        Legacy
                    </a>
                    <a href="#" class="border border-white text-white font-semibold py-2 px-8 rounded-full text-sm transition-colors duration-300 hover:bg-white hover:text-[#F07C28]">
                        History
                    </a>
                    <a href="#" class="border border-white text-white font-semibold py-2 px-8 rounded-full text-sm transition-colors duration-300 hover:bg-white hover:text-[#F07C28]">
                        About
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-100 py-16 sm:py-20">
        <div class="container mx-auto max-w-6xl px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 md:gap-16 items-center">
                <div class="text-center md:text-left">
                    <h2 class="text-3xl lg:text-4xl font-bold text-[#0b2b4a] uppercase leading-tight">
                        Over five generations of expertise and passion
                    </h2>
                </div>

                <div class="bg-white p-8 lg:p-10 shadow-lg rounded-md w-full mx-auto md:mx-0">
                    <h3 class="font-bold text-gray-800 uppercase tracking-wider">Never Miss a Post</h3>
                    <p class="mt-2 text-gray-600 text-sm">
                        Sign up for Outdura news, insights, industry trends and product tips.
                    </p>

                    <form action="#" method="POST" class="mt-6">
                        <div class="flex items-stretch">
                            <label for="email-address" class="sr-only">Email address</label>
                            <input 
                                type="email" 
                                name="email-address" 
                                id="email-address" 
                                autocomplete="email" 
                                required 
                                class="flex-grow bg-gray-100 border border-gray-200 text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-gray-300 focus:border-gray-300 rounded-l-md px-4 text-sm" 
                                placeholder="Enter email"
                            >
                            <button 
                                type="submit" 
                                class="bg-[#F07C28] text-white font-bold uppercase py-3 px-6 rounded-r-md hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#F07C28] transition-colors"
                            >
                                Join
                            </button>
                        </div>
                    </form>
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