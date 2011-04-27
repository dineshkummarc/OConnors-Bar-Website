<div class="images form">
<?php echo $this->Form->create('Image', array('type' => 'file', 'url' => '/'.$this->params['url']['url']));?>
	<fieldset>
 		<legend><?php printf(__('Admin Add %s', true), __('Image', true)); ?></legend>
		<?php
			echo $this->Form->hidden('album_id');
			echo $this->Form->input('title');
			echo $this->Form->input('image', array('type' => 'file'));
			echo $this->Form->input('thumbnail', array('type' => 'file'));
		?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>