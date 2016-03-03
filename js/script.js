(function($) {

	'use strict';

	$(function() {
		var isTouch = Modernizr.touch;
		// Show/hide mobile menu
		$('.hamburger-js').on('click', function(e) {
			e.preventDefault();
			var elem = $(this);
			elem.parent().parent().toggleClass('header--open');
		});

		// Detect if touch is available then trigger hamburger click event
		// this will only trigger on mobile devices
		/*if (isTouch) {
			$('.menu-js').on('click', function(e) {
				var isLessTab = Modernizr.mq('only all and (max-width: 966px)');
				e.preventDefault();
				if (isLessTab) {
					$('.hamburger-js').trigger('click');
				}
			});
		}*/

		$('.arrow-click').on('click', function(){
			$('ul.main-menu > li.show-sub ul.sub-menu').slideToggle();
		});

		$('.arrow-click-1').on('click', function(){
			$('ul.main-menu > li.show-sub1 ul.sub-menu').slideToggle();
		});

		$('.arrow-click-2').on('click', function(){
			$('ul.main-menu > li.show-sub2 ul.sub-menu').slideToggle();
		});

		$(window).scroll(function() {

		    if ($(window).scrollTop() > 50) {
		        $('.header').addClass('sticky');
		    } else {
		        $('.header').removeClass('sticky');
		    }
		});
		// if the tabs are in a narrow column in a larger viewport
		$('.sidebar-tabs').tabCollapse({
			tabsClass: 'visible-tabs',
			accordionClass: 'hidden-tabs'
		});

		// if the tabs are in wide columns on larger viewports
		$('.content-tabs').tabCollapse();

		// initialize tab function
		$('.nav-tabs a').click(function(e) {
			e.preventDefault();
			$(this).tab('show');
		});

		// slide to top of panel-group accordion
		$('.panel-group').on('shown.bs.collapse', function() {
			var panel = $(this).find('.in');
			$('html, body').animate({
			scrollTop: panel.offset().top + (-60)
			}, 500);
		});

		$('.navigation > ul > li').on('click', function() {
			$('.navigation > ul > li.active').removeClass('active');
			$(this).addClass('active');
		});

	});

})(jQuery);
