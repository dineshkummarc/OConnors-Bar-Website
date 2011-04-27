<div class="subscribers form">
<?php echo $this->Form->create('Subscriber');?>
	<fieldset>
 		<legend><?php printf(__('Admin Add %s', true), __('Subscriber', true)); ?></legend>
		<?php
			echo $this->Form->input('name');
			echo $this->Form->input('email');
			echo $this->Form->input('dob');
			echo $this->Form->input('unsubscribed');
		?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>