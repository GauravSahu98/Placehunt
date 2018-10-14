//  AOS.init({
//  	duration: 800,
//  	easing: 'slide'
//  });

var tagsBoxes = {
    el: [],
    data: [],
    init: function() {
        this.el = document.getElementsByClassName('tagsbox');
    },
    indexOf: function (val) {
        for (var i=0; i<this.el.length; i++) {
            if (this.el.item(i) === val)
                return i;
        }
        return -1;    
    },
    addTag: function (obj) {
        var box = obj.parentElement.parentElement;
        if (box) {
            var el_index = this.indexOf(box);
            if (el_index > -1) {
                var value = box.querySelector('input[type="textbox"]').value;
                console.log(value);
                if (value) {
                    if (!this.data[el_index])
                        this.data[el_index] = [];
                    this.data[el_index].push(value);
                    var tagContainer = box.getElementsByClassName('tags-container')[0];
                    console.log(tagContainer);
                    var newTag = document.createElement('div');
                    newTag.setAttribute("data-tagname", value);
                    newTag.style = "margin: 3px 3px; display: inline-block; padding: 5px 10px; \
                    background-color: rgb(24, 46, 82); color: white;";
                    newTag.innerHTML = value + '&nbsp;&nbsp;<a href="javascript:void(0)" onclick="tagsBoxes.removeTag(this)"><i class="fas fa-times"></i></a>';
                    tagContainer.appendChild(newTag);
                }
            }
        }
    },
    removeTag: function(obj) {
        var box = obj.parentElement.parentElement.parentElement;
        if (box) {
            var el_index = this.indexOf(box);
            if (el_index > -1) {
                var tag = obj.parentElement;
                var value = tag.getAttribute("data-tagname");
                var index = this.data[el_index].indexOf(value);
                this.data[el_index].splice(index, 1);
                obj.parentElement.parentElement.removeChild(obj.parentElement);
            }
        }
    },
    getTags: function (element) {
        var el_index = this.indexOf(element);
        if ( el_index > -1) {
            return this.data[el_index];
        }
        return null;
    },
};

tagsBoxes.init();

function companySignUp() {
    var data = { 
        "name" : document.getElementById('company-name').value,
        "email" : document.getElementById('company-email').value,
        "skills" : tagsBoxes.getTags(document.getElementById('company-skills')),
        "ctc" : parseInt(document.getElementById('company-ctc').value),
        "jobs" : parseInt(document.getElementById('company-jobs').value),
        "positions": tagsBoxes.getTags(document.getElementById('company-positions')),
    };
    console.log(data);
    $.ajax('company_signup.php', {
        "method" : "POST",
        "data": { "data" : JSON.stringify(data) },
        "success": function(data, status, xhr) {
            alert(xhr.responseText);
        },
    });
  /*  var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            alert(xhr.responseText);
        }
    }
    xhr.open('POST','company_signup.php');
    console.log(JSON.stringify(data));
    xhr.send(JSON.stringify(data));*/

}

 AOS.init({
 	duration: 800,
 	easing: 'slide'
 });

