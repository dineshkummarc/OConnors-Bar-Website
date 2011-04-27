<h2><?php echo $page['Page']['title']; ?></h2>

<?php echo $this->Html->image('traditional_irish_music_polaroid.png', array('class' => 'page_polaroid', 'width' => '225', 'height' => '200')); ?>

<?php echo $page['Page']['body']; ?>

<div class='clear'></div>

<div class='separator clearfix'></div>

<div id='video_container' class='clearfix'></div>

<?php 
	// echo "<div id='video_container' class='clearfix'></div>";
	echo $javascript->codeBlock("var params = { quality: 'high', wmode: 'transparent' }; swfobject.embedSWF('http://www.youtube.com/v/bbK-_FgeIIs', 'video_container', '600', '380', '9.0.0', false, null, params, {});", array("inline" => false));
?>

<div class='clear'></div>

<div class='separator clearfix'></div>