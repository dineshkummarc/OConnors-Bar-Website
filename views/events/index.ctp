<h2><?php echo $page['Page']['title']; ?></h2>

<?php echo $page['Page']['body']; ?>

<div class='separator'></div>

<?php if(!empty($latestUpcomingEvents)): ?>
<div class='upcoming_events'>
	<h3>Upcoming Events</h3>
	
	<?php
		$event_count = 0;
	
		foreach($latestUpcomingEvents as $event):
			$timestamp = strtotime($event['Event']['start_date']);
			$startDate = date("D j M", $timestamp);
		
			if(!$event_count) {
				echo "<div class='upcoming_event top_upcoming_event'>\n";
			} else if($event_count==1) {
				echo "<div class='upcoming_event'>\n";
			} else if($event_count==2) {
				echo "<div class='upcoming_event bottom_upcoming_event'>\n";
			}
			echo "<p class='event_date'>" . $startDate . "</p>\n";
			echo "<p class='event_summary'>" . htmlentities($event['Event']['description']) . "</p>\n";
			echo "</div>\n";
			
			$event_count++;
		endforeach;
	?>
</div>

<div class='separator'></div>
<?php endif; ?>

<div id='calendar'></div>

<p>&nbsp;</p>

<?php 
	// build calendar entries json object
	$json_events = "[";
	
	if(!empty($upcomingEvents)):
		foreach($upcomingEvents as $event):
			$json_events .= "{";
			
			$json_events .= "title: '" . addslashes($event['Event']['title']) . "',";
			
			$json_events .= "start: '" . $event['Event']['start_date'] . "',";
			$json_events .= "end: '" . $event['Event']['end_date'] . "',";
			
			$json_events .= "allDay: false";
			
			$json_events .= "},";
		endforeach;
	endif;
	
	$json_events .= "]";
?>

<script type='text/javascript'>

	$(document).ready(function() {
	
		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
		var testDate = new Date(y, m, 1);
		
		/* */
		/* Date Format . . . */
		/* Mon Nov 01 2010 00:00:00 GMT+0000 (GMT Standard Time) */
		/* */
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: ''
			},
			editable: false,
			events: <?php echo $json_events ?>
		});

	});

</script>