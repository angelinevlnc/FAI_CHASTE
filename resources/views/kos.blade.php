@extends('main')
@section('content')

<div>
    <!-- Card Blog -->
    <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14 mt-10">
        <h2 class="text-2xl font-bold md:text-4xl md:leading-tight">Available Room</h2>
        <p class="mt-1 text-gray-600 ">The room options include only two types, providing a choice between two distinct accommodations.</p>
    </div>
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Grid -->
        <div class="grid lg:grid-cols-2 lg:gap-y-16 gap-10">
        <!-- Card -->
        <a class="group rounded-xl overflow-hidden" href="kos-detail">
            <div class="sm:flex">
            <div class="flex-shrink-0 relative rounded-xl overflow-hidden w-full sm:w-56 h-44">
                <img class="group-hover:scale-105 transition-transform duration-500 ease-in-out w-full h-full absolute top-0 start-0 object-cover rounded-xl"
                src="/kos1.png" alt="Image Description">
            </div>

            <div class="grow mt-4 sm:mt-0 sm:ms-6 px-4 sm:px-0">
                <h3 class="text-xl font-semibold text-gray-800 group-hover:text-gray-600">
                A-12
                </h3>
                <p class="mt-3 text-gray-600">
                Produce professional, reliable streams easily leveraging Preline's innovative broadcast studio
                </p>
                <p class="mt-4 inline-flex items-center gap-x-1 text-blue-600 decoration-2 hover:underline font-medium">
                Make Reservation
                <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                </p>
            </div>
            </div>
        </a>
        <!-- End Card -->

        <!-- Card -->
        <a class="group rounded-xl overflow-hidden" href="kos-detail">
            <div class="sm:flex">
            <div class="flex-shrink-0 relative rounded-xl overflow-hidden w-full sm:w-56 h-44">
                <img class="group-hover:scale-105 transition-transform duration-500 ease-in-out w-full h-full absolute top-0 start-0 object-cover rounded-xl"
                src="/kos1.png" alt="Image Description">
            </div>

            <div class="grow mt-4 sm:mt-0 sm:ms-6 px-4 sm:px-0">
                <h3 class="text-xl font-semibold text-gray-800 group-hover:text-gray-600">
                A-13
                </h3>
                <p class="mt-3 text-gray-600">
                Optimize your in-person experience with best-in-class capabilities like badge printing and lead retrieval
                </p>
                <p class="mt-4 inline-flex items-center gap-x-1 text-blue-600 decoration-2 hover:underline font-medium">
                Make Reservation
                <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                </p>
            </div>
            </div>
        </a>
        <!-- End Card -->

        <!-- Card -->
        <a class="group rounded-xl overflow-hidden" href="kos-detail">
            <div class="sm:flex">
            <div class="flex-shrink-0 relative rounded-xl overflow-hidden w-full sm:w-56 h-44">
                <img class="group-hover:scale-105 transition-transform duration-500 ease-in-out w-full h-full absolute top-0 start-0 object-cover rounded-xl"
                src="/kos1.png" alt="Image Description">
            </div>

            <div class="grow mt-4 sm:mt-0 sm:ms-6 px-4 sm:px-0">
                <h3 class="text-xl font-semibold text-gray-800 group-hover:text-gray-600">
                A-14
                </h3>
                <p class="mt-3 text-gray-600">
                How to make objectives and key results work for your company
                </p>
                <p class="mt-4 inline-flex items-center gap-x-1 text-blue-600 decoration-2 hover:underline font-medium">
                Make Reservation
                <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                </p>
            </div>
            </div>
        </a>
        <!-- End Card -->

        <!-- Card -->
        <a class="group rounded-xl overflow-hidden" href="kos-detail">
            <div class="sm:flex">
            <div class="flex-shrink-0 relative rounded-xl overflow-hidden w-full sm:w-56 h-44">
                <img class="group-hover:scale-105 transition-transform duration-500 ease-in-out w-full h-full absolute top-0 start-0 object-cover rounded-xl"
                src="/kos1.png" alt="Image Description">
            </div>

            <div class="grow mt-4 sm:mt-0 sm:ms-6 px-4 sm:px-0">
                <h3 class="text-xl font-semibold text-gray-800 group-hover:text-gray-600">
                B-10
                </h3>
                <p class="mt-3 text-gray-600">
                Six approaches to bringing your People strategy to life
                </p>
                <p class="mt-4 inline-flex items-center gap-x-1 text-blue-600 decoration-2 hover:underline font-medium">
                Make Reservation
                <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                </p>
            </div>
            </div>
        </a>
        <!-- End Card -->
        </div>
        <!-- End Grid -->
    </div>
  <!-- End Card Blog -->
</div>
@endsection
