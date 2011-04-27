<h2><?php echo $page['Page']['title']; ?></h2>

<?php echo $page['Page']['body']; ?>

<ul class='gallery_thumbs gallery clearfix'>
<?php 
	if(!empty($albums)):
		foreach($albums as $album):
			$rel = "prettyPhoto[album_" . uniqid("") . "]";
		
			// set the initial album thumbnail
			echo "<li>";
			echo $this->Html->link(
				$this->Html->image(
					$album['Album']['thumbnail'],
					array('alt' => $album['Album']['title'])
				),
				$album['Album']['image'],
				array('rel' => $rel, 'title' => $album['Album']['title'], 'escape' => false)
			);
			echo "</li>\n";
			
			// add the album images
			if(!empty($album['Image'])):
				foreach($album['Image'] as $image):
					echo "<li style='display: none;'>";
					echo $this->Html->link(
						$this->Html->image(
							$image['thumbnail'],
							array('alt' => $image['title'])
						),
						$image['image'],
						array('rel' => $rel, 'title' => $image['title'], 'escape' => false)
					);
					echo "</li>\n";
				endforeach;
			endif;
		endforeach;
	endif;
?>
</ul>

<div class='separator'></div>

<p style='text-indent: -9999px;'>End of gallery . . .</p>

<script type="text/javascript" charset="utf-8">
$(document).ready(function(){
	$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',theme:'light_rounded',slideshow:5000, autoplay_slideshow: false});
	$(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',slideshow:10000});
	
	$("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
		custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
		changepicturecallback: function(){ initialize(); }
	});

	$("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
		custom_markup: '<div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
		changepicturecallback: function(){ _bsap.exec(); }
	});
});
</script>