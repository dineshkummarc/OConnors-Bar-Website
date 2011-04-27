<h2>Unsubscribe</h2>

<?php 
	if($success) {
		echo "<p>You have been removed from the O'Connor's Bar subscriber list.</p>";
	} else {
		echo "<p>Please complete the form below if you would like to be removed from the O'Connor's Bar subscriber list.</p>";
?>

<div class="subscribers form">
<?php echo $this->Form->create('Subscriber');?>
	<?php
		echo $this->Form->input('email', array('label' => 'Email Address'));
	?>
<?php echo $this->Form->end(__('Unsubscribe', true));?>
</div>

<?php 
	}
?>

<div class='separator'></div>