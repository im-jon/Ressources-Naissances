<?php
session_start();
include('Actions/fonctions.php');

if (!estAutorise(2)) {
	die();
}

include("Actions/mysql.php");

$requete = "SELECT id, nom, couleur FROM type_atelier";

$resultats = mysql_query($requete) or die(mysql_error());
?>

<?php include("header.php"); ?>

<link rel='stylesheet' type='text/css' href='css/fullcalendar.css' />
<script type='text/javascript' src='js/fullcalendar.js'></script>


<script type='text/javascript'>
	$(document).ready(function() {
		$('#types-atelier div.external-event').each(function() {
		
			var eventObject = {
				title: $.trim($(this).text()), // use the element's text as the event title
				backgroundColor: $(this).css('background-color'),
				id: $(this).attr('id_type_atelier')
			};
			
			$(this).data('eventObject', eventObject);
			
			$(this).draggable({
				zIndex: 999,
				revert: true,
				revertDuration: 0
			});
			
		});

		$('#calendrier-admin').fullCalendar({
			editable: true,
			droppable: true,
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
			},
			drop: function(date, allDay) {
				var originalEventObject = $(this).data('eventObject');
				var copiedEventObject = $.extend({}, originalEventObject);
				
				copiedEventObject.start = date;
				copiedEventObject.allDay = allDay;

				var datefin = new Date(date);
				datefin.setHours(date.getHours() + 1);

				copiedEventObject.end = datefin;

				// Envoie l'atelier au serveur
				$.ajax({
					url: "Actions/ajouterAtelier.php",
					data: "id_type=" + originalEventObject.id + "&date_debut=" + date + "&date_fin=" + datefin + "&animatrice=Paul",
					success: function(data){
						// Assigne l'id de l'atelier venant d'être ajouté
						copiedEventObject.id = data;
						$('#calendrier-admin').fullCalendar('renderEvent', copiedEventObject, true);
					}
				});
			},
			eventDrop: function(event,dayDelta,minuteDelta,allDay,revertFunc) {
				$.ajax({
					url: "Actions/deplacerAtelier.php",
					data: "id=" + event.id + "&joursDelta=" + dayDelta + "&minutesDelta=" + minuteDelta,
					success: function(data){

					}
				});
			},
			eventResize: function(event,dayDelta,minuteDelta,revertFunc) {
				$.ajax({
					url: "Actions/redimensionnerAtelier.php",
					data: "id=" + event.id + "&joursDelta=" + dayDelta + "&minutesDelta=" + minuteDelta,
					success: function(data){

					}
				});
			}	
		});
		//$('#calendrier-admin').fullCalendar('changeView', 'agendaWeek');
	});
</script>

<div id='types-atelier'>
<h4>Types d'atelier</h4>
	<?php while($val = mysql_fetch_array($resultats)) { 
		echo "<div class='external-event' id_type_atelier=\"" . $val['id'] . "\" style=\"background-color: #" . $val['couleur'] . ";\">". $val['nom'] . "</div>";
	} ?>
</div>


<div id='calendrier-admin'></div>

<?php include("footer.php"); ?>
