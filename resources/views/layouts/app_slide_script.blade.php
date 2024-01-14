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
slidesToShow: 7,
slidesToScroll: 1,
prevArrow:'<button type="button" class="slick-prev"><i class="fa-solid fa-chevron-left text-4xl text-gray-300"></i></button>',
nextArrow:'<button type="button" class="slick-next"><i class="fa-solid fa-chevron-right text-4xl text-gray-300"></i></button>',
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
slidesToShow: 6,
slidesToScroll: 1
}
},
{
breakpoint: 580,
settings: {
infinite: false,
slidesToShow: 3,
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