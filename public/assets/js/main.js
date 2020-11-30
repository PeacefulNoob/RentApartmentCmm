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
    $('.firstCarForm, .secondCarForm').toggle().prop('required',false)
  }
);
$('.stepBackCar').on(
    'click',
    function()
    {
      $('.secondCarForm, .firstCarForm').toggle().prop('required',false)
    }
  );


        // page is now ready, initialize the calendar...

});


(function() {
  $('.form-control').keyup(function() {
      var empty = false;
      $('.form-control').each(function() {
          if ($(this).val() == '') {
              empty = true;
          }
      });

      if (empty) {
          $('.sendInq').attr('disabled', 'disabled');
      } else {
          $('.sendInq').removeAttr('disabled');
      }
  });
});

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
      form.addEventListener('.nextCarForm', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();

