<div class="menus form">
<?php echo $this->Form->create('Menu', array('type' => 'file', 'url' => '/'.$this->params['url']['url']));?>
	<fieldset>
 		<legend><?php printf(__('Admin Edit %s', true), __('Menu', true)); ?></legend>
		<?php
			echo $this->Form->input('id');
			echo $this->Form->input('title');
			echo $this->element('admin/file_upload_tab', array('field' => 'menu_pdf'));
		?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>