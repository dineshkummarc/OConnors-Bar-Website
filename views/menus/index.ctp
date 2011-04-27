<h2><?php echo $page['Page']['title']; ?></h2>

<?php echo $this->Html->image('clams_polaroid.png', array('class' => 'page_polaroid', 'width' => '225', 'height' => '200')); ?>

<?php echo $page['Page']['body']; ?>

<?php
	echo $this->Html->link(
		'Download O\'Connor\'s Menu',
		$menu['Menu']['menu_pdf'],
		array('class' => 'download_menu_button', 'title' => 'Download O\'Connor\'s Bar Menu', 'target' => '_blank')
	);
?>

<div class='separator' style='clear: both;'></div>