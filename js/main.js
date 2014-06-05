jQuery(document).ready(function($) {
	// var nav_container = $('.nav-container');
	// var nav = $('.navbar-default');

	// nav_container.waypoint({
		// handler: function(direction) {
			// console.log(direction);
			// nav.toggleClass('sticky');
			// if (direction == 'down') {
				// nav_container.css({'height':nav.outerHeight() });
			// } else {
				// nav_container.css({'height': 'auto'});
			// }
		// }
	// });
	
	//fullcalendar
	// var date = new Date();
	// var d = date.getDate();
	// var m = date.getMonth();
	// var y = date.getFullYear();

	$('#calendar').fullCalendar({
		header: {
			left: 'prev,next today',
			center: 'title',
			right: 'month,agendaWeek,agendaDay'
		},
		events: 'https://www.google.com/calendar/feeds/uchurchsda%40gmail.com/public/basic'
	});
	
	$(window).resize(function(){
		if($(window).width() <= 767) {
			$('#calendar').fullCalendar('changeView', 'agendaDay');
		} else if($(window).width() <= 990) {
			$('#calendar').fullCalendar('changeView', 'agendaWeek');
		} else {
			$('#calendar').fullCalendar('changeView', 'month');
		}
	});
});

