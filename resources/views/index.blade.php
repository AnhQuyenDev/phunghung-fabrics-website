@extends('layouts.app')
@section('title', 'Outdura: Residential')
@section('content')
    <section class="relative w-full h-[42rem] overflow-hidden" id="heroBanner">
      <!-- Slides -->
      <div class="absolute inset-0 transition-opacity duration-1000 opacity-100 z-10" data-slide="0">
        <video
          class="w-full h-full object-cover"
          autoplay
          muted
          loop
          playsinline
          id="heroVideo"
        >
          <source src="{{ asset('videos/Family_-_Home_Page_1.mp4') }}" type="video/mp4" />
        </video>
      </div>

      <div class="absolute inset-0 transition-opacity duration-1000 opacity-0 z-0" data-slide="1">
        <img
          src="{{ asset('images/Outdura_Homepage/imgi_4_csm__Q4A1098_73d8fa6e33.jpg') }}"
          alt="Slide 1"
          class="w-full h-full object-cover"
        />
      </div>

      <div class="absolute inset-0 transition-opacity duration-1000 opacity-0 z-0" data-slide="2">
        <img
          src="{{ asset('images/Outdura_Homepage/imgi_15_csm_Factory_All_Video.00_30_15_18.Still069_5bc6a67337.jpg') }}"
          alt="Slide 2"
          class="w-full h-full object-cover"
        />
      </div>

      <!-- Text + CTA -->
      <div
        class="absolute top-0 md:left-12 lg:left-48 z-30 w-full max-w-[50rem] min-h-[26rem] text-white bg-black bg-opacity-30 p-4 md:p-8"
      >
        <div class="flex flex-col h-full space-y-12 justify-center" id="heroText">
          <h1 class="text-7xl sm:text-4xl md:text-6xl font-bold mb-4 uppercase leading-tight">
            Thread by thread
          </h1>
          <p
            class="hidden md:block text-sm sm:text-base md:text-2xl mb-6 leading-relaxed max-w-[28rem]"
          >
            Discover outdoor fabrics made with the highest quality standards and unparalleled
            attention to detail, backed by our 10-Year Promise.
          </p>
          <button
            class="hidden md:inline-block bg-[#f78c1f] hover:bg-[#f89d41] text-white text-lg md:text-2xl tracking-widest font-bold py-3 px-6 transition duration-300 h-[40%] w-[40%]"
          >
            EXPLORE
          </button>
        </div>
      </div>

      <!-- Arrows -->
      <button
        id="prevBtn"
        class="absolute left-2 top-3/4 md:left-4 md:top-1/2 z-40 -translate-y-1/2 text-white text-xl md:text-3xl"
      >
        &#10094;
      </button>
      <button
        id="nextBtn"
        class="absolute right-2 top-3/4 md:right-4 md:top-1/2 z-40 -translate-y-1/2 text-white text-xl md:text-3xl"
      >
        &#10095;
      </button>

      <!-- Play/Pause -->
      <div
        id="toggleVideoBtn"
        class="absolute bottom-10 left-1/2 -translate-x-1/2 md:left-12 lg:left-60 z-30 cursor-pointer"
      >
        <div
          class="flex items-center justify-center bg-white p-2 md:p-3 rounded-lg h-14 w-14 md:h-20 md:w-20 shadow-md hover:scale-105 transition-transform"
        >
          <span id="videoIcon" class="text-2xl md:text-4xl text-[#0a263a]">&#10074;&#10074;</span>
        </div>
      </div>

      <!-- Pagination Dots -->
      <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex space-x-3 z-40">
        <button class="w-3 h-3 md:w-4 md:h-4 border-2 rounded-full bg-white scale-110" data-dot="0"></button>
        <button class="w-3 h-3 md:w-4 md:h-4 border-2 rounded-full border-white" data-dot="1"></button>
        <button class="w-3 h-3 md:w-4 md:h-4 border-2 rounded-full border-white" data-dot="2"></button>
      </div>
    </section>

     <!-- Mobile CTA -->
    <div class="flex flex-col items-center justify-center md:hidden px-4 py-6 text-[#0a263a]" id="mobileText">
      <p class="text-base leading-relaxed mb-4">
        Discover outdoor fabrics made with the highest quality standards and unparalleled
        attention to detail, backed by our 10-Year Promise.
      </p>
      <button
        class="w-[50%] bg-[#f78c1f] hover:bg-[#f89d41] text-white text-lg tracking-wider font-bold py-3 px-6 transition duration-300"
      >
        EXPLORE
      </button>
    </div>
    
    <section class="flex flex-col justify-center items-center mt-20 mb-20 px-4">
      <!-- Heading + Description -->
      <div class="flex flex-col justify-center items-center">
        <h1
          class="text-[#f78c1f] text-center text-4xl font-bold uppercase tracking-wider leading-tight"
        >
          LIFE-Friendly outdoor fabric
        </h1>
        <p
          class="text-center text-[#0a263a] text-xl w-[70%] font-sans mt-7 mb-20"
        >
          We know that life happens in the small moments. You focus on making memories—we’ll
          focus our expertise on the details.
        </p>
      </div>

      <!-- Video -->
      <div class="w-full h-full flex justify-center items-center border-none">
        <video
          src="{{ asset('videos/SST-9582_Outdura_Video_15_low.mp4') }}"
          controls
          muted
          class="w-5/6 h-full"
        ></video>
      </div>
    </section>

    <section class="mb-12 sm:mb-16 md:mb-20">
      <!-- Header Section -->
      <div class="mb-8 sm:mb-12 md:mb-16 px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-4xl mx-auto">
          <h1
            class="mb-8 text-[#0a263a] text-4xl font-bold uppercase tracking-wide leading-tight"
          >
            The Outdura Difference
          </h1>
          <p
            class="text-[#0a263a] text-xl font-sans leading-relaxed max-w-3xl mx-auto"
          >
            Our fabrics are woven to last, ensuring durability for every moment and whatever
            life has in store.
          </p>
        </div>
      </div>

      <!-- Feature Icons Grid -->
      <div class="mb-12 sm:mb-16 md:mb-20 px-4 sm:px-6 lg:px-8">
        <div
          class="flex flex-wrap justify-center gap-3 sm:gap-4 md:gap-6 max-w-7xl mx-auto"
        >
          <!-- Feature 1 -->
          <button
            class="w-[140px] sm:w-[160px] md:w-[180px] lg:w-[200px] xl:w-[220px] flex flex-col items-center text-center bg-[#0a263a] text-white rounded-xl p-4 sm:p-5 md:p-6 hover:-translate-y-2 sm:hover:-translate-y-3 md:hover:-translate-y-4 transform hover:bg-[#495b6c] transition-all duration-300 hover:shadow-xl group"
          >
            <img
              src="{{ asset('icons/imgi_5_Icon_100-SDA.svg') }}"
              alt="100% Solution-Dyed Acrylic icon"
              class="w-12 h-12 sm:w-16 sm:h-16 lg:w-20 lg:h-20 mb-3 sm:mb-4 group-hover:scale-110 transition-transform duration-300"
            />
            <p class="font-semibold text-xs sm:text-sm md:text-base lg:text-lg leading-tight">
              100% Solution-Dyed Acrylic
            </p>
          </button>

          <!-- Feature 2 -->
          <button
            class="w-[140px] sm:w-[160px] md:w-[180px] lg:w-[200px] xl:w-[220px] flex flex-col items-center text-center bg-[#0a263a] text-white rounded-xl p-4 sm:p-5 md:p-6 hover:-translate-y-2 sm:hover:-translate-y-3 md:hover:-translate-y-4 transform hover:bg-[#495b6c] transition-all duration-300 hover:shadow-xl group"
          >
            <img
              src="{{ asset('icons/imgi_6_Icon_Superior-Fade-Water-Stain-Resistance.svg') }}"
              alt="Fade, Water and Stain Resistance icon"
              class="w-12 h-12 sm:w-16 sm:h-16 lg:w-20 lg:h-20 mb-3 sm:mb-4 group-hover:scale-110 transition-transform duration-300"
            />
            <p class="font-semibold text-xs sm:text-sm md:text-base lg:text-lg leading-tight">
              Superior Fade, Water and Stain Resistance
            </p>
          </button>

          <!-- Feature 3 -->
          <button
            class="w-[140px] sm:w-[160px] md:w-[180px] lg:w-[200px] xl:w-[220px] flex flex-col items-center text-center bg-[#0a263a] text-white rounded-xl p-4 sm:p-5 md:p-6 hover:-translate-y-2 sm:hover:-translate-y-3 md:hover:-translate-y-4 transform hover:bg-[#495b6c] transition-all duration-300 hover:shadow-xl group"
          >
            <img
              src="{{ asset('icons/imgi_7_Icon_Better-Softer-Feel.svg') }}"
              alt="Better Softer Feel icon"
              class="w-12 h-12 sm:w-16 sm:h-16 lg:w-20 lg:h-20 mb-3 sm:mb-4 group-hover:scale-110 transition-transform duration-300"
            />
            <p class="font-semibold text-xs sm:text-sm md:text-base lg:text-lg leading-tight">
              Better, Softer Feel
            </p>
          </button>

          <!-- Feature 4 -->
          <button
            class="w-[140px] sm:w-[160px] md:w-[180px] lg:w-[200px] xl:w-[220px] flex flex-col items-center text-center bg-[#0a263a] text-white rounded-xl p-4 sm:p-5 md:p-6 hover:-translate-y-2 sm:hover:-translate-y-3 md:hover:-translate-y-4 transform hover:bg-[#495b6c] transition-all duration-300 hover:shadow-xl group"
          >
            <img
              src="{{ asset('icons/imgi_8_Icon_Superior-Wear-Resistance.svg') }}"
              alt="Wear Resistance icon"
              class="w-12 h-12 sm:w-16 sm:h-16 lg:w-20 lg:h-20 mb-3 sm:mb-4 group-hover:scale-110 transition-transform duration-300"
            />
            <p class="font-semibold text-xs sm:text-sm md:text-base lg:text-lg leading-tight">
              Superior Wear Resistance
            </p>
          </button>

          <!-- Feature 5 -->
          <button
            class="w-[140px] sm:w-[160px] md:w-[180px] lg:w-[200px] xl:w-[220px] flex flex-col items-center text-center bg-[#0a263a] text-white rounded-xl p-4 sm:p-5 md:p-6 hover:-translate-y-2 sm:hover:-translate-y-3 md:hover:-translate-y-4 transform hover:bg-[#495b6c] transition-all duration-300 hover:shadow-xl group"
          >
            <img
              src="{{ asset('icons/imgi_9_Icon_Superior-Cleanability.svg') }}"
              alt="Cleanability icon"
              class="w-12 h-12 sm:w-16 sm:h-16 lg:w-20 lg:h-20 mb-3 sm:mb-4 group-hover:scale-110 transition-transform duration-300"
            />
            <p class="font-semibold text-xs sm:text-sm md:text-base lg:text-lg leading-tight">
              Superior Cleanability
            </p>
          </button>
        </div>
      </div>

      <!-- Hero Section with Overlay -->
      <div class="relative flex justify-center items-center px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-7xl">
          <div class="relative overflow-hidden rounded-2xl sm:rounded-3xl">
            <!-- Background Image -->
            <div class="relative">
              <img
                src="{{ asset('images/Outdura_Homepage/imgi_19_Backyard_All_Video.00_21_35_03.Still067.jpg') }}"
                alt="Outdoor fabric in beautiful backyard setting"
                class="w-full h-[300px] sm:h-[400px] md:h-[500px] lg:h-[600px] xl:h-[700px] object-cover"
              />

              <!-- Overlay -->
              <div class="absolute inset-0">
                <div
                  class="absolute inset-0 flex items-center bg-black bg-opacity-30 w-3/4 sm:w-1/3"
                >
                  <div class="w-full px-6 sm:px-8 md:px-10 lg:px-12 xl:px-16">
                    <div
                      class="space-y-4 sm:space-y-6 md:space-y-8 text-center sm:text-left"
                    >
                      <!-- Icon -->
                      <div class="flex justify-center sm:justify-center">
                        <div class="relative">
                          <img
                            src="{{ asset('icons/imgi_5_Icon_100-SDA.svg') }}"
                            alt="100% Solution-Dyed Acrylic icon"
                            class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 lg:w-28 lg:h-28 xl:w-36 xl:h-36"
                          />
                        </div>
                      </div>

                      <!-- Title -->
                      <h1
                        class="text-white font-bold text-lg sm:text-xl md:text-2xl lg:text-3xl xl:text-4xl leading-tight max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg"
                      >
                        100% Solution-Dyed Acrylic
                      </h1>

                      <!-- Description -->
                      <p
                        class="text-white/90 text-sm sm:text-base md:text-lg lg:text-xl leading-relaxed max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg"
                      >
                        We ensure quality in every fiber, fully saturated with pigment to
                        prevent fading.
                      </p>

                      <!-- CTA Button -->
                      <div class="pt-2 sm:pt-4">
                        <button
                          class="bg-[#f78c1f] hover:bg-[#f89d41] text-white font-bold text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl uppercase tracking-wider px-4 py-2 sm:px-6 sm:py-3 md:px-8 md:py-4 lg:px-10 lg:py-5 transition-all duration-300"
                        >
                          LEARN MORE
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /Overlay -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-16 md:py-20 lg:py-24 px-4 sm:px-6 lg:px-8">
      <div class="mx-auto max-w-7xl">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
          
          <!-- Image Section -->
          <div class="order-1 lg:order-2">
            <div class="relative overflow-hidden">
              <img 
                src="{{ asset('images/Outdura_Homepage/imgi_10_csm_9927_LM_20190401_Sattler_Rudersdorf_Werk-Edit_a24037f79e.jpg') }}" 
                alt="Sattler facility - legacy of craftsmanship" 
                class="w-full h-64 sm:h-80 md:h-96 lg:h-[450px] object-cover"
              />
            </div>
          </div>

          <!-- Content Section -->
          <div class="order-2 lg:order-2 space-y-6 h-full">
            <div>
              <h1 class="text-2xl sm:text-3xl lg:text-4xl xl:text-5xl font-bold text-[#0a263a] uppercase leading-tight">
                For almost 150 Years, Our Legacy has been in the Details
              </h1>
            </div>
            
            <div class="space-y-4 sm:space-y-6">
              <p class="text-base sm:text-lg text-[#0a263a] leading-relaxed">
                Founded in Austria in 1875, Outdura's parent company, Sattler, brought its legacy of innovation to North America in 2010 with the acquisition of a sales and manufacturing facility in North Carolina, where our U.S. office is headquartered.
              </p>
              <p class="text-base sm:text-lg text-[#0a263a] leading-relaxed">
                From design to research and development to customer service, we strive for excellence in making our fabrics more weatherproof, more durable, and more beautiful.
              </p>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="py-16 md:py-20 lg:py-0 px-4 sm:px-6 lg:px-8">
      <div class="mx-auto max-w-7xl">
        <div class="lg:grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center flex flex-col">
          
          <!-- Left Section - Design Selector -->
          <div class="space-y-8 xl:-ml-60 flex flex-col items-center">
            <div class="relative">
              <img 
                src="{{ asset('images/Outdura_Homepage/imgi_11_csm_DesignSelector_345x250_facb056878.png') }}" 
                alt="Design Selector Tool" 
                class="sm:w-96 h-64 sm:h-72 md:h-80 lg:h-72"
              />
            </div>
            
            <div class="space-y-6">
              <div>
                <h4 class="text-[#0a263a] text-lg sm:text-xl font-semibold mb-2 tracking-wide">
                  The Design Selector
                </h4>
                <h2 class="text-[#0a263a] text-3xl sm:text-4xl lg:text-5xl font-bold uppercase leading-tight">
                  Get Inspired
                </h2>
              </div>
              
              <p class="text-[#0a263a] text-base sm:text-lg leading-relaxed max-w-96">
                The perfect way to visualize our fabrics. Try familiar Outdura favorites and new fabric combinations on different seating pieces.
              </p>
            </div>
          </div>

          <!-- Right Section - Coast to Coast Blog -->
          <div class="relative group cursor-pointer">
            <div class="relative overflow-hidden rounded-2xl transition-transform duration-200 hover:-translate-y-2">
              <img 
                src="{{ asset('images/Outdura_Homepage/imgi_24_csm_Coast2Coast_Presentation_Loop_5f5f512c82.jpg') }}" 
                alt="Coast to Coast - From East to West Coast and Beyond" 
                class="w-full h-96 sm:h-[450px] lg:h-[550px] object-cover"
              />
              
              <!-- Overlay Content -->
              <div class="absolute inset-0 bg-black bg-opacity-30">
                <div class="absolute bottom-0 left-0 right-0 p-6 sm:p-8 lg:p-10 text-white">
                  <div class="space-y-4">
                    <div>
                      <span class="inline-block text-[#f78c1f] text-xs sm:text-2xl font-bold py-1 uppercase tracking-wider mb-3">
                        Collections Blog
                      </span>
                      <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold uppercase leading-tight mb-4">
                        From East to West Coast and Beyond
                      </h1>
                    </div>
                    
                    <p class="text-sm sm:text-base lg:text-lg text-gray-200 leading-relaxed max-w-md">
                      The essence of our company and the presentation of the various regions in the USA.
                    </p>
                    
                    <button class="inline-flex items-center gap-2 bg-[#f78c1f] hover:bg-[#f89d41] text-white text-2xl uppercase px-6 py-3 font-semibold transition-all duration-300 group/btn mt-4">
                      Read More
                    </button>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Decorative Elements -->
            <div class="absolute -top-4 -right-4 w-24 h-24 bg-orange-500/10 rounded-full blur-xl transition-opacity duration-500 group-hover:opacity-75"></div>
            <div class="absolute -bottom-4 -left-4 w-32 h-32 bg-[#0a263a]/10 rounded-full blur-xl transition-opacity duration-500 group-hover:opacity-75"></div>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-[#4b5c78] xl:my-32 lg:my-16 py-16 md:py-20 lg:py-24 px-4 sm:px-6 lg:px-8">
      <div class="mx-auto max-w-7xl">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center">
          
          <!-- Left Column - Text Content -->
          <div class="space-y-6">
            <h1 class="text-white text-3xl sm:text-4xl lg:text-5xl font-bold uppercase leading-tight tracking-wide">
              Caring for Outdura Fabrics
            </h1>
            
            <div class="space-y-6 text-white">
              <p class="text-base sm:text-lg leading-relaxed">
                Our superior fiber and spinning techniques strengthen our fabrics to ensure that with proper care and cleaning, you'll enjoy them for years to come.
              </p>
              
              <p class="text-base sm:text-lg leading-relaxed">
                We've made our fabrics easy to care for when it comes to the inevitable stains and everyday wear and tear.
              </p>
            </div>
          </div>

          <!-- Right Column - Care Guide Cards -->
          <div class="space-y-6 xl:ml-32">
            
            <!-- General Cleaning Card -->
            <div class="h-56 flex border-2 border-white rounded-lg px-8 hover:translate-x-3 transition duration-300 cursor-pointer group">
              <div class="flex flex-row items-center justify-center text-center space-x-32">
                <div class="relative">
                  <img src="{{ asset('icons/imgi_12_Icon_100-SDA_white.svg') }}" alt="General Cleaning Icon" class="w-16 h-16 group-hover:opacity-80 transition duration-300" />
                </div>
                
                <h3 class="text-white text-xl sm:text-2xl font-semibold">
                  General Cleaning<br />and Care
                </h3>
              </div>
            </div>

            <!-- Spill and Stain Guide Card -->
            <div class="h-56 flex border-2 border-white rounded-lg p-8 hover:translate-x-3 transition duration-300 cursor-pointer group">
              <div class="flex flex-row items-center text-center space-x-32">
                <div class="relative">
                  <img src="{{ asset('icons/imgi_13_Icon_Spill-and-Stain-Guide_white.svg') }}" alt="Spill and Stain Icon" class="w-16 h-16 group-hover:opacity-80 transition duration-300" />
                </div>
                
                <h3 class="text-white text-xl sm:text-2xl font-semibold">
                  Spill and Stain<br />Guide
                </h3>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="py-10 my-20">
      <div class="grid sm:grid-cols-1 xl:grid-cols-2 gap-28 sm:mx-24 md:mx-44 lg:mx-64 xl:mx-72">
        
        <!-- Card 1: Where to Buy -->
        <div class="flex flex-col justify-start items-center p-10 space-y-10 bg-gray-200 cursor-pointer hover:-translate-y-3 transition duration-300">
          <h1 class="text-[#0a263a] text-center uppercase font-bold text-3xl xl:text-2xl h-12">
            where to buy outdura fabrics
          </h1>
          <p class="text-center text-[#0a263a] text-lg xl:text-base">
            Find select retailers who offer Outdura Fabric options for their furniture collections
          </p>
          <div class="my-10">
            <button class="bg-[#f78c1f] hover:bg-[#f89d41] text-white font-bold text-xl sm:text-base md:text-lg lg:text-xl xl:text-xl uppercase tracking-wider px-4 py-2 sm:px-6 sm:py-2 md:px-8 md:py-4 lg:px-10 lg:py-5 xl:px-24 xl:py-3 transition-all duration-300">
              show me
            </button>
          </div>
        </div>

        <!-- Card 2: Contact Us -->
        <div class="flex flex-col justify-start items-center p-10 space-y-10 bg-gray-200 cursor-pointer hover:-translate-y-3 transition duration-300">
          <h1 class="text-[#0a263a] text-center uppercase font-bold text-3xl xl:text-2xl h-12">
            here for you
          </h1>
          <p class="text-center text-[#0a263a] text-lg xl:text-base">
            We're here to answer any questions and receive any feedback you may have
          </p>
          <div class="my-10">
            <button class="bg-[#f78c1f] hover:bg-[#f89d41] text-white font-bold text-xl sm:text-base md:text-lg lg:text-xl xl:text-lg uppercase tracking-wider px-4 py-2 sm:px-6 sm:py-3 md:px-8 md:py-4 lg:px-10 lg:py-5 xl:px-24 xl:py-3 transition-all duration-300">
              contact us
            </button>
          </div>
        </div>

      </div>
    </section>
    <script>
      const slides = [
          {
            type: "video",
            heading: "Thread by thread",
            description:
              "Discover outdoor fabrics made with the highest quality standards and unparalleled attention to detail, backed by our 10-Year Promise.",
            buttonLabel: "EXPLORE",
          },
          {
            type: "image",
            heading: "Inspired design",
            description:
              "Outdura's Design Collections bring elegance to fabrics that are made to handle everyday life, beautifully.",
            buttonLabel: "FIND OUT MORE",
          },
          {
            type: "image",
            heading: "Guaranteed Quality and Durability",
            description:
              "Manufactured to the highest standards, our fabrics are made to last for years of moments and memories.",
          },
        ];

        let current = 0;
        let isPlaying = true;
        const slideEls = document.querySelectorAll("[data-slide]");
        const dots = document.querySelectorAll("[data-dot]");
        const video1 = document.getElementById("heroVideo");
        const videoIcon = document.getElementById("videoIcon");

        function showSlide(index) {
          slideEls.forEach((el, i) => {
            el.classList.remove("opacity-100", "z-10");
            el.classList.add("opacity-0", "z-0");
            dots[i].classList.remove("bg-white", "scale-110");
            dots[i].classList.add("border-white");
            if (i === index) {
              el.classList.add("opacity-100", "z-10");
              el.classList.remove("opacity-0", "z-0");
              dots[i].classList.add("bg-white", "scale-110");
              dots[i].classList.remove("border-white");
            }
          });

          // update text
          const textBox = document.getElementById("heroText");
          textBox.querySelector("h1").innerText = slides[index].heading;
          textBox.querySelector("p").innerText = slides[index].description || "";
          const btn = textBox.querySelector("button");
          if (slides[index].buttonLabel) {
            btn.innerText = slides[index].buttonLabel;
            btn.style.display = "inline-block";
          } else {
            btn.style.display = "none";
          }

          // update mobile text
          const mobileBox = document.getElementById("mobileText");
          mobileBox.querySelector("p").innerText = slides[index].description || "";
          const mBtn = mobileBox.querySelector("button");
          if (slides[index].buttonLabel) {
            mBtn.innerText = slides[index].buttonLabel;
            mBtn.style.display = "block";
          } else {
            mBtn.style.display = "none";
          }

          current = index;
        }

        document.getElementById("prevBtn").addEventListener("click", () => {
          let newIndex = (current - 1 + slides.length) % slides.length;
          showSlide(newIndex);
        });
        document.getElementById("nextBtn").addEventListener("click", () => {
          let newIndex = (current + 1) % slides.length;
          showSlide(newIndex);
        });

        dots.forEach((dot, i) => {
          dot.addEventListener("click", () => showSlide(i));
        });

        document.getElementById("toggleVideoBtn").addEventListener("click", () => {
          if (!video1) return;
          if (video1.paused) {
            video1.play();
            isPlaying = true;
            videoIcon.innerHTML = "&#10074;&#10074;"; // pause icon
          } else {
            video1.pause();
            isPlaying = false;
            videoIcon.innerHTML = "&#9658;"; // play icon
          }
        });

        // init
        showSlide(0);
    </script>
@endsection
