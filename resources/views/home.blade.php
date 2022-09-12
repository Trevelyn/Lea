@extends('layouts.default')

@section('page-content')
<?php
dd("home test");
?>

<section class="w-full bg-cover bg-center" style="height:40rem; background-image: url(https://images.pexels.com/photos/2422293/pexels-photo-2422293.jpeg?cs=srgb&dl=pexels-jopwell-2422293.jpg&fm=jpg);">
        
        <div class="flex items-center justify-center h-full w-full bg-blue-900 bg-opacity-50">
            <div class="pb-5  text-center">
            <h1 class="text-white text-sm font-semibold md:text-xl">IQ RETAIL GIVES YOU BUSINESS ACCOUNTING AND MANAGEMENT SOLUTIONS DESIGNED TO WORK IN A RETAIL, DISTRIBUTIVE</h1>
                <h1 class="text-white text-sm font-semibold md:text-xl"> AND HOSPITALITY ENVIRONMENT</h1>
            </div>
        </div>
    
</section>

<section>
<div class="container px-5 py-24 mx-auto lg:px-16">
   <div class="">
   <img class="" src="{{asset('images/iq-retail-web-banner-home.jpg')}}" alt="">
   </div>
    <div class="flex justify-center pt-8">
     <a href="https://info.iqretail.co.za/upgrade-to-the-latest-version-of-iq"> <button class="w-48 h-12 rounded-md bg-pink-600 text-white hover:bg-white active:bg-blue-600 text-md">Click here to upgrade</button></a>
    </div>
    <div class="flex justify-center pt-8 text-blue-900 text-sm font-semibold md:text-xl ">
     <h1>BUSINESS SOLUTIONS SIMPLIFIED</h1>
    </div>
    <p class="pt-8 text-gray-400">In the retail, distributive and hospitality industries, your clients want purchase and payment simplicity, while you want effective, accurate control over your business financial transactions. From point of sale to general ledger, you need solutions that suit/fulfil your unique needs and give you complete administrative control.
    </p>
    <p class="pt-8 text-gray-400">That’s why IQ Retail gives you business accounting and management solutions designed to work in a retail, distributive and hospitality environment. We don’t just develop software – we develop legally and legislatively compliant, IFRS-based software that understands your business, and back it up with unbeatable service and support.
    </p>
  </div>
</section>

<section>
<div>
<div class="bg-white w-full pt-4 pr-4 pb-4 pl-4">
  <div class="bg-white sm:py-16 lg:py-10 py-4">
    <div class="sm:px-6 lg:px-8 mx-auto px-4 py-4 max-w-7xl">
      <div class="mx-auto max-w-6xl">
        <div class="lg:grid-cols-5 lg:grid-cols-6 lg:items-start xl:gap-x-8 lg:gap-x-6 grid grid-cols-1 gap-y-10">
          <div class="lg:col-span-3 xl:col-span-4">
            <div class="flex mb-6 ml-0"></div>
            <div class=" rounded  flow-root">
              
                <div class="flex w-auto py-7 gap-4">
                  <div class="flex-shrink-0"></div>
                  <img
                       src="{{asset('images/iqpos.png')}}" alt="" class="object-cover rounded-lg w-69 h-48" alt=""/>
                  <img
                  src="{{asset('images/iqpayroll.png')}}" alt="" class="object-cover rounded-lg w-69 h-48" alt=""/>
                  
                </div>
                <div class="flex w-69 py-7 h-48 gap-4">
                  <div class="flex-shrink-0"></div>
                  <img
                       src="{{asset('images/hospitality.jpg')}}" alt="" class="object-cover rounded-lg w-69 h-48" alt=""/>
                  <img
                       src="{{asset('images/erp-accounting-crm.png')}}" alt="" class="object-cover rounded-lg w-69 h-48" alt=""/>
                 
                </div>
              </div>
            
          </div>
          <div class="lg:col-span-2 lg:sticky lg:top-6 lg:mt-10">
            <div class="bg-white-800 text-gray-50 overflow-hidden border border-gray-500">
              <div class="sm:p-6 lg:p-8 px-4 py-6">
                <div>
                  <div class="mb-4 ml-0">
                    <div class="border-b-2 flex justify-between items-center py-5 bg-blue-900">
                      <p class="font-bold text-lg  text-gray-50 capitalize px-2">Training</p>
                    
                    </div>
                    <div class="flex justify-between items-center py-3">
                      <p class="font-small text-sm text-red-700">IQ Enterprise – 5 Days</p>
                      
                    </div>
                    <div class="flex justify-between items-center">
                      <p class="font-small text-sm text-right text-gray-400">08/15/22 to 08/19/22 - Johannesburg</p>
                    </div>
                    <div class="flex justify-between items-center py-3"><a href="http://www.iqretail.co.za/sites/default/files/training/additionaldocs/IQ%20Training%20Confirmation%202019%20Fill%20in%20PDF.PDF">
                    <button class="border-black h-8  text-center text-sm font-bold inline-flex items-center justify-center
                      border  text-gray-700 py-4 transition-all duration-200 border-transparent
                      focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900 hover:bg-gray-400
                      capitalize" >Book now</button></a>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="mb-4 ml-0">
                    <div class="flex justify-between items-center py-3">
                      <p class="font-small text-sm text-red-700">IQ Enterprise – 5 Days</p>
                      
                    </div>
                    <div class="flex justify-between items-center">
                      <p class="font-small text-sm text-right text-gray-400">08/22/22 to 08/26/22 - Stellenbosch</p>
                    </div>
                    <div class="flex justify-between items-center py-3"><a href="http://www.iqretail.co.za/sites/default/files/training/additionaldocs/IQ%20Training%20Confirmation%202019%20Fill%20in%20PDF.PDF">
                   <button class="border-black h-8  text-center text-sm font-bold inline-flex items-center justify-center
                      border  text-gray-700 py-4 transition-all duration-200 border-transparent
                      focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900 hover:bg-gray-400
                      capitalize" >Book now</button></a>
                    </div>
                  </div>
                </div>
                <div>
                  
                    <div class="flex justify-between items-center py-3">
                      <p class="font-small text-sm text-red-700">IQ Enterprise – 5 Days</p>
                      
                    </div>
                    <div class="flex justify-between items-center">
                      <p class="font-small text-sm text-right text-gray-400">09/12/22 to 09/16/22 - Stellenbosch</p>
                    </div>
                    <div class="flex justify-between items-center py-3"><a href="http://www.iqretail.co.za/sites/default/files/training/additionaldocs/IQ%20Training%20Confirmation%202019%20Fill%20in%20PDF.PDF">
                    <button class="border-black h-8  text-center text-sm font-bold inline-flex items-center justify-center
                      border  text-gray-700 py-4 transition-all duration-200 border-transparent
                      focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900 hover:bg-gray-400
                      capitalize">Book now</button></a>
                    </div>
                  </div>
                </div>
               
               
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 
 
</div> 
</section>

<!-- carousel -->
<section class="bg-gray-300">
    <div class="flex justify-center pt-8 text-blue-900 text-sm font-semibold md:text-xl ">
     <h1>Our Client</h1>
    </div>
   
</section>

@endsection