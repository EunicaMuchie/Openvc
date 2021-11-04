//hamburger ----------->
const menuBtn = document.querySelector('.menu-btn');
let menuOpen = false;
menuBtn.addEventListener('click', () => {
    if(!menuOpen){
        menuBtn.classList.add('open');
        menuOpen =true;
    } else{
        menuBtn.classList.remove('open');
        menuOpen = false;
    }
}); 
// end hamburger

//carousel
$(function(){
 $(".show-carousel").slick({
        dots: false,
        vertical: false,
        centerMode: true,
        autoplay:true,
        autoplaySpeed:4000,
        slidesToShow: 2,
        slidesToScroll: 3,
        nextArrow:'',
       prevArrow:'',
       responsive:[
        {
          breakpoint:568,
          settings:{
            slidesToShow:1,
            slidesToScroll:3,
          }
        },
        {
          breakpoint:768,
          settings:{
            slidesToShow:2,
            slidesToScroll:3,
          }
        },
       ]
      });

      $(".fundees").slick({
        dots: false,
        vertical: false,
        centerMode: true,
        autoplay:true,
        autoplaySpeed:4000,
        slidesToShow: 2,
        slidesToScroll: 3,
        nextArrow:'#next',
       prevArrow:'#prev',
       responsive:[
        {
          breakpoint:768,
          settings:{
            slidesToShow:1,
            slidesToScroll:3,
          }
        },
        {
          breakpoint:992,
          settings:{
            slidesToShow:1,
            slidesToScroll:3,
          }
        },

        {
          breakpoint:1200,
          settings:{
            slidesToShow:2,
            slidesToScroll:3,
          }
        },
        
       ]
      });


});


$('.collapse').collapse()