<?php
class Subscriber extends AppModel {
	var $name = 'Subscriber';
	var $displayField = 'name';
	var $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please supply your name.',
			),
		),
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				'message' => 'Please supply a valid email address',
			),
			'isUnique' => array(
				'rule' => array('isUnique'),
				'message' => 'The email address has already subscribed.',
			),
		),
	);
}
?>