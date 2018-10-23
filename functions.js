/**
 * Custom JavaScript Functionality
 *
 * This document contains the custom JavaScript functionality for WordPress
 * theme. This is written using jQuery to simplify code complexity.
 *
 * @package WordPress
 * @subpackage Awful-Royalty
 * @since Awful-Royalty 1.0
 */

// jQuery
(function($) {

	$(document).ready(function() {
		// Menu toggle
		$('.menu-main-menu-container').prepend('<a href="#" class="main-menu-toggle"><div class="bar"></div><div class="bar"></div><div class="bar"></div></a>');
		$('#menu-main-menu').hide();
		$('.main-menu-toggle').click(function(e) {
			e.preventDefault();
			$(this).toggleClass('expanded');
			$('#menu-main-menu').slideToggle().toggleClass('expanded');
		});
		if($('.projects').length) {
			var stepNum = $( '.projects' ).length;
				for (let i = 1; i <= stepNum ; i++ ) {
					var step = i + 1;
						$( '#p-' + i ).hover(function() {
							$('#pt-' + i).slideToggle('fast');
						});
				};
		};
		//menu hover effect
		$('.nav-letters').on('mouseenter', function(){
			var t = 0
			$(this).find('.nav-letter').each(function(){
					var e = this;
				window.setTimeout(function() {
				$(e).addClass('move')
			}, 115 * t);
				window.setTimeout(function() {
				$(e).removeClass('move')
			}, 165 * (t + 1));
			t++
			});
		});

	});//end document.ready
})(jQuery);
