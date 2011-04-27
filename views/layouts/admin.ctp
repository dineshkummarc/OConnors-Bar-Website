<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
    <title><?php echo Configure::read('Company.name'); ?> | Admin | <?php echo $title_for_layout; ?></title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css(array('reset', 'admin/base', 'admin/project_name', 'admin/jqueryui/smoothness-noround'));
		echo $this->Html->script(array(
			'jquery-1.4.3.min',
			'admin/jquery-ui-1.7.2.sortable.min',
			'admin/tools.tooltip-1.1.3.min',
			'admin/tools.tabs-1.2.3',
			'admin/jquery-ui-1.7.3.custom.min',
			'admin/init'
		));
		
		echo $scripts_for_layout;
		
		// TinyMCE
		if(isset($javascript)):
			echo $javascript->link('tinymce/jscripts/tiny_mce/tiny_mce.js');
		endif;
	?>
	<!--[if IE]><link rel="stylesheet" type="text/css" href="/css/admin/ie_override.css" /><![endif]-->
</head>
<body>
	<div id="container">
		<?php echo $this->element('admin/header'); ?>
		<div id="content_container" class="clearfix">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->element('admin/sidebar'); ?>
			<div id="content">
				<?php echo $content_for_layout; ?>
			</div>
		</div>
	</div>

	<?php echo $this->element('admin/footer'); ?> 
	<div id="tooltip">&nbsp;</div>
</body>
</html>