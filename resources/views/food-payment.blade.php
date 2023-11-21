@extends('main')
@section('content')

<!-- Card Section -->
<div class="max-w-2xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Card -->
    <div class="bg-white rounded-xl shadow p-4 sm:p-7 ">
      <div class="text-center mb-8">
        <h2 class="text-2xl md:text-3xl font-bold text-gray-800 ">
          Payment
        </h2>
        <p class="text-sm text-gray-600 ">
          Your order details
        </p>
      </div>

      <form class="mt-5">
        <!-- Section -->
        <div class="mt-5 py-6 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 ">
          <label for="af-payment-billing-contact" class="inline-block text-sm font-medium ">
            Billing contact
          </label>

          <div class="mt-2 space-y-3">
            <input id="af-payment-billing-contact" type="text" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="First Name">
            <input type="text" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Last Name">
            <input type="text" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Phone Number">
          </div>
        </div>
        <!-- End Section -->



        <!-- Section -->
        <div class="mt-5 py-6 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 ">
          <label for="af-payment-payment-method" class="inline-block text-sm font-medium ">
            Subtotal
          </label>

          <div class="mt-2 space-y-3">
            <input id="af-payment-payment-method" type="text" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="blalba">
            <input type="text" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="balalb">

          </div>
          <p>10.000</p>

        </div>
        <!-- End Section -->
      </form>

      <div class="mt-5 flex justify-end gap-x-2">
        <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none ">
          Cancel
        </button>
        <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none ">
          Make Order
        </button>
      </div>
    </div>
    <!-- End Card -->
  </div>
  <!-- End Card Section -->

@endsection
