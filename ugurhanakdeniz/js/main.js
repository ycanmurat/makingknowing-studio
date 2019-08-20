$(document).ready(function() {
	var path = window.location.pathname;
	var page = path.split("/").pop();
	console.log( page );

	$(document).keyup(function(e) {
		if (e.key === "Escape") {
			$('#closePop').click();
		}
	});
	$('li#search button').click(function(event) {
		$('li#search').addClass('active');
	});
	$('li#search span.removeSearch').click(function(event) {
		$('li#search').removeClass('active');
	});

	$('header .hamburger').click(function(event) {
		$('header div.menu ul').toggleClass('active');
	});
	$('.owl-clients').owlCarousel({
		navText: ['<img src="images/icons/left-arrow.svg">','<img src="images/icons/right-arrow.svg">'],
		dots:true,
		center:true,
		loop:true,
		rewind: true,
		smartSpeed: 700,
		margin:10,
		nav:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:3
			},
			1000:{
				items:5
			}
		}
	});
	var clientOwl = $('.owl-clients');
	$('.owl-clients .owl-item').click(function () {
		if( $(this).next().hasClass('center') ){
			clientOwl.trigger('prev.owl.carousel');
		}
		if( $(this).prev().hasClass('center') ){
			clientOwl.trigger('next.owl.carousel');
		} 


		if( $(this).next().next().hasClass('center') ){
			clientOwl.trigger('prev.owl.carousel');
			clientOwl.trigger('prev.owl.carousel');
		}
		if( $(this).prev().prev().hasClass('center') ){
			clientOwl.trigger('next.owl.carousel');
			clientOwl.trigger('next.owl.carousel');
		}  

	});

	$(function() {
		$('.lazy').Lazy({
			effect: "fadeIn",
			effectTime: 1500,
			threshold: 0
		});
	});


	$('#privacy').click(function(event) {
		$(this).parent('li').toggleClass('active');
		$('body').toggleClass('off')
		$(this).toggleClass('active');
		$('div.privacy').toggleClass('active');
		$(this).text(function(i, text){
			return text === "Privacy" ? "Close" : "Privacy";
		})
	});
	$('#mbl-close').click(function(event) {
		$('div.privacy').removeClass('active');
		$('#privacy').parent('li').removeClass('active');
		$('body').removeClass('off');
		$('#privacy').removeClass('active');
		$('#privacy').text('Privacy');
	});
	if (page == "clients.php") {
		$('header div.menu li a').removeClass('active');
		$('header div.menu li a[href$="clients.php"]').addClass('active');
	}
	if (page == "projects.php") {
		$('header div.menu li a').removeClass('active');
		$('header div.menu li a[href$="projects.php"]').addClass('active');
	}
	if (page == "contact.php") {
		$('header div.menu li a').removeClass('active');
		$('header div.menu li a[href$="contact.php"]').addClass('active');
	}
	if (page == "about.php") {
		$('header div.menu li a').removeClass('active');
		$('header div.menu li a[href$="about.php"]').addClass('active');
	}


});


/*Stick Head */
$(window).scroll(function () {
	var scroll = $(window).scrollTop();

	if (scroll >= 170) {
		$(".owl-clients").addClass("topStick");
	} else {
		$(".owl-clients").removeClass("topStick");

	}  
});