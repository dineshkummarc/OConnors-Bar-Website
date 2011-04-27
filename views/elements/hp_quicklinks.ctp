<div class='hp_events'>
	<div class='hp_heading_upcoming_events'>Upcoming Events</div><!-- hp_heading_upcoming_events -->
	
	<?php if(!empty($latestUpcomingEvents)): ?>
	<?php
		$event_count = 0;
	
		foreach($latestUpcomingEvents as $event):
			$timestamp = strtotime($event['Event']['start_date']);
			$startDate = date("D j M", $timestamp);
		
			if(!$event_count) {
				echo "<div class='hp_event top_event'>\n";
			} else if($event_count==1) {
				echo "<div class='hp_event'>\n";
			} else if($event_count==2) {
				echo "<div class='hp_event bottom_event'>\n";
			}
			echo "<p class='hp_event_date'>" . $startDate . "</p>\n";
			echo "<p class='hp_event_summary'>" . $this->Html->link(htmlentities($event['Event']['title']), array('controller' => 'events', 'action' => 'index')) . "</p>\n";
			echo "</div>\n";
			
			$event_count++;
		endforeach;
	?>
	<?php endif; ?>
</div><!-- hp_events -->

<?php echo $this->Html->link('Food', '/food', array('class' => 'hp_quicklink bg_quicklink_food')); ?>
<!-- hp_quicklink -->

<?php echo $this->Html->link('Gallery', array('controller' => 'albums', 'action' => 'index'), array('class' => 'hp_quicklink bg_quicklink_gallery')); ?>
<!-- hp_quicklink -->

<div class='clear'></div>

<div class='separator'></div><!-- separator -->