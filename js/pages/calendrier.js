$(document).ready(function() {

	$('#calendar').fullCalendar({
		minTime: 6,
		firstDay: 1,
		
		defaultView: 'agendaWeek',
		allDaySlot: false,
		header: {
			left: 'prev,next today',
			center: 'title',
			right: 'month,agendaWeek,agendaDay'
		},
	        eventSources: [{
			url: 'Actions/obtenirAteliers.php',
			allDayDefault: false
		}],
		eventMouseover: function(event) {
			$(this).qtip();
		},
		eventRender: function(event, element) {
			element.qtip({
			    content: event.title
			});
	        },
		eventAfterRender: function(event, element) {
			if (event.start < $('#calendar').fullCalendar('getDate')) {
				element.css({ opacity: 0.3 });
			}
	        },
		loading: function(bool) {
			if (bool) $('#loading').show();
			else $('#loading').hide();
		}
		
	});
});
