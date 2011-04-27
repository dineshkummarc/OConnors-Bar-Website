<div class="menus form">
<?php echo $this->Form->create('Menu', array('type' => 'file', 'url' => '/'.$this->params['url']['url']));?>
	<fieldset>
 		<legend><?php printf(__('Admin Add %s', true), __('Menu', true)); ?></legend>
		<?php
			echo $this->Form->input('title');
			echo $this->Form->input('menu_pdf', array('type' => 'file'));
		?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>