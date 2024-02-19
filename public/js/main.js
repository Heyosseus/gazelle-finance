 AOS.init({
 	duration: 800,
 	easing: 'slide',
 	once: false
 });

jQuery(document).ready(function($) {

	"use strict";


	var siteMenuClone = function() {

		$('.js-clone-nav').each(function() {
			var $this = $(this);
			$this.clone().attr('class', 'site-nav-wrap').appendTo('.site-nav-wrap-mobile');
		});


		setTimeout(function() {

			var counter = 0;
      $('.site-mobile-menu .has-children').each(function(){
        var $this = $(this);

        $this.prepend('<span class="arrow-collapse collapsed">');

        $this.find('.arrow-collapse').attr({
          'data-toggle' : 'collapse',
          'data-target' : '#collapseItem' + counter,
        });

        $this.find('> ul').attr({
          'class' : 'collapse',
          'id' : 'collapseItem' + counter,
        });

        counter++;

      });

    }, 1000);

		$('body').on('click', '.arrow-collapse', function(e) {
      var $this = $(this);
      if ( $this.closest('li').find('.collapse').hasClass('show') ) {
        $this.removeClass('active');
      } else {
        $this.addClass('active');
      }
      e.preventDefault();

    });

		$(window).resize(function() {
			var $this = $(this),
				w = $this.width();

			if ( w > 768 ) {
				if ( $('body').hasClass('offcanvas-menu') ) {
					$('body').removeClass('offcanvas-menu');
				}
			}
		})

		$('body').on('click', '.js-menu-toggle', function(e) {
			var $this = $(this);
			e.preventDefault();

			if ( $('body').hasClass('offcanvas-menu') ) {
				$('body').removeClass('offcanvas-menu');
				$this.removeClass('active');

			} else {
				$('body').addClass('offcanvas-menu');
				$this.addClass('active');

				$( ".responsive-menu" ).attr('style', 'display: ""');
				$( ".site-nav-wrap-mobile" ).attr('style', 'display: ""');
				$( ".responsive-search" ).css( "display", "none" );
				$( ".checkbox-filter-mobile" ).css( "display", "none" );
			}
		})

		$('body').on('click', '.mobile-search-click', function(e) {
			var $this = $(this);
			e.preventDefault();

			if ( $('body').hasClass('offcanvas-menu') ) {
				$('body').removeClass('offcanvas-menu');
				$this.removeClass('active');


			} else {
				$('body').addClass('offcanvas-menu');
				$this.addClass('active');

				$( ".responsive-search" ).css( "display", "" );
				$( ".checkbox-filter-mobile" ).css( "display", "block" );
				$( ".responsive-menu" ).attr('style', 'display: none !important');
				$( ".site-nav-wrap-mobile" ).attr('style', 'display: none !important');
			}
		})

		// click outisde offcanvas
		$(document).mouseup(function(e) {
	    var container = $(".site-mobile-menu");
	    if (!container.is(e.target) && container.has(e.target).length === 0) {
	      if ( $('body').hasClass('offcanvas-menu') ) {
					$('body').removeClass('offcanvas-menu');
				}
	    }
		});
	};
	siteMenuClone();


	var sitePlusMinus = function() {
		$('.js-btn-minus').on('click', function(e){
			e.preventDefault();
			if ( $(this).closest('.input-group').find('.form-control').val() != 0  ) {
				$(this).closest('.input-group').find('.form-control').val(parseInt($(this).closest('.input-group').find('.form-control').val()) - 1);
			} else {
				$(this).closest('.input-group').find('.form-control').val(parseInt(0));
			}
		});
		$('.js-btn-plus').on('click', function(e){
			e.preventDefault();
			$(this).closest('.input-group').find('.form-control').val(parseInt($(this).closest('.input-group').find('.form-control').val()) + 1);
		});
	};
	// sitePlusMinus();


	var siteSliderRange = function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 75, 300 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
	};
	// siteSliderRange();




	var siteCarousel = function () {
		if ( $('.nonloop-block-13').length > 0 ) {
			$('.nonloop-block-13').owlCarousel({
		    center: false,
		    items: 1,
		    loop: true,
				stagePadding: 0,
		    margin: 20,
		    smartSpeed: 1000,
		    autoplay: true,
		    nav: true,
		    responsive:{
	        600:{
	        	margin: 20,
	        	nav: true,
	          items: 2
	        },
	        1000:{
	        	margin: 20,
	        	stagePadding: 0,
	        	nav: true,
	          items: 2
	        }
		    }
			});
			$('.custom-next').click(function(e) {
				e.preventDefault();
				$('.nonloop-block-13').trigger('next.owl.carousel');
			})
			$('.custom-prev').click(function(e) {
				e.preventDefault();
				$('.nonloop-block-13').trigger('prev.owl.carousel');
			})


		}

		$('.slide-one-item').owlCarousel({
	    center: false,
	    items: 1,
	    loop: true,
			stagePadding: 0,
	    margin: 0,
	    smartSpeed: 1500,
	    autoplay: true,
	    pauseOnHover: false,
	    dots: true,
	    nav: true,
	    navText: ['<span class="icon-keyboard_arrow_left">', '<span class="icon-keyboard_arrow_right">']
	  });

	  if ( $('.owl-all').length > 0 ) {
			$('.owl-all').owlCarousel({
		    center: false,
		    items: 1,
		    loop: false,
				stagePadding: 0,
		    margin: 0,
		    autoplay: false,
		    nav: false,
		    dots: true,
		    touchDrag: true,
  			mouseDrag: true,
  			smartSpeed: 1000,
				navText: ['<span class="icon-arrow_back">', '<span class="icon-arrow_forward">'],
		    responsive:{
	        768:{
	        	margin: 30,
	        	nav: false,
	        	responsiveRefreshRate: 10,
	          items: 1
	        },
	        992:{
	        	margin: 30,
	        	stagePadding: 0,
	        	nav: false,
	        	responsiveRefreshRate: 10,
	        	touchDrag: false,
  					mouseDrag: false,
	          items: 3
	        },
	        1200:{
	        	margin: 30,
	        	stagePadding: 0,
	        	nav: false,
	        	responsiveRefreshRate: 10,
	        	touchDrag: false,
  					mouseDrag: false,
	          items: 3
	        }
		    }
			});
		}

	};
	siteCarousel();



	var siteCountDown = function() {

		$('#date-countdown').countdown('2020/10/10', function(event) {
		  var $this = $(this).html(event.strftime(''
		    + '<span class="countdown-block"><span class="label">%w</span> weeks </span>'
		    + '<span class="countdown-block"><span class="label">%d</span> days </span>'
		    + '<span class="countdown-block"><span class="label">%H</span> hr </span>'
		    + '<span class="countdown-block"><span class="label">%M</span> min </span>'
		    + '<span class="countdown-block"><span class="label">%S</span> sec</span>'));
		});

	};
	// siteCountDown();

	var siteDatePicker = function() {

		if ( $('.datepicker').length > 0 ) {
			$('.datepicker').datepicker();
		}

	};
	siteDatePicker();

	var siteSticky = function() {
		$(".js-sticky-header").sticky({topSpacing:0});
	};
	siteSticky();

	// navigation
  var OnePageNavigation = function() {
    var navToggler = $('.site-menu-toggle');

   	$("body").on("click", ".main-menu li a[href^='#'], .smoothscroll[href^='#'], .site-mobile-menu .site-nav-wrap li a[href^='#']", function(e) {
      e.preventDefault();

      var hash = this.hash;

      $('html, body').animate({
        // 'scrollTop': $(hash).offset().top - 50
      }, 600, 'easeInOutExpo', function() {
        // window.location.hash = hash;

      });

    });
  };
  OnePageNavigation();

  var siteScroll = function() {



  	$(window).scroll(function() {

  		var st = $(this).scrollTop();

  		if (st > 100) {
  			$('.js-sticky-header').addClass('shrink');
  		} else {
  			$('.js-sticky-header').removeClass('shrink');
  		}

  	})

  };
  siteScroll();


  var counter = function() {

		$('#about-section').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('ftco-animated') ) {

				var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',')
				$('.number > span').each(function(){
					var $this = $(this),
						num = $this.data('number');
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



});



 function toggleDropdown() {
     var dropdownMenu = document.getElementById("dropdown-menu");
	 var dropdownMenu_responsive = document.getElementById("dropdown-menu-responsive");
	 // var dropdownMenufilter = document.getElementById("dropdown-menu-filter");
     if (dropdownMenu.style.display === "none") {
         dropdownMenu.style.display = "block";
         // dropdownMenufilter.style.display = "none";

     } else {
         dropdownMenu.style.display = "none";
     }

	 if (dropdownMenu_responsive.style.display === "none") {
		 dropdownMenu_responsive.style.display = "block";
		 // dropdownMenufilter.style.display = "none";

	 } else {
		 dropdownMenu_responsive.style.display = "none";
	 }
 }

 function toggleDropdownFilter() {
     var dropdownMenufilter = document.getElementById("dropdown-menu-filter");
     var dropdownMenu = document.getElementById("dropdown-menu");
     if (dropdownMenufilter.style.display === "none") {
         dropdownMenufilter.style.display = "block";
         dropdownMenu.style.display = "none";
     } else {
         dropdownMenufilter.style.display = "none";
     }
 }






 var modal = document.getElementById("TermsModal");
 var btn = document.getElementsByClassName("rental");
 var span = document.getElementsByClassName("close")[0];

 const rentalarr = Array.from(btn);

 rentalarr.forEach(element => {

     element.onclick = function() {
         modal.style.display = "block";
     }

     span.onclick = function() {
         modal.style.display = "none";
     }

     window.addEventListener('click', function(event) {
         if (event.target == modal) {
             modal.style.display = "none";
         }})
     });



 var aboutmodal = document.getElementById("aboutModal");
 var aboutbtn = document.getElementsByClassName("about");
 var aboutspan = document.getElementsByClassName("close")[1];

 const aboutarr = Array.from(aboutbtn);

 aboutarr.forEach(element => {

     element.onclick = function () {
         aboutmodal.style.display = "block";
     }

     aboutspan.onclick = function () {
         aboutmodal.style.display = "none";
     }

     window.addEventListener('click', function (event) {
         if (event.target == aboutmodal) {
             aboutmodal.style.display = "none";
         }
     });
 });




 var SearchModal = document.getElementById("SearchModal");
 var searchbtn = document.getElementsByClassName("searchresult");
 // var searchspan = document.getElementsByClassName("close")[0];

 const searcharr = Array.from(searchbtn);

 searcharr.forEach(element => {

     element.onclick = function () {
         SearchModal.style.display = "block";
     }

     // searchspan.onclick = function () {
     //     SearchModal.style.display = "none";
     // }

     window.addEventListener('click', function (event) {
         if (event.target == SearchModal) {
             SearchModal.style.display = "none";
         }
     });
 });



 function toggleCheckboxes(checkbox) {
     var filterContainer = checkbox.parentNode.parentNode;
     var filterCheckboxes = filterContainer.querySelectorAll('.filter-checkbox');

     for (var i = 0; i < filterCheckboxes.length; i++) {
         filterCheckboxes[i].checked = checkbox.checked;
     }
 }

 function clearAllFilters() {
     const checkboxes = document.querySelectorAll('.checkbox-filter input[type="checkbox"]');
     checkboxes.forEach(checkbox => {
         checkbox.checked = false;
     });
 }


 function toggleFilters(button) {
     var filterContainer = button.parentNode.parentNode;
     var filterCheckboxes = filterContainer.querySelectorAll('.each-filter');

     for (var i = 0; i < filterCheckboxes.length; i++) {
         if (filterCheckboxes[i].style.display === 'none') {
             filterCheckboxes[i].style.display = 'block';
             button.classList.remove('open');

         } else {
             filterCheckboxes[i].style.display = 'none';
             button.classList.add('open');

         }
     }
 }

 function toggleCheckboxes(checkbox) {
     var filterContainer = checkbox.parentNode.parentNode;
     var filterCheckboxes = filterContainer.querySelectorAll('.filter-checkbox');

     for (var i = 0; i < filterCheckboxes.length; i++) {
         filterCheckboxes[i].checked = checkbox.checked;
     }
 }


 $(document).ready(function() {

	$("#owl-demo").owlCarousel({

		navigation : true,

		slideSpeed : 300,
		paginationSpeed : 400,

		items : 1,
		itemsDesktop : false,
		itemsDesktopSmall : false,
		itemsTablet: false,
		itemsMobile : false

	});

  });


 document.addEventListener('DOMContentLoaded', function() {
     var questions = document.getElementsByClassName('question');

     for (var i = 0; i < questions.length; i++) {
         questions[i].addEventListener('click', function() {
             var answer = this.nextElementSibling;

             this.classList.toggle('open');
             if (answer.style.display === 'none') {
                 answer.style.display = 'block';
             } else {
                 answer.style.display = 'none';
             }
         });

         questions[i].click();
     }
 });


 document.onreadystatechange = function () {
     if (document.readyState === 'complete') {
         // Hide the loading overlay once the page is fully loaded
         document.getElementById('loading-overlay').style.display = 'none';
     }
 };


 // // Disable right-click
 // document.addEventListener('contextmenu', (e) => e.preventDefault());
 //
 // function ctrlShiftKey(e, keyCode) {
 //     return e.ctrlKey && e.shiftKey && e.keyCode === keyCode.charCodeAt(0);
 // }
 //
 // document.onkeydown = (e) => {
 //     // Disable F12, Ctrl + Shift + I, Ctrl + Shift + J, Ctrl + U
 //     if (
 //         event.keyCode === 123 ||
 //         ctrlShiftKey(e, 'I') ||
 //         ctrlShiftKey(e, 'J') ||
 //         ctrlShiftKey(e, 'C') ||
 //         (e.ctrlKey && e.keyCode === 'U'.charCodeAt(0))
 //     )
 //         return false;
 // };

 const carouselContent = document.querySelector('.carousel-content');
 const indicators = document.querySelectorAll('.indicator');

 indicators.forEach((indicator, index) => {
	 indicator.addEventListener('click', () => {
		 carouselContent.style.transform = `translateX(-${index * 100}%)`;
		 indicators.forEach((indicator) => {
			 indicator.classList.remove('active');
		 });
		 indicator.classList.add('active');
	 });
 });

 $(document).ready(function() {
	 const minus = $('.quantity__minus');
	 const plus = $('.quantity__plus');
	 const input = $('.quantity__input');
	 minus.click(function(e) {
		 e.preventDefault();
		 var value = input.val();
		 if (value > 1) {
			 value--;
		 }
		 input.val(value);
	 });

	 plus.click(function(e) {
		 e.preventDefault();
		 var value = input.val();
		 value++;
		 input.val(value);
	 })
 });


 window.addEventListener('scroll', function() {
     var reserveElement = document.querySelector('.reserve');
     var footerElement = document.querySelector('.site-footer');
     var scrollPoint = 200; // Adjust this value to your desired scroll point

     if (reserveElement != null) {
         if (window.scrollY >= scrollPoint && window.scrollY + window.innerHeight <= footerElement.offsetTop) {
             reserveElement.classList.add('fixed');
         } else {
             reserveElement.classList.remove('fixed');
         }
     }
 });

 // var hrElement = document.querySelector('.reserve-responsive hr');
 // var reserveDiv = document.querySelector('.reserve-responsive');
 //
 // window.addEventListener('scroll', function() {
	//  var scrollPoint = window.scrollY + window.innerHeight;
	//  var hrOffset = hrElement.offsetTop;
 //
	//  if (scrollPoint >= hrOffset) {
	// 	 reserveDiv.classList.add('fixed');
	//  } else {
	// 	 reserveDiv.classList.remove('fixed');
	//  }
 // });






