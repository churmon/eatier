<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-white">
            <div class="relative bg-red-900">
                <div class="w-full ">
                    <img src="https://images.unsplash.com/photo-1552039431-11d2a516d0d4?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="w-full h-[300px] object-cover">
                </div>
                <div class="absolute -bottom-10 left-2">
                    <img src="https://images.unsplash.com/photo-1576487248805-cf45f6bcc67f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjR8fHRvdXJpc218ZW58MHx8MHx8fDA%3D" alt="" class="w-24 h-24 object-cover rounded-md">
                </div>
                
            </div>
            <div class="flex justify-center mt-5 text-black font-bold">
                <h1 class="ml-3">Nobu V & A Waterfront</h1>
                <li class="ml-3">1 Castle Street, Cape Town</li>
                <li class="ml-3">Since 1990</li>
                <li class="ml-3">9 AM - 10 PM/24/7</li>
            </div>
            <div class="mt-6">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio fuga, cumque autem doloremque praesentium modi in rerum impedit accusamus maiores! Officia illum consectetur reprehenderit sit aliquam doloribus eaque, tenetur unde. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium nostrum natus eveniet non? Cupiditate tempora nisi distinctio possimus praesentium consectetur, maxime cumque vel quis? Animi asperiores culpa blanditiis quaerat deserunt.Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio fuga, cumque autem doloremque praesentium modi in rerum impedit accusamus maiores! Officia illum consectetur reprehenderit sit aliquam doloribus eaque, tenetur unde. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium nostrum natus eveniet non? Cupiditate tempora nisi distinctio possimus praesentium consectetur, maxime cumque vel quis? Animi asperiores culpa blanditiis quaerat deserunt.
            </div>
            <div class="mb-6">
                @include('business_account.inc.nav')
            </div>
            
                @yield('content')

           
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


        <script type="text/javascript">
            $(document).ready(function(){
                $('.splide').slick({dots: false,
  infinite: false,
  speed: 300,
  // centerMode: true,
  // centerPadding: '60px',
  slidesToShow: 5,
  slidesToScroll: 1,
  prevArrow:'<button type="button" class="slick-prev"><i class="fa-solid fa-chevron-left text-xs"></i></button>',
  nextArrow:'<button type="button" class="slick-next"><i class="fa-solid fa-chevron-right text-xs"></i></button>',
  responsive: [
    {
      breakpoint: 1300,
      settings: {
        // centerMode: true,
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        // dots: true
      }
    },
    {
      breakpoint: 1024,
      settings: {
        // centerMode: true,
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        // dots: true
      }
    },
    {
      breakpoint: 780,
      settings: {
        infinite: false,
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 580,
      settings: {
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

$('.multiple-items').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  prevArrow:'<button type="button" class="slick-prev"><i class="fa-solid fa-chevron-left text-4xl text-gray-300"></i></button>',
  nextArrow:'<button type="button" class="slick-next"><i class="fa-solid fa-chevron-right text-4xl text-gray-300"></i></button>',
  responsive: [
    {
      breakpoint: 1300,
      settings: {
        // centerMode: true,
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        // dots: true
      }
    },
    {
      breakpoint: 1024,
      settings: {
        // centerMode: true,
        infinite: false,
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        // dots: true
      }
    },
    {
      breakpoint: 780,
      settings: {
        infinite: false,
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 580,
      settings: {
        infinite: false,
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
            });

          </script>
    </body>
</html>
