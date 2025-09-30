@extends('layouts.app')
@section('title', 'Outdura: FAQ')
@section('content')
    <section class="py-16 sm:py-20">
        <div class="container mx-auto max-w-6xl px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="text-center md:text-left">
                    <h2 class="text-4xl sm:text-5xl font-bold text-[#E9842B] uppercase">
                        Frequently Asked Questions
                    </h2>
                </div>
                <div class="flex justify-center">
                    <img src="{{ asset('images/Outdura_ FAQ/imgi_2_csm_faq-image_ab4c3221c8.png') }}" alt="Crafting with red yarn and fabric" class="max-w-md w-full h-auto object-cover rounded-lg">
                </div>
            </div>
        </div>
    </section>

    <div class="container mx-auto max-w-6xl px-4"> 
        <div class="space-y-4">
            <div class="accordion-item bg-gray-100 rounded-lg">
                <button class="accordion-header flex justify-between items-center w-full p-5 text-left">
                    <span class="text-lg font-semibold text-gray-800">Where are Outdura Fabrics made?</span>
                    <svg class="accordion-icon w-6 h-6 text-gray-500 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div class="accordion-content">
                    <div class="p-5 pt-0 text-gray-600">
                        <p>Our fabrics are proudly designed and manufactured in our facilities in Hudson, North Carolina, USA.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item bg-gray-100 rounded-lg">
                <button class="accordion-header flex justify-between items-center w-full p-5 text-left">
                    <span class="text-lg font-semibold text-gray-800">What are solution-dyed acrylic fabrics?</span>
                    <svg class="accordion-icon w-6 h-6 text-gray-500 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div class="accordion-content">
                    <div class="p-5 pt-0 text-gray-600">
                        <p>Solution-dyed acrylic is a dyeing process where the color pigment is added to the acrylic fibers while they are still in a liquid state. This locks the color in, providing superior fade resistance and cleanability compared to traditional dyeing methods.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item bg-white rounded-lg border border-gray-200 shadow-sm">
                <button class="accordion-header flex justify-between items-center w-full p-5 text-left">
                    <span class="text-lg font-semibold text-gray-900">How should I clean Outdura fabrics?</span>
                    <svg class="accordion-icon w-6 h-6 text-gray-500 transition-transform duration-300 transform rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div class="accordion-content" style="max-height: 500px;">
                    <div class="p-5 pt-0 text-gray-600">
                        <p>Our fabrics are engineered to withstand a wide variety of stains from popsicles to mud to wine. Our <a href="#" class="text-blue-600 underline hover:text-blue-800">Spill and Stain Guide</a> will help you find the ideal method to clean different kinds of stains.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item bg-gray-100 rounded-lg">
                <button class="accordion-header flex justify-between items-center w-full p-5 text-left">
                    <span class="text-lg font-semibold text-gray-800">How can Outdura Fabrics be used?</span>
                    <svg class="accordion-icon w-6 h-6 text-gray-500 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div class="accordion-content">
                    <div class="p-5 pt-0 text-gray-600">
                        <p>Outdura fabrics are perfect for a wide range of applications, including outdoor furniture cushions, pillows, umbrellas, marine upholstery, and more.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item bg-gray-100 rounded-lg">
                <button class="accordion-header flex justify-between items-center w-full p-5 text-left">
                    <span class="text-lg font-semibold text-gray-800">What is Outdura's warranty policy?</span>
                    <svg class="accordion-icon w-6 h-6 text-gray-500 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div class="accordion-content">
                    <div class="p-5 pt-0 text-gray-600">
                        <p>We offer a comprehensive warranty that covers loss of color or strength from normal usage and exposure conditions. Please visit our warranty page for full details.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item bg-gray-100 rounded-lg">
                <button class="accordion-header flex justify-between items-center w-full p-5 text-left">
                    <span class="text-lg font-semibold text-gray-800">How can I contact Outdura?</span>
                    <svg class="accordion-icon w-6 h-6 text-gray-500 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div class="accordion-content">
                    <div class="p-5 pt-0 text-gray-600">
                        <p>You can contact us through the contact form on our website or by calling our customer service line during business hours.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-10 bg-orange-500 rounded-lg p-8">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <div class="text-center md:text-left">
                    <h3 class="text-2xl font-bold text-white uppercase">Still have questions?</h3>
                    <p class="text-white mt-1">Can't find the answer you're looking for? Connect with our friendly team.</p>
                </div>
                <div>
                    <a href="#" class="inline-block bg-transparent border-2 border-white text-white font-semibold py-3 px-6 rounded-md hover:bg-white hover:text-orange-500 transition-colors duration-300">
                        GET IN TOUCH
                    </a>
                </div>
            </div>
        </div>
    </div>

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