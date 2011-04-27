<h2><?php echo $page['Page']['title']; ?></h2>

<?php
	switch ($page['Page']['slug']):
		case "beer-garden-at-oconnors-bar-ballycastle":
			$polaroid = "beer_garden_polaroid.png";
			break;
		case "oconnors-bar-merchandise";
			$polaroid = "merchandise_polaroid.png";
			break;
		default:
			$polaroid = "food_polaroid.png";
	endswitch;
 
	echo $this->Html->image($polaroid, array('class' => 'page_polaroid', 'width' => '225', 'height' => '200'));
?>

<?php echo $page['Page']['body']; ?>

<div class='clear'></div>

<div class='separator clearfix'></div>