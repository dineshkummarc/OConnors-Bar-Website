<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php 
		echo $this->Html->charset(); 
		echo $this->Html->meta('icon');
		echo $this->Html->css(array('reset', 'admin/base'));
	?>
    <title><?php echo Configure::read('Company.name'); ?> | <?php echo $title_for_layout; ?></title>
</head>
<body>
    <div id="container">
        <div id="content_container" class="clearfix">	
            <div id="login">
            	<?php echo $this->Session->flash(); ?>
              <?php echo $content_for_layout; ?>
            </div>
        </div>
    </div>
</body>
</html>
