@extends('layouts.app')

@section('title', 'Outdura: Contact')

@section('content')
    <section class="py-16 md:py-24">
        <div class="container mx-auto px-6 max-w-6xl">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-start">

                {{-- Form Liên hệ --}}
                <div class="w-full">
                    <div>
                        <h2 class="text-3xl font-bold text-[#F37820] tracking-wider">LET'S TALK</h2>
                        <h3 class="mt-2 text-2xl font-semibold text-[#0b2b4a] tracking-wide">CONNECT WITH THE OUTDURA SALES TEAM</h3>
                    </div>

                    <form action="" method="POST" class="mt-8 space-y-5">
                        @csrf
                        
                        <div>
                            <label for="name" class="text-sm font-medium text-gray-700">Name *</label>
                            <input type="text" name="name" id="name" placeholder="Name" required class="mt-1 block w-full border-b-2 border-gray-300 focus:border-[#F37820] focus:ring-0 focus:outline-none pb-2">
                        </div>

                        <div>
                            <label for="email" class="text-sm font-medium text-gray-700">E-Mail *</label>
                            <input type="email" name="email" id="email" placeholder="E-Mail" required class="mt-1 block w-full border-b-2 border-gray-300 focus:border-[#F37820] focus:ring-0 focus:outline-none pb-2">
                        </div>

                        <div>
                            <label for="company" class="text-sm font-medium text-gray-700">Company</label>
                            <input type="text" name="company" id="company" placeholder="Company" class="mt-1 block w-full border-b-2 border-gray-300 focus:border-[#F37820] focus:ring-0 focus:outline-none pb-2">
                        </div>

                        <div>
                            <label for="address" class="text-sm font-medium text-gray-700">Address</label>
                            <input type="text" name="address" id="address" placeholder="Address" class="mt-1 block w-full border-b-2 border-gray-300 focus:border-[#F37820] focus:ring-0 focus:outline-none pb-2">
                        </div>

                        <div>
                            <label for="city" class="text-sm font-medium text-gray-700">City</label>
                            <input type="text" name="city" id="city" placeholder="City" class="mt-1 block w-full border-b-2 border-gray-300 focus:border-[#F37820] focus:ring-0 focus:outline-none pb-2">
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="state" class="text-sm font-medium text-gray-700">State *</label>
                                <input type="text" name="state" id="state" placeholder="State" required class="mt-1 block w-full border-b-2 border-gray-300 focus:border-[#F37820] focus:ring-0 focus:outline-none pb-2">
                            </div>
                            <div>
                                <label for="postal-code" class="text-sm font-medium text-gray-700">Postal Code</label>
                                <input type="text" name="postal_code" id="postal-code" placeholder="Postal Code" class="mt-1 block w-full border-b-2 border-gray-300 focus:border-[#F37820] focus:ring-0 focus:outline-none pb-2">
                            </div>
                        </div>

                        <div>
                            <label for="country" class="text-sm font-medium text-gray-700">Country</label>
                            <select id="country" name="country" class="mt-1 block w-full border-b-2 border-gray-300 focus:border-[#F37820] focus:ring-0 pb-2 bg-transparent">
                                <option>United States</option>
                                <option>Canada</option>
                                <option>Mexico</option>
                                <option>Other</option>
                            </select>
                        </div>

                        <div>
                            <label for="phone" class="text-sm font-medium text-gray-700">Phone Number</label>
                            <input type="tel" name="phone" id="phone" placeholder="Phone Number" class="mt-1 block w-full border-b-2 border-gray-300 focus:border-[#F37820] focus:ring-0 focus:outline-none pb-2">
                        </div>

                        <div>
                            <label for="request" class="text-sm font-medium text-gray-700">Describe your request *</label>
                            <textarea name="request" id="request" placeholder="Describe your request" rows="3" required class="mt-1 block w-full border-b-2 border-gray-300 focus:border-[#F37820] focus:ring-0 focus:outline-none pb-2"></textarea>
                        </div>
                        
                        <div>
                            <label for="comments" class="text-sm font-medium text-gray-700">Questions or Comments</label>
                            <textarea name="comments" id="comments" placeholder="Questions or Comments" rows="3" class="mt-1 block w-full border-b-2 border-gray-300 focus:border-[#F37820] focus:ring-0 focus:outline-none pb-2"></textarea>
                        </div>
                        
                        <p class="text-xs text-gray-500 pt-4">
                            You can find our privacy policy with information on data processing and your rights at 
                            <a href="#" class="text-[#0b2b4a] underline">https://www.outdura.com/residential/privacy-policy</a>
                        </p>

                        <div class="flex justify-center mt-6">
                            <button type="submit" class="inline-block bg-[#F37820] text-white font-bold py-3 px-10 rounded hover:bg-orange-500 transition-colors duration-300">
                                SUBMIT
                            </button>
                        </div>
                    </form>
                </div>

                {{-- Ảnh bên phải --}}
                <div class="w-full h-full min-h-[400px] lg:min-h-full">
                    <img src="{{ asset('images/Outdura_ Contact/imgi_2_csm_GettyImages-1294144620_f97fe3dff6.png') }}" alt="Happy couple shaking hands with a professional" class="w-full h-full object-cover rounded-lg">
                </div>

            </div>
        </div>
    </section>
@endsection
