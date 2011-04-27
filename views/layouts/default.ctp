<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $html->charset(); ?>
	<title>
		<?php __('O\'Connor\'s Bar, Ballycastle : '); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon','fav.gif', array('type' =>'gif'));
		echo $this->Html->meta('description',$page['Page']['meta_description']);
		echo $this->Html->meta('keywords',$page['Page']['meta_keywords']);
		echo $html->css(array(
			'reset.css',
			'default.css',
			'prettyPhoto.css',
			'fullcalendar/fullcalendar-custom.css'
		));
		echo $this->Html->script(array(
			'jquery-1.4.3.min',
			'jquery.equalheights',
			'jquery.prettyPhoto',
			'fullcalendar/jquery-ui-1.8.5.custom.min',
			'fullcalendar/fullcalendar.min',
			'swfobject.js'
		));
		echo $scripts_for_layout;
	?>
	
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-17862791-1']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head>
<body>
	<?php echo $this->element('masthead'); ?>
	
	<?php echo $this->element('nav_menu'); ?>
	
	<div class='content_container'>
		<div class='content_wrapper'>
			<?php echo $this->element('left_panel'); ?>
			
			<div class='columns' id='content_right'>
				<?php $session->flash(); ?>

				<?php echo $content_for_layout; ?>
			</div><!-- content_right -->
			
			<div class='clear'></div>
		</div><!-- content_wrapper -->
	</div><!-- content_container -->
	
	<?php echo $this->element('footer'); ?>
</body>
</html>