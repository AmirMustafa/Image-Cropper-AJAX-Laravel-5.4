 
	// stop conflict js	
    var $ = jQuery.noConflict(); 
		
	// banner timeset slider animation	
		$(document).ready(function()  { 
		$('#myCarousel').carousel({
			interval: 7000, cycle: true 
			}); 
		});
		
  
  
$(document).ready(function () {    
   
	// tab panel fixed in some scrol amount 
    //$('#details-menu').affix({ offset: { top: $('#details-menu').offset().top } });
   // $(".affix-tab").affix({ offset: { top: $(".affix-tab").offset().top } });
	
	
	/*mobile no js*/
	$("#mobile-number").intlTelInput();
	
	
	/*txtEditor js*/
	$("#txtEditor").Editor();
	
	
	/*Scroll Spy*/
	$('body').scrollspy({ target: '#spy', offset:80});
	
	
	/*Smooth link animation
    $('#spy a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 500);
                return false;
            }
        }
    });
	*/
	
	/*tooltip js*/
	$('[data-toggle="tooltip"]').tooltip();  
	/*popover js*/	
	  $('[data-toggle="popover"]').popover(); 
	  /*popover auti hide js*/	
	 $('[data-toggle="popover"]').click(function(){
        $('#cokepop').popover('show');
    setTimeout(function() {
        $('.popover').fadeOut('slow',function() {}); 
    },5000);
        
    });

	
	/*Smooth GO-TO-TOP animation
	// hide #back-top first
	$(".gotop").hide();
	
	// fade in #back-top
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('.gotop').fadeIn();
			} else {
				$('.gotop').fadeOut();
			}
		});

		// scroll body to 0px on click
		$('.gotop a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});
	*/
	
	// setting's setting paged save-and-cancel button-div js

	$(window).scroll(function() {    
			var scroll = $(window).scrollTop();
			if (scroll >= 840) {
				$(".save-div").removeClass("sticky-footer");
				//$(".save-div").css(' ',' ').addClass("sticky-footer");
			}
			else{
				//$(".save-div").removeClass("sticky-footer");
				$(".save-div").css(' ',' ').addClass("sticky-footer");
			}
		});
		
	// setting's nav-button on capaign page js
	$(window).scroll(function() {    
			var scroll = $(window).scrollTop();
			if (scroll >= 550) {
				$("#details-menu").addClass("affix-tab"); 
			}
			else{ 
				$("#details-menu").css(' ',' ').removeClass("affix-tab");
			}
		});
		
		
	// helpbox js	
		$("#hlp_show").click(function(){
			$(".help_box").toggle();
		});
	






}); 

if ( $('#date')[0].type != 'date' ) $('#date').datepicker();

 //password strength check js
$(document).ready(function($) {	
$('#NewPassword').strength({
            strengthClass: 'strength',
            strengthMeterClass: 'strength_meter',
            strengthButtonClass: 'button_strength',
            strengthButtonText: '<img src="img/eye.png" alt="show password" />',
            strengthButtonTextToggle: '<i class="fa fa-eye-slash"><i/>'
        });
			//show hide password on clicked and release
	            $('.button_strength').click( function(e) {          
                    $('input[type="text"][data-password="'+thisid+'"]').hide();
                    $('input[type="password"][data-password="'+thisid+'"]').show().focus();
                    //$('a[data-password-button="'+thisid+'"]').removeClass(thisclass).html(strengthButtonText);            
				});
				$('.button_strength').mousedown( function(e) {				
						$('input[type="text"][data-password="'+thisid+'"]').show().focus();
						$('input[type="password"][data-password="'+thisid+'"]').hide();
						//$('a[data-password-button="'+thisid+'"]').addClass(thisclass).html(strengthButtonTextToggle);
			   
				});
			//show hide password on clicked and release end js
		
});
 // input type price with comma js
$(document).ready(function(){
    $("input[data-type='number']").keyup(function(event){
      // skip for arrow keys
      if(event.which >= 37 && event.which <= 40){
          event.preventDefault();
      }
      var $this = $(this);
      var num = $this.val().replace(/,/gi, "");
      var num2 = num.split(/(?=(?:\d{3})+$)/).join(",");
      console.log(num2);
      // the following line has been simplified. Revision history contains original.
      $this.val(num2);
  });
});


 // newsletter js

 
 // only type no js
 function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : evt.keyCode
    return !(charCode > 31 && (charCode < 44 || charCode > 57));
}

// only type alpha js
        function onlyAlphabets(event) {
			var char =event.which;
			if(char >31 && char != 32 && (char < 65 || char >90) && (char < 97 || char >122))
			{
				return false;
			}
        }

