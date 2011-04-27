<div class="users form">
	<?php echo $this->Form->create('User'); ?>
		<fieldset>
			<legend>Edit User</legend>
			<?php
				echo $this->Form->input('id');
				echo $this->Form->input('username');
				echo $this->Form->input('password', array('value' => ''));
				echo $this->Form->input('email');
				echo $this->Form->input('role', array('options' => $roles, 'label' => 'Belongs to role:'));
			?>
		</fieldset>
	<?php echo $this->Form->end('Submit'); ?>
</div>