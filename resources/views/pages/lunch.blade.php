@extends('layouts.app')
@section('content')

  <div class= "mx-2 mt-3">
    <div class="max-w-6xl mx-auto text-xl font-bold">Dinner</div>
  {{-- ads  --}}
    <div class="ad1 max-w-6xl h-36 bg-red-500 mx-auto">
      <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="w-full h-full object-cover ">
    </div>

    <div class="flex py-10 max-w-6xl mx-auto ">
        <div class="font-bold mr-1">Dinner</div>
        <div> is obviously the best way to get you started. Our breakie deals are sure to satisfy you, from Mediterranean style breakfast to your local favourite options, choose from a select range of offerings.</div>
    </div>

    <div class="flex w-full h-screen">
        {{-- ads --}}
        <div class=" h-full w-[200px] ">
          <div class="border-2 rounded-t-lg border-gray-600">
            <h1 class="text-center font-bold mb-3 border-b-2 p-1 border-gray-600">Filter by</h1>

            <div class="mb-3">
                <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="text-black  focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center font-bold w-full " type="button">Price <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
                
                <!-- Dropdown menu -->
                <div id="dropdownHover" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                      <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Low to High</a>
                      </li>
                      <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">High to Low</a>
                      </li>
                      
                    </ul>
                </div>
            </div>

            <div class="mb-3">
                <button id="dropdownHoverButton2" data-dropdown-toggle="dropdownHover2" data-dropdown-trigger="hover" class="text-black  focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center font-bold w-full " type="button">Add-ons <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
                
                <!-- Dropdown menu -->
                <div id="dropdownHover2" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton2">
                      <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                      </li>
                      <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                      </li>
                      <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                      </li>
                      <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                      </li>
                    </ul>
                </div>
            </div>

            <div class="mb-3">
              <button id="dropdownHoverButton3" data-dropdown-toggle="dropdownHover3" data-dropdown-trigger="hover" class="text-black  focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center font-bold w-full " type="button">Meal <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                  </svg>
              </button>
              
              <!-- Dropdown menu -->
              <div id="dropdownHover3" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                  <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton3">
                    <li>
                      <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                    </li>
                    <li>
                      <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                    </li>
                    <li>
                      <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                    </li>
                    <li>
                      <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                    </li>
                  </ul>
              </div>
            </div>

            <div class="mb-3">
              <button id="dropdownHoverButton4" data-dropdown-toggle="dropdownHover4" data-dropdown-trigger="hover" class="text-black  focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center font-bold w-full " type="button">City/Town <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                  </svg>
              </button>
              
              <!-- Dropdown menu -->
              <div id="dropdownHover4" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                  <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton4">
                    <li>
                      <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                    </li>
                    <li>
                      <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                    </li>
                    <li>
                      <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                    </li>
                    <li>
                      <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                    </li>
                  </ul>
              </div>
            </div>

            <div class="mb-3">
                <button id="dropdownHoverButton4" data-dropdown-toggle="dropdownHover4" data-dropdown-trigger="hover" class="text-black  focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center font-bold w-full " type="button">Drinks <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
                
                <!-- Dropdown menu -->
                <div id="dropdownHover4" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton4">
                      <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                      </li>
                      <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                      </li>
                      <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                      </li>
                      <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                      </li>
                    </ul>
                </div>
              </div>

              <div class="mb-3">
                <button id="dropdownHoverButton4" data-dropdown-toggle="dropdownHover4" data-dropdown-trigger="hover" class="text-black  focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center font-bold w-full " type="button">Dessert <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
                
                <!-- Dropdown menu -->
                <div id="dropdownHover4" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton4">
                      <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                      </li>
                      <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                      </li>
                      <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                      </li>
                      <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                      </li>
                    </ul>
                </div>
              </div>

            <div class="mb-2">
              <button id="dropdownHoverButton5" data-dropdown-toggle="dropdownHover5" data-dropdown-trigger="hover" class="text-black  focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center font-bold w-full " type="button">Bev. <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                  </svg>
              </button>
              
              <!-- Dropdown menu -->
              <div id="dropdownHover5" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                  <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton5">
                    <li>
                      <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                    </li>
                    <li>
                      <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                    </li>
                    <li>
                      <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                    </li>
                    <li>
                      <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                    </li>
                  </ul>
              </div>
            </div>
          </div>
          <div class="flex flex-col gap-2 mt-1">
            <div>
              <img src="https://images.unsplash.com/photo-1615282720169-46f05893ce8c?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8bWFjZG9uYWxkfGVufDB8fDB8fHww" alt="" class="w-full h-32 object-cover">
            </div>
      
            <div>
              <img src="https://images.unsplash.com/photo-1615282720169-46f05893ce8c?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8bWFjZG9uYWxkfGVufDB8fDB8fHww" alt="" class="w-full h-36 object-cover">
            </div>
          </div>

        </div>

        <div class="h-full w-full grid grid-cols-3 mx-1 gap-4 overflow-y-auto">
            {{-- <livewire:card.breakfast-card/>
            <livewire:card.breakfast-card/>
            <livewire:card.breakfast-card/>
            <livewire:card.breakfast-card/> --}}
            @include('inc.card.breakfast')
            @include('inc.card.breakfast')
            @include('inc.card.breakfast')
            @include('inc.card.breakfast')
            @include('inc.card.breakfast')
            @include('inc.card.breakfast')
            @include('inc.card.breakfast')
            @include('inc.card.breakfast')
            @include('inc.card.breakfast')
            @include('inc.card.breakfast')
            @include('inc.card.breakfast')
            @include('inc.card.breakfast')
            @include('inc.card.breakfast')
            @include('inc.card.breakfast')
            @include('inc.card.breakfast')
            @include('inc.card.breakfast')

        </div>
    </div>
  </div>
@endsection