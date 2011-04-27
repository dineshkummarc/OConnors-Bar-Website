<div class="events form">
<?php echo $this->Form->create('Event');?>
	<fieldset>
 		<legend><?php printf(__('Admin Edit %s', true), __('Event', true)); ?></legend>
		<?php
			echo $this->Form->input('id');
			echo $this->Form->input('title');
			echo $this->Form->input('description');
			echo $this->Form->input('start_date', array('type' => 'text', 'class' => 'datepicker'));
			echo $this->Form->input('end_date', array('type' => 'text', 'class' => 'datepicker'));
		?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>