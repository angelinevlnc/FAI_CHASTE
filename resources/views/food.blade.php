@extends('main')
@section('content')

<div class="hs-accordion-group max-w-5xl mx-auto text-center mb-10 lg:mb-14 mt-10" data-hs-accordion-always-open>
    <div class="hs-accordion active" id="hs-basic-always-open-heading-one">
      <button class="hs-accordion-toggle hs-accordion-active:text-blue-600 py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none

       " aria-controls="hs-basic-always-open-collapse-one">
        <svg class="hs-accordion-active:hidden block w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
        <svg class="hs-accordion-active:block hidden w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
        {{-- nama stan disini  --}}
        Chaste Drink
      </button>
      <div id="hs-basic-always-open-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-always-open-heading-one">
        {{-- isi accordion disini  --}}
        <!-- Card Blog -->
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <!-- Grid -->
            <div class="grid sm:grid-cols-4 lg:grid-cols-4 gap-6">
            <!-- Card -->
            <div class="group flex flex-col border border-gray-200 shadow-sm rounded-xl">
                <div class="h-52 flex flex-col justify-center items-center ">
                    <img class="w-auto h-48" src="popes.jpeg" alt="">
                </div>
                <div class="p-4 md:p-6">
                <h3 class="text-xl font-semibold text-gray-800 ">
                    Pop Ice
                </h3>
                {{-- deskripsii jika ada --}}
                <p class="mt-3 text-gray-500">
                    Rp. 5.000
                </p>
                </div>
                <div class="mt-10 flex border-t border-gray-200 divide-x divide-gray-200">
                    <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" href="/food-payment">
                        Add To Cart
                    </a>
                    <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" href="/food-payment">
                        Purchase Now
                    </a>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="group flex flex-col border border-gray-200 shadow-sm rounded-xl">
                <div class="h-52 flex flex-col justify-center items-center rounded-t-xl">
                    <img class="w-auto h-48"  src="nutrisari.jpg" alt="">
                </div>
                <div class="p-4 md:p-6">
                <h3 class="text-xl font-semibold text-gray-800 ">
                    Nutrisari
                </h3>
                {{-- deskripsii jika ada --}}
                <p class="mt-3 text-gray-500">
                    Rp. 5.000
                </p>
                </div>
                <div class="mt-10 flex border-t border-gray-200 divide-x divide-gray-200">
                    <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" href="/food-payment">
                        Add To Cart
                    </a>
                    <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" href="/food-payment">
                        Purchase Now
                    </a>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="group flex flex-col border border-gray-200 shadow-sm rounded-xl">
                <div class="h-52 flex flex-col justify-center items-center rounded-t-xl">
                    <img class="w-auto h-48"  src="esteh.jpg" alt="">
                </div>
                <div class="p-4 md:p-6">
                <h3 class="text-xl font-semibold text-gray-800 ">
                    Es Teh
                </h3>
                {{-- deskripsii jika ada --}}
                <p class="mt-3 text-gray-500">
                    Rp. 5.000
                </p>
                </div>
                <div class="mt-10 flex border-t border-gray-200 divide-x divide-gray-200">
                    <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" href="/food-payment">
                        Add To Cart
                    </a>
                    <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" href="/food-payment">
                        Purchase Now
                    </a>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="group flex flex-col border border-gray-200 shadow-sm rounded-xl">
                <div class="h-52 flex flex-col justify-center items-center rounded-t-xl">
                    <img class="w-auto h-48"  src="aqua.webp" alt="">
                </div>
                <div class="p-4 md:p-6">
                <h3 class="text-xl font-semibold text-gray-800 ">
                    Aqua 600ml
                </h3>
                {{-- deskripsii jika ada --}}
                <p class="mt-3 text-gray-500">
                    Rp. 5.000
                </p>
                </div>
                <div class="mt-10 flex border-t border-gray-200 divide-x divide-gray-200">
                    <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" href="/food-payment">
                        Add To Cart
                    </a>
                    <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" href="/food-payment">
                        Purchase Now
                    </a>
                </div>
            </div>
            <!-- End Card -->




            </div>
            <!-- End Grid -->
        </div>
        <!-- End Card Blog -->
      </div>
    </div>

    <div class="hs-accordion" id="hs-basic-always-open-heading-two">
      <button class="hs-accordion-toggle hs-accordion-active:text-blue-600 py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none

       " aria-controls="hs-basic-always-open-collapse-two">
        <svg class="hs-accordion-active:hidden block w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
        <svg class="hs-accordion-active:block hidden w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
        Bakso Bu Gaby
      </button>
      <div id="hs-basic-always-open-collapse-two" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-always-open-heading-two">
        {{-- isi accordion disini  --}}
        <!-- Card Blog -->
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <!-- Grid -->
            <div class="grid sm:grid-cols-4 lg:grid-cols-4 gap-6">
            <!-- Card -->
            <div class="group flex flex-col border border-gray-200 shadow-sm rounded-xl">
                <div class="h-52 flex flex-col justify-center items-center ">
                    <img class="w-auto h-48" src="campur.png" alt="">
                </div>
                <div class="p-4 md:p-6">
                <h3 class="text-xl font-semibold text-gray-800 ">
                    Bakso Campur
                </h3>
                {{-- deskripsii jika ada --}}
                <p class="mt-3 text-gray-500">
                    Rp. 15.000
                </p>
                </div>
                <div class="mt-10 flex border-t border-gray-200 divide-x divide-gray-200">
                    <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" href="/food-payment">
                        Add To Cart
                    </a>
                    <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" href="/food-payment">
                        Purchase Now
                    </a>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="group flex flex-col border border-gray-200 shadow-sm rounded-xl">
                <div class="h-52 flex flex-col justify-center items-center ">
                    <img class="w-auto h-48" src="polos.png" alt="">
                </div>
                <div class="p-4 md:p-6">
                <h3 class="text-xl font-semibold text-gray-800 ">
                    Bakso Polos
                </h3>
                {{-- deskripsii jika ada --}}
                <p class="mt-3 text-gray-500">
                    Rp. 15.000
                </p>
                </div>
                <div class="mt-10 flex border-t border-gray-200 divide-x divide-gray-200">
                    <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" href="/food-payment">
                        Add To Cart
                    </a>
                    <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" href="/food-payment">
                        Purchase Now
                    </a>
                </div>
            </div>
            <!-- End Card -->

        </div>
      </div>
    </div>

    <div class="hs-accordion" id="hs-basic-always-open-heading-three">
      <button class="hs-accordion-toggle hs-accordion-active:text-blue-600 py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none

       " aria-controls="hs-basic-always-open-collapse-three">
        <svg class="hs-accordion-active:hidden block w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
        <svg class="hs-accordion-active:block hidden w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
        Mesthi Cafe
      </button>
      <div id="hs-basic-always-open-collapse-three" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-always-open-heading-three">
        {{-- isi accordion disini  --}}
        <!-- Card Blog -->
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <!-- Grid -->
            <div class="grid sm:grid-cols-4 lg:grid-cols-4 gap-6">
            <!-- Card -->
            <div class="group flex flex-col border border-gray-200 shadow-sm rounded-xl">
                <div class="h-52 flex flex-col justify-center items-center ">
                    <img class="w-auto h-48" src="geprek.webp" alt="">
                </div>
                <div class="p-4 md:p-6">
                <h3 class="text-xl font-semibold text-gray-800 ">
                    Nasi Ayam Geprek
                </h3>
                {{-- deskripsii jika ada --}}
                <p class="mt-3 text-gray-500">
                    Rp. 10.000
                </p>
                </div>
                <div class="mt-10 flex border-t border-gray-200 divide-x divide-gray-200">
                    <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" href="/food-payment">
                        Add To Cart
                    </a>
                    <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" href="/food-payment">
                        Purchase Now
                    </a>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="group flex flex-col border border-gray-200 shadow-sm rounded-xl">
                <div class="h-52 flex flex-col justify-center items-center ">
                    <img class="w-auto h-48" src="krispi.png" alt="">
                </div>
                <div class="p-4 md:p-6">
                <h3 class="text-xl font-semibold text-gray-800 ">
                    Nasi Ayam Krispi
                </h3>
                {{-- deskripsii jika ada --}}
                <p class="mt-3 text-gray-500">
                    Rp. 10.000
                </p>
                </div>
                <div class="mt-10 flex border-t border-gray-200 divide-x divide-gray-200">
                    <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" href="/food-payment">
                        Add To Cart
                    </a>
                    <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" href="/food-payment">
                        Purchase Now
                    </a>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="group flex flex-col border border-gray-200 shadow-sm rounded-xl">
                <div class="h-52 flex flex-col justify-center items-center ">
                    <img class="w-auto h-48" src="pecel.jpg" alt="">
                </div>
                <div class="p-4 md:p-6">
                <h3 class="text-xl font-semibold text-gray-800 ">
                    Nasi Pecel Ayam
                </h3>
                {{-- deskripsii jika ada --}}
                <p class="mt-3 text-gray-500">
                    Rp. 12.000
                </p>
                </div>
                <div class="mt-10 flex border-t border-gray-200 divide-x divide-gray-200">
                    <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" href="/food-payment">
                        Add To Cart
                    </a>
                    <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" href="/food-payment">
                        Purchase Now
                    </a>
                </div>
            </div>
            <!-- End Card -->
      </div>
    </div>
  </div>


@endsection
