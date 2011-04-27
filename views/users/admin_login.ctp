<?php
    if ($this->Session->check('Message.auth')) { 
		echo $this->Session->flash('auth'); 
	}
    echo $this->Form->create('User', array('action' => 'login'));
    echo $this->Form->input('username');
    echo $this->Form->input('password');
    echo $this->Form->end('Login');
	
	echo "<p>Problems logging in?<br />Email: " . $this->Html->link('info@boxprojex.com', 'mailto:info@boxprojex.com') . "</p>";
?>