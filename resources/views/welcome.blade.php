@extends('layouts.app')
@section('content')
    <div class="px-3">
        <div class="md:flex items-center mt-5">
            <h1 class="font-bold text-3xl">Explore</h1>
            <p class="text-md self-end md:ml-3">the ideal dish to satisfy your unforgiving hunger. Remember, a shared meal tastes just much better.</p>
        </div>
        <div class="grid grid-cols-1 mt-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4 mb-10">
            <livewire:card.breakfast-card/>
            <livewire:card.lunch-card/>
            <livewire:card.dinner-card/>
            
        </div>
    
        {{-- <div class="">
            <div class="grid grid-cols-1 mt-10 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 gap-y-14 place-items-center">
                <livewire:card.chef-card/>
                <livewire:card.chef-card/>
                <livewire:card.chef-card/>
                <livewire:card.chef-card/>
                <livewire:card.chef-card/>
                <livewire:card.chef-card/>
                <livewire:card.chef-card/>
                <livewire:card.card/>
                <livewire:card.card/>
                <livewire:card.card/>
                <livewire:card.card/>
                <livewire:card.card/>
                <livewire:card.card/> 
                <livewire:card.card/>
                <livewire:card.card/>
                <livewire:card.card/>
                <livewire:card.card/>   
                <livewire:card.card/>
                <livewire:card.card/>
                <livewire:card.card/>
                <livewire:card.card/>
                <livewire:card.card/>
                <livewire:card.card/>
                <livewire:card.card/> 
                <livewire:card.card/>
                <livewire:card.card/>
                <livewire:card.card/>
                <livewire:card.card/>    
    
                
                
            </div>
        </div> --}}
    
        <div class="mt-10 border-t-2">
            <h1 class="font-bold text-3xl">Find a Chef</h1>
            <p class="text-md">Hosting friends over, a reunion, an event or missed your ex? Find a chef for a magical, savory meal. We've got you!</p>
        </div>
    
        <div class="grid grid-cols-1 mt-20 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 ">
            <livewire:card.chef-card/>
            <livewire:card.chef-card/>
            <livewire:card.chef-card/>
            <livewire:card.chef-card/>
            <livewire:card.chef-card/>
        </div>
        {{-- <div class="border-2 border-red-500"></div> --}}
        <div class="mt-10 border-t-2">
            <div class="md:flex">
                <h1 class="font-bold text-3xl ">Hungry much?</h1>
                <p class="text-md self-end">Find the best of the best sweet moments nearest you. From Gugulethu To Lisbon, get the best dishes and remember to tell the tale of tasty, good food.</p>
            </div>
            
        </div>
        
        <div>
            <livewire:card.interested-card/>      
        </div>

        <div class="mt-10 border-t-2">
            <div class="">
                <h1 class="font-bold text-3xl ">Eatier Events</h1>
                <p class="text-md">Explore and find events nearby</p>
            </div>          
        </div>
        <div class="grid grid-cols-1 mt-10 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 ">
            <livewire:card.card/>
            <livewire:card.card/>
            <livewire:card.card/>
            <livewire:card.card/>
            <livewire:card.card/>
        </div>

        <div class="mt-10 border-t-2">
            <div class="">
                <h1 class="font-bold text-3xl ">Features</h1>
            </div>          
        </div>
        <div class="grid grid-cols-1 mt-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 mb-10 place-items-center">
            <livewire:card.restaurant-card/>
            <livewire:card.restaurant-card/>
            <livewire:card.restaurant-card/>
            <livewire:card.restaurant-card/>
            <livewire:card.restaurant-card/>
        </div>


        <div class="mt-10 border-t-2 mb-5">
            <div class="">
                <h1 class="font-bold text-3xl ">Taste worldwide flavours</h1>
                <p>Travelling to another country for business, to wind down or just filled with curiosity? Discover your world to create the most cherishable through food. Lekker times.</p>
            </div>          
        </div>
        <div class="bg-cover bg-center h-full" style="background-image: url('https://plus.unsplash.com/premium_photo-1676982098817-844e52754258?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTN8fHRvdXJpc218ZW58MHx8MHx8fDA%3D')">
            <div class="grid grid-cols-1 pt-20 sm:grid-cols-2 md:grid-cols-3 gap-4 mb-10 place-items-center">
                <div>
                    <h1 class="text-center font-bold text-2xl">Africa</h1>
                    <livewire:card.africa-card/>
                </div>
                <div>
                    <h1 class="text-center font-bold text-2xl">North America</h1>
                    <livewire:card.north-america-card/>
                </div>
                <div>
                    <h1 class="text-center font-bold text-2xl">Europe</h1>
                    <livewire:card.europe-card/>
                </div>
                <div>
                    <h1 class="text-center font-bold text-2xl">Asia</h1>
                    <livewire:card.asia-card/>
                </div>
                <div>
                    <h1 class="text-center font-bold text-2xl">South America</h1>
                    <livewire:card.south-america-card/>
                </div>
                <div>
                    <h1 class="text-center font-bold text-2xl">Oceania</h1>
                    <livewire:card.oceania-card/>
                </div>
                
                
            </div>
          </div>

        
    </div>
@endsection

