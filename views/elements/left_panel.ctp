<div class='columns' id='content_left'>
	<div class='heading heading_subscribe_for_updates'>Subscribe For Updates</div><!-- heading_subscribe_for_updates -->
	
	<?php 
		$dayOptions = array(
			'1' => '01',
			'2' => '02',
			'3' => '03',
			'4' => '04',
			'5' => '05',
			'6' => '06',
			'7' => '07',
			'8' => '08',
			'9' => '09',
			'10' => '10',
			'11' => '11',
			'12' => '12',
			'13' => '13',
			'14' => '14',
			'15' => '15',
			'16' => '16',
			'17' => '17',
			'18' => '18',
			'19' => '19',
			'20' => '20',
			'21' => '21',
			'22' => '22',
			'23' => '23',
			'24' => '24',
			'25' => '25',
			'26' => '26',
			'27' => '27',
			'28' => '28',
			'29' => '29',
			'30' => '30',
			'31' => '31',
		);
		
		$monthOptions = array(
			'1' => 'January',
			'2' => 'February',
			'3' => 'March',
			'4' => 'April',
			'5' => 'May',
			'6' => 'June',
			'7' => 'July',
			'8' => 'August',
			'9' => 'September',
			'10' => 'October',
			'11' => 'November',
			'12' => 'December',
		);
		
		$yearOptions = array();
		$isAdultYear = date('Y', time()) - 18;
		for($i=$isAdultYear; $i>=1900; $i--):
			$yearOptions[$i] = $i;
		endfor;
	
		echo $this->Form->create('Subscriber', array('action' => 'subscribe', 'class' => 'subscription_form'));
		echo $this->Form->label('day', 'Date of Birth');
		echo $this->Form->select('day', $dayOptions, null, array('empty' => array('0' => 'Day')));
		echo $this->Form->select('month', $monthOptions, null, array('empty' => array('0' => 'Month')));
		echo $this->Form->select('year', $yearOptions, null, array('empty' => array('0' => 'Year')));
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->end(__('Submit', true));
	?>
	
	<div class='clear'></div>
	
	<div class='divider'></div><!-- divider -->
	
	<div class='heading heading_follow_us_on'>Follow Us On</div><!-- heading_follow_us_on -->
	
	<?php echo $this->Html->link('flikr.com', 'http://www.flickr.com/photos/oconnorsbar/', array('class' => 'follow_us flikr', 'target' => '_blank')); ?>
	<?php echo $this->Html->link('twitter.com', 'http://twitter.com/oconnorsbar', array('class' => 'follow_us twitter', 'target' => '_blank')); ?>
	<?php echo $this->Html->link('facebook.com', 'http://www.facebook.com/pages/Ballycastle-United-Kingdom/OConnors-Bar/159661870715632', array('class' => 'follow_us facebook', 'target' => '_blank')); ?>
	
	<div class='clear'></div>
	
	<div class='divider'></div><!-- divider -->
	
	<p class='title_oconnors_bar'>O'Connor's Bar</p>
	
	<p class='contact_details'>5 - 7 Ann Street, Ballycastle<br />Co Antrim, BT54 6AA<br /><strong>T:</strong> +44 (0)28 2076 2123<br /><strong>E:</strong> <a href='mailto:info@oconnorsbar.ie'>info@oconnorsbar.ie</a></p>
</div><!-- content_left -->