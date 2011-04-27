O'Connor's Bar, Ballycastle

Upcoming Events ( http://oconnorsbar.ie/events )

<?php 
	if(!empty($upcomingEvents)): 
		$event_count = 0;

		foreach($upcomingEvents as $event):
			$timestamp = strtotime($event['Event']['start_date']);
			$startDate = date("D j M", $timestamp);
		
			echo $startDate . "\n";
			echo htmlentities($event['Event']['title']) . "\n\r\n\r";
			
		endforeach;
	endif; 
?>

If you do not wish to receive weekly updates from O'Connor's Bar, please click here to unsubscribe ( http://oconnorsbar.ie/subscribers/unsubscribe ).