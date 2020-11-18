$(document).ready(function () {
$('.gallery_owl').owlCarousel({
    responsiveClass:true,
    lazyLoad : true,
    items:1,
    loop: true,
    margin: 0,
    nav: true,
    dots: true,
})
 $('.gallery_single_owl').owlCarousel({
        responsiveClass:true,
        items:1,
        lazyLoad : true,
        loop: true,
        margin: 0,
        nav: true,
        dots: true,
    })
    
$('.blogs_owl').owlCarousel({
    responsiveClass:true,
    items:4,
    loop: true,
    margin: 20,
    lazyLoad : true,
    nav: true,
    dots: true,
    responsive: {
        0: {
            items: 1,
            nav: true
        },

        850: {
            items: 2,
            nav: true,
        },
        1400: {
            items: 4,
            nav: true,
        }
    }
})

/* $('.showMoreAm').click(function() {
  $(".property-single-facilities").fadeIn();
  $(".property-single-facilities").animate({marginTop:"20px"},300);
}); */

 $(".showMoreAm").click(function(){
  $(".property-single-facilities").slideToggle('400');
}); 

$('.secondCarForm').hide();
$('.nextCarForm').on(
  'click',
  function() 
  {
    $('.firstCarForm, .secondCarForm').toggle()
  }
);
$('.stepBackCar').on(
    'click',
    function() 
    {
      $('.secondCarForm, .firstCarForm').toggle()
    }
  );
});
