jQuery(document).ready(function($) {
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