$(document).ready(function($) {

	"use strict";

	$(window).stellar({
    responsive: false,
    parallaxBackgrounds: true,
    parallaxElements: true,
    horizontalScrolling: false,
    hideDistantElements: false,
    scrollProperty: 'scroll'
  });


	// loader
	var loader = function() {
		setTimeout(function() { 
			if($('#ftco-loader').length > 0) {
				$('#ftco-loader').removeClass('show');
			}
		}, 1);
	};
	loader();

	var carousel = function() {
		$('.carousel').owlCarousel({
			loop: true,
			margin: 10,
			nav: true,
			stagePadding: 5,
			nav: false,
			navText: ['<span class="icon-chevron-left">', '<span class="icon-chevron-right">'],
			responsive:{
				0:{
					items: 1
				},
				600:{
					items: 2
				},
				1000:{
					items: 3
				}
			}
		});

		$('.nonloop-block-13').owlCarousel({
	    center: false,
	    items: 1,
	    loop: false,
			stagePadding: 0,
	    margin: 20,
	    nav: true,
			navText: ['<span class="icon-arrow_back">', '<span class="icon-arrow_forward">'],
	    responsive:{
        600:{
        	margin: 20,
          items: 2
        },
        1000:{
        	margin: 20,
          items: 2
        },
        1200:{
        	margin: 20,
          items: 3
        }
	    }
		});

		$('.loop-block-31').owlCarousel({
			loop: false,
			mouseDrag: false,
			touchDrag: false,
			margin: 0,
			nav: true,
			items: 1,
			autoplay: true,
			stagePadding: 0,
			nav: true,
			navText: ['<span class="icon-arrow_back">', '<span class="icon-arrow_forward">'],
			animateOut: 'fadeOut',
    	animateIn: 'fadeIn',
		});

		$('.nonloop-block-11').owlCarousel({
	    center: false,
	    items: 1,
	    loop: false,
			stagePadding: 0,
	    margin: 30,
	    nav: true,
			navText: ['<span class="icon-chevron-left">', '<span class="icon-chevron-right">'],
	    responsive:{
        600:{
        	stagePadding: 0,
          items:1
        },
        800:{
        	stagePadding: 40,
          items:2
        },
        1000:{
        	stagePadding: 80,
          items:3
        }
	    }
		});

		$('.nonloop').owlCarousel({
	    center: true,
	    items:2,
	    loop:false,
	    margin:10,
	    nav: true,
			navText: ['<span class="icon-arrow_back">', '<span class="icon-arrow_forward">'],
	    responsive:{
        600:{
          items:2
        }
	    }
		});
	};
	carousel();

	// scroll
	var scrollWindow = function() {
		$(window).scroll(function(){
			var $w = $(this),
					st = $w.scrollTop(),
					navbar = $('.ftco_navbar'),
					sd = $('.js-scroll-wrap');

			if (st > 150) {
				if ( !navbar.hasClass('scrolled') ) {
					navbar.addClass('scrolled');	
				}
			} 
			if (st < 150) {
				if ( navbar.hasClass('scrolled') ) {
					navbar.removeClass('scrolled sleep');
				}
			} 
			if ( st > 350 ) {
				if ( !navbar.hasClass('awake') ) {
					navbar.addClass('awake');	
				}
				
				if(sd.length > 0) {
					sd.addClass('sleep');
				}
			}
			if ( st < 350 ) {
				if ( navbar.hasClass('awake') ) {
					navbar.removeClass('awake');
					navbar.addClass('sleep');
				}
				if(sd.length > 0) {
					sd.removeClass('sleep');
				}
			}
		});
	};
	scrollWindow();

	var counter = function() {
		
		$('#section-counter').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('ftco-animated') ) {

				var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',')
				$('.ftco-number').each(function(){
					var $this = $(this),
						num = $this.data('number');
						console.log(num);
					$this.animateNumber(
					  {
					    number: num,
					    numberStep: comma_separator_number_step
					  }, 7000
					);
				});
				
			}

		} , { offset: '95%' } );

	}
	counter();
	
	

	var contentWayPoint = function() {
		var i = 0;
		$('.ftco-animate').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('ftco-animated') ) {
				
				i++;

				$(this.element).addClass('item-animate');
				setTimeout(function(){

					$('body .ftco-animate.item-animate').each(function(k){
						var el = $(this);
						setTimeout( function () {
							var effect = el.data('animate-effect');
							if ( effect === 'fadeIn') {
								el.addClass('fadeIn ftco-animated');
							} else if ( effect === 'fadeInLeft') {
								el.addClass('fadeInLeft ftco-animated');
							} else if ( effect === 'fadeInRight') {
								el.addClass('fadeInRight ftco-animated');
							} else {
								el.addClass('fadeInUp ftco-animated');
							}
							el.removeClass('item-animate');
						},  k * 50, 'easeInOutExpo' );
					});
					
				}, 100);
				
			}

		} , { offset: '95%' } );
	};
	contentWayPoint();

	// navigation
	var OnePageNav = function() {
		$(".smoothscroll[href^='#'], #ftco-nav ul li a[href^='#']").on('click', function(e) {
		 	e.preventDefault();

		 	var hash = this.hash,
		 			navToggler = $('.navbar-toggler');
		 	$('html, body').animate({
		    scrollTop: $(hash).offset().top
		  }, 700, 'easeInOutExpo', function(){
		    window.location.hash = hash;
		  });


		  if ( navToggler.is(':visible') ) {
		  	navToggler.click();
		  }
		});
		$('body').on('activate.bs.scrollspy', function () {
		  console.log('nice');
		})
	};
	OnePageNav();


	// magnific popup
	$('.image-popup').magnificPopup({
    type: 'image',
    closeOnContentClick: true,
    closeBtnInside: false,
    fixedContentPos: true,
    mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
     gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    },
    image: {
      verticalFit: true
    },
    zoom: {
      enabled: true,
      duration: 300 // don't foget to change the duration also in CSS
    }
  });

  $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,

    fixedContentPos: false
  });

  $('#checkin_date, #checkout_date').datepicker({
	  'format': 'd MM, yyyy',
	  'autoclose': true
	});



});

$(function() {
	$(".btn").click(function() {
		$(".form-signin").toggleClass("form-signin-left");
    $(".form-signup").toggleClass("form-signup-left");
    $(".frame").toggleClass("frame-long");
    $(".signup-inactive").toggleClass("signup-active");
    $(".signin-active").toggleClass("signin-inactive");
    $(".forgot").toggleClass("forgot-left");   
    $(this).removeClass("idle").addClass("active");
	});
});

$(function() {
	$(".btn-signup").click(function() {
  $(".nav").toggleClass("nav-up");
  $(".form-signup-left").toggleClass("form-signup-down");
  $(".success").toggleClass("success-left"); 
  $(".frame").toggleClass("frame-short");
	});
});

$(function() {
	$(".btn-signin").click(function() {
  $(".btn-animate").toggleClass("btn-animate-grow");
  $(".frame").toggleClass("frame-short");
  $(".forgot").toggleClass("forgot-fade");
	});
});