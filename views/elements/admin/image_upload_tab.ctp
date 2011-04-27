<?php 
		$image_options = array(
			1 => 'Keep existing image',
			0 => 'Upload new image'
		);

		$default_options = array(
			'type' => 'radio', 
			'options' => $image_options, 
			'default' => 1,
			'legend' => false,
			'before' => '<li>',
			'separator' => '</li><li>',
			'after' => '</li>',
			'div' => false
		);

		if(isset($label)){
			$default_options['label'] = $label; 
		}
?>
<div class="wrap">
	<h3><?php echo empty($label) ? Inflector::humanize($field) : $label; ?></h3>
	<ul class="tabs" id="tabs_<?php echo $field; ?>">
		<?php echo $this->Form->input($field.'_keep_existing', $default_options);?>
	</ul>
	<div class="panes" id="panes_<?php echo $field; ?>">
		<div class="pane">
		<?php 
			$currentFile = $this->Form->value($field);
			
			if(!empty($currentFile)) {
				$tmpFilename = str_replace("/img", "img", $this->Form->value($field));
				
				if(file_exists($tmpFilename)) {
					list($width, $height, $type, $attr) = getimagesize($tmpFilename);
				} else {
					$width = 0;
				}
			
				if($width>600) {
					echo $this->Html->image($this->Form->value($field), array('alt' => 'Current image', 'width' => '600'));
				} else {
					echo $this->Html->image($this->Form->value($field), array('alt' => 'Current image'));
				}
			} else {
				echo "No Image";
			}
		?>
		<div class="pane"><?php echo $this->Form->input($field, array('type' => 'file', 'div' => false)); ?></div>
	</div>
</div>
