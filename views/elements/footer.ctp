<div class='footer_container'>
	<div class='footer'>
		<div class='footer_left'>
			<ul class='footer_menu'>
			<?php echo '<li>' . $this->Html->link('Home', '/') . '</li>'; ?>
			<?php echo '<li>' . $this->Html->link('About Us', '/pages/about-oconnors-bar-ballycaslte') . '</li>'; ?>
			<?php echo '<li>' . $this->Html->link('Beer Garden', '/pages/beer-garden-at-oconnors-bar-ballycastle') . '</li>'; ?>
			<?php echo '<li>' . $this->Html->link('Upcoming Events', array('controller' => 'events')) . '</li>'; ?>
			<?php echo '<li>' . $this->Html->link('Traditional Music', '/pages/traditional-irish-music-sessions-at-oconnors-bar-ballycastle') . '</li>'; ?>
			<?php echo '<li>' . $this->Html->link('Food', '/food') . '</li>'; ?>
			<?php echo '<li>' . $this->Html->link('Merchandise', '/pages/oconnors-bar-merchandise') . '</li>'; ?>
			<?php echo '<li>' . $this->Html->link('Gallery', array('controller' => 'albums', 'action' => 'index')) . '</li>'; ?>
			<?php echo '<li>' . $this->Html->link('Contact Us', '/pages/contact-us') . '</li>'; ?>
			</ul><!-- footer_menu -->
			
			<div class='clear'></div>
			
			<p>&copy; O'Connor's Bar, Ballycastle 2011. All Rights Reserved</p>
		</div><!-- footer_left -->
	
		<div class='footer_right'>
			<?php echo $this->Html->link('O\'Connor\'s Bar Ballycastle', 'http://oconnorsbar.ie', array('class' => 'footer_logo')); ?>
		</div><!-- footer_right -->
	</div><!-- footer -->
</div><!-- footer_container -->

<script type='text/javascript'>
	$(document).ready(function() {
		$(".columns").equalHeights();
	});
</script>