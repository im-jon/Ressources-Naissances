<?php include("header.php"); ?>

<link rel='stylesheet' type='text/css' href='css/fullcalendar.css' />
<script type='text/javascript' src='js/fullcalendar.js'></script>

<script type='text/javascript'>
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
</script>

<div id='calendar'></div>

<?php include("footer.php"); ?>
