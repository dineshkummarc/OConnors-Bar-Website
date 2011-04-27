<div class="subscribers form">
<?php echo $this->Form->create('Subscriber');?>
	<fieldset>
 		<legend><?php printf(__('Admin Edit %s', true), __('Subscriber', true)); ?></legend>
		<?php
			echo $this->Form->input('id');
			echo $this->Form->input('name');
			echo $this->Form->input('email');
			echo $this->Form->input('dob', array('type' => 'text'));
			echo $this->Form->input('unsubscribed');
		?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>