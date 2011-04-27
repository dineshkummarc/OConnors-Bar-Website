<?php
class User extends AppModel {
	
	var $name = 'User';
	var $validate = array(
		'username' => array(
			'isUnique' => array(
				'rule' => 'isUnique',
				'message' => 'This username has already been taken.'
			),
			'notempty' => array(
				'rule' => 'notempty',
				'message' => 'The username cannot be blank.'
			)			
		),
		'password' => array(
			'notempty' => array(
				'rule' => 'notempty',
				'message' => 'Please enter a password'
			),
			'minLength' => array(
				'rule' => array('minLength', '8'),
				'message' => 'Password must be longer than 8 characters'
			)
		)
	);
	
	function access_groups() {
		return array(
			'admin' => 'Admin',
			'guest' => 'Guest'
		);
	}
}
?>