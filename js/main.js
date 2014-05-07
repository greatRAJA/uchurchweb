jQuery(document).ready(function($) {
	var nav_container = $('.nav-container');
	var nav = $('.navbar-default');

	nav_container.waypoint({
		handler: function(direction) {
			console.log(direction);
			nav.toggleClass('sticky');
			if (direction == 'down') {
				nav_container.css({'height':nav.outerHeight() });
			} else {
				nav_container.css({'height': 'auto'});
			}
		}
	});
});