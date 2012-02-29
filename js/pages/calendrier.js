$(document).ready(function() {

	$('#calendar').fullCalendar({
		firstDay: 1,
		defaultView: 'agendaWeek',
		header: {
			left: 'prev,next today',
			center: 'title',
			right: 'month,agendaWeek,agendaDay'
		},
	        eventSources: [{
			url: 'Actions/obtenirAteliers.php',
			allDayDefault: false
		}],	
		loading: function(bool) {
			if (bool) $('#loading').show();
			else $('#loading').hide();
		}
		
	});
	
});
