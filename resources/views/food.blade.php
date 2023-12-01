@extends('main')
@section('content')

<div class="hs-accordion-group max-w-5xl mx-auto text-center mb-10 lg:mb-14 mt-10" data-hs-accordion-always-open>
    <!-- Start FoodController -->
    @foreach ($listTenant as $index=>$tenant)
        <div class="hs-accordion
        @php
            if($index==0){
                echo " active";
            }
        @endphp
        " id="hs-basic-always-open-heading-one">
        <button class="hs-accordion-toggle hs-accordion-active:text-blue-600 py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none

        " aria-controls="hs-basic-always-open-collapse-one">
            <svg class="hs-accordion-active:hidden block w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
            <svg class="hs-accordion-active:block hidden w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
            {{-- nama stan disini  --}}
            {{ $tenant->nama }}
        </button>
        <div id="hs-basic-always-open-collapse-one" class="hs-accordion-content
        @php
            if($index!=0){
                echo " hidden";
            }
        @endphp
        w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-always-open-heading-one">
            {{-- isi accordion disini  --}}
            <!-- Card Blog -->
            <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                <!-- Grid -->
                <div class="grid sm:grid-cols-4 lg:grid-cols-4 gap-6">
                    @foreach ($listMenu as $menu)
                        @if ($tenant->tenant_id == $menu->tenant_id)
                            <!-- Card -->
                            <div class="group flex flex-col border border-gray-200 shadow-sm rounded-xl">
                                <div class="h-52 flex flex-col justify-center items-center ">
                                    <img class="w-auto h-48" src="{{ Storage::url("$menu->foto") }}" alt="">
                                </div>
                                <div class="p-4 md:p-6">
                                <h3 class="text-xl font-semibold text-gray-800 ">
                                    {{ $menu->nama }}
                                </h3>
                                {{-- deskripsii jika ada --}}
                                <p class="mt-3 text-gray-500">
                                    Rp. 
                                    @php
                                        echo number_format($menu->harga , 0, ',', '.');
                                    @endphp
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
                        @endif
                    @endforeach
                </div>
                <!-- End Grid -->
            </div>
            <!-- End Card Blog -->
        </div>
        </div>
    @endforeach
    <!-- End FoodController -->
  </div>


@endsection
