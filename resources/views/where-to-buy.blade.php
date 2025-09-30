@extends('layouts.app')
@section('title', 'Outdura: Where to Buy')
@section('content') 
    <section class="py-16">
        <div class="container mx-auto px-6 max-w-7xl text-center">
            <h2 class="text-3xl font-bold mb-12 uppercase" style="color: #F07C28;">WHERE TO BUY</h2>
            <div class="grid md:grid-cols-3 gap-8">
                
                <div class="bg-gray-100 p-8 hover:bg-gray-200 hover:-translate-y-2 transition-all duration-300 flex flex-col items-center justify-between">
                    <div>
                        <h3 class="text-2xl font-bold mb-4 text-[#1a2b3c]">FABRIC RETAILERS</h3>
                        <p class="text-gray-600 mb-6">Find the companies that offer small quantities and accessories for small projects and DIY projects.</p>
                    </div>
                    <button data-target="content-retailers" class="where-to-buy-btn mt-auto bg-[#F07C28] text-white font-bold py-3 px-12 transition-colors hover:bg-orange-600">EXPLORE</button>
                </div>
                
                <div class="bg-gray-100 p-8 hover:bg-gray-200 hover:-translate-y-2 transition-all duration-300 flex flex-col items-center justify-between">
                    <div>
                        <h3 class="text-2xl font-bold mb-4 text-[#1a2b3c]">FABRIC DISTRIBUTOR</h3>
                        <p class="text-gray-600 mb-6">Full rolls, fast delivery - you are in the right place with our distributors.</p>
                    </div>
                    <button data-target="content-distributors" class="where-to-buy-btn mt-auto bg-[#F07C28] text-white font-bold py-3 px-12 transition-colors hover:bg-orange-600">EXPLORE</button>
                </div>
                
                <div class="bg-gray-100 p-8 hover:bg-gray-200 hover:-translate-y-2 transition-all duration-300 flex flex-col items-center justify-between">
                    <div>
                        <h3 class="text-2xl font-bold mb-4 text-[#1a2b3c]">FURNITURE RETAILERS</h3>
                        <p class="text-gray-600 mb-6">Find retailers near you who sell furniture using Outdura fabrics.</p>
                    </div>
                    <button data-target="content-furniture" class="where-to-buy-btn mt-auto bg-[#F07C28] text-white font-bold py-3 px-12 transition-colors hover:bg-orange-600">EXPLORE</button>
                </div>

            </div>
        </div>
    </section>

    <section id="dynamic-content-section" class="bg-[#1a2b3c] text-gray-300 py-16">
        <div class="container mx-auto px-6 max-w-7xl">

            <div id="content-distributors" class="dynamic-content hidden">
                <h2 class="text-center text-3xl font-bold text-white mb-12 uppercase">FABRIC DISTRIBUTOR</h2>
                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <div class="flex items-start gap-6">
                         <img src="{{ asset('') }}images/Outdura_ Where to Buy/imgi_4_csm_2229_LM_20190404_Sattler_Goessendorf_Werk-Edit_22f2a370c1.png" alt="Warehouse" class="w-1/2 flex-shrink-0 rounded-xl">
                         <p class="text-sm">If you are looking for whole rolls of Sattler & Outdura fabrics, you have come to the right place. Whether you are looking for a solid, striped or jacquard pattern, with our help you can get full rolls and satisfy your customer project.</p>
                    </div>
                    <div class="flex items-center justify-center gap-2 md:gap-4">
                        <div class="p-2 md:p-4 bg-white rounded-xl"><img src="{{ asset('images/Outdura_ Where to Buy/imgi_5_csm_Logo-Veteran_b249483849.png') }}" alt="Veteran Logo"></div>
                        <div class="p-2 md:p-4 bg-white rounded-xl"><img src="{{ asset('images/Outdura_ Where to Buy/imgi_6_csm_Logo-Action-Upholstery_7ffb63eeb1.png') }}" alt="Action Logo"></div>
                        <div class="p-2 md:p-4 bg-white rounded-xl"><img src="{{ asset('images/Outdura_ Where to Buy/imgi_7_csm_Logo_Justwholesale_4-3_f1db3f20ef.png') }}" alt="Quest Logo"></div>
                    </div>
                </div>
            </div>

            <div id="content-retailers" class="dynamic-content">
                <h2 class="text-center text-3xl font-bold text-white mb-12 uppercase">FABRIC RETAILERS</h2>    
                <div class="flex flex-col md:flex-row gap-12 items-center justify-center max-w-5xl mx-auto">            
                    <div class="flex flex-col md:flex-row items-center justify-center gap-6 max-w-lg">
                        <img src="{{ asset('images/Outdura_ Where to Buy/imgi_2_csm_GettyImages-2173880983_854ee38f0a.png') }}" alt="Sewing Machine" class="w-56 h-auto flex-shrink-0 rounded-xl">
                        <p class="text-sm text-center md:text-left">This fabric excels for any project, no matter how small, in both indoor and outdoor furniture. While Sattler offers materials for sun protection or marine applications, Outdura is the top choice for durable upholstery for outdoor furniture. What both have in common is the high quality 100% solution-dyed acrylic.</p>
                    </div>
                    <div class="flex-shrink-0">
                        <div class="p-4 bg-white rounded-xl">
                            <img src="{{ asset('images/Outdura_ Where to Buy/imgi_3_csm_Logo_Sailrite_HG_84032bbedb.png') }}" alt="Sailrite Logo" class="w-56 h-auto rounded-xl">
                        </div>
                    </div>
                </div>
            </div>

            <div id="content-furniture" class="dynamic-content hidden">
                 <div class="text-center max-w-3xl mx-auto">
                    <p class="mb-4 uppercase">CONTACT THE RETAIL STORE DIRECTLY TO ASK IF THEY CARRY OUTDURA FABRICS.</p>
                    <p class="mb-8 text-sm">Our store locator is a service provided by Google Maps. By using this service you agree to the <a href="#" class="underline">Google Maps Terms of Service</a> and <a href="#" class="underline">Privacy Policy</a>.</p>
                    <button class="bg-[#F07C28] text-white font-bold py-3 px-12 transition-colors hover:bg-orange-600">LOAD STORES</button>
                 </div>
            </div>

        </div>
    </section>

@endsection