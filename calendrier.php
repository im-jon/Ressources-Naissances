<?php

?>

<?php include("header.php"); ?>

<link rel='stylesheet' type='text/css' href='css/fullcalendar.css' />
<script type='text/javascript' src='js/fullcalendar.js'></script>
<script type='text/javascript'>

	$(document).ready(function() {
	
		$('#calendar').fullCalendar({
		
			editable: true,
			
			events: "json-events.php",
			
			eventDrop: function(event, delta) {
				alert(event.title + ' was moved ' + delta + ' days\n' +
					'(should probably update your database)');
			},
			
			loading: function(bool) {
				if (bool) $('#loading').show();
				else $('#loading').hide();
			}
			
		});
		
	});

</script>

<div id='calendar'></div>

<?php include("footer.php"); ?>
