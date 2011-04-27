<div class="images form">
<?php echo $this->Form->create('Image', array('type' => 'file', 'url' => '/'.$this->params['url']['url']));?>
	<fieldset>
 		<legend><?php printf(__('Admin Edit %s', true), __('Image', true)); ?></legend>
		<?php
			echo $this->Form->input('id');
			echo $this->Form->hidden('album_id');
			echo $this->Form->input('title');
			echo $this->element('admin/image_upload_tab', array('field' => 'image'));
			echo $this->element('admin/image_upload_tab', array('field' => 'thumbnail'));
		?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>