<?php 
	$options = array(
		1 => 'Keep existing file',
		0 => 'Upload new file'
	);

	$default_options = array(
		'type' => 'radio', 
		'options' => $options, 
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
		<?php echo $this->Form->input($field.'_keep_existing', $default_options); ?>
	</ul>
	<div class="panes" id="panes_<?php echo $field; ?>">
		<div class="pane">
			<?php echo $this->Html->link($this->Form->value($field), $this->Form->value($field)); ?></div>
		<div class="pane"><?php echo $this->Form->input($field, array('type' => 'file', 'div' => false)); ?></div>
	</div>
</div>