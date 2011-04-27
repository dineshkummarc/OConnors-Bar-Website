<div class='nav_container'>
	<ul class='nav_menu'>
	<?php echo '<li>' . $this->Html->link('HOME', '/', array('class' => 'nav_home')) . '</li>'; ?>
	<?php echo '<li>' . $this->Html->link('ABOUT US', '/pages/about-oconnors-bar-ballycaslte', array('class' => 'nav_about_us')) . '</li>'; ?>
	<?php echo '<li>' . $this->Html->link('UPCOMING EVENTS', array('controller' => 'events'), array('class' => 'nav_upcoming_events')) . '</li>'; ?>
	<?php echo '<li>' . $this->Html->link('TRADITIONAL MUSIC', '/pages/traditional-irish-music-sessions-at-oconnors-bar-ballycastle', array('class' => 'nav_traditional_music')) . '</li>'; ?>
	<?php echo '<li>' . $this->Html->link('FOOD', '/food', array('class' => 'nav_food')) . '</li>'; ?>
	<?php echo '<li>' . $this->Html->link('MERCHANDISE', '/pages/oconnors-bar-merchandise', array('class' => 'nav_merchandise')) . '</li>'; ?>
	<?php echo '<li>' . $this->Html->link('GALLERY', array('controller' => 'albums', 'action' => 'index'), array('class' => 'nav_gallery')) . '</li>'; ?>
	<?php echo '<li>' . $this->Html->link('CONTACT US', '/pages/contact-us', array('class' => 'nav_contact_us')) . '</li>'; ?>
	</ul><!-- nav_menu -->
</div><!-- nav_container -->