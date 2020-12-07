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
/* 

//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".submit").click(function(){
	return false;
})


 */