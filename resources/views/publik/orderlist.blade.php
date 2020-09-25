@extends('publik/layouts/apps')
@section('content')
<section class="text-gray-700 body-font">
    
    <div class="container px-5 py-24 mx-auto">
        <h1 class="font-black text-lg title-font font-big mb-5">
            
            Keranjang
        </h1>
        <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
            <div class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center rounded-full bg-red-100 text-red-500 flex-shrink-0">
                <img class="hover:grow hover:shadow-lg" src="https://images.unsplash.com/photo-1555982105-d25af4182e4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80">
            </div>
            <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Product name</h2>
                <p class="leading-relaxed text-base">Jumlah barang : </p>
                <p class="leading-relaxed text-base">Harga barang : </p>
                <a class="mt-3 text-red-500 inline-flex items-center">Lihat barang
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
                </a>
            </div>
        </div>
        <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
            <div class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center rounded-full bg-red-100 text-red-500 flex-shrink-0">
                <img class="hover:grow hover:shadow-lg" src="https://images.unsplash.com/photo-1555982105-d25af4182e4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80">
            </div>
            <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Product name</h2>
                <p class="leading-relaxed text-base">Jumlah barang : </p>
                <p class="leading-relaxed text-base">Harga barang : </p>
                <a class="mt-3 text-red-500 inline-flex items-center">Lihat barang
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
                </a>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 overflow-hidden sm:-mx-3 md:-mx-3 lg:-mx-3 xl:-mx-3 ">

            <div class="my-3 px-3 w-full overflow-hidden sm:my-3 sm:px-3 sm:w-1/2 md:my-3 md:px-3 md:w-1/2 lg:my-3 lg:px-3 lg:w-1/2 xl:my-3 xl:px-3 xl:w-1/2">
                <h1>Jumlah Barang :</h1>
            </div>

            <div class="my-3 px-3 w-full overflow-hidden sm:my-3 sm:px-3 sm:w-1/2 md:my-3 md:px-3 md:w-1/2 lg:my-3 lg:px-3 lg:w-1/2 xl:my-3 xl:px-3 xl:w-1/2 ">
                <h1>Jumlah Harga :</h1>
            </div>

        </div>
        <hr>
        <div class="flex">
            <a href="{{url('/checkout')}}" class=" mt-5 text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-red-600 rounded text-lg">Checkout</a>
        </div>
        
    </div>
</section>
@endsection