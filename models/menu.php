<?php
class Menu extends AppModel {
	var $name = 'Menu';
	var $displayField = 'title';
	
	var $actsAs = array(
		'Attachment' => array(
			'menu_pdf' => array(
				'uploadDir' => '/files',
			)
		)
	);
	
	var $validate = array(
		'title' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please supply a title for the menu',
			),
		),
		'menu_pdf' => array(
			'extension' => array(
				'rule' => array('extension', array('pdf')),
				'message' => 'Please supply a valid PDF document (pdf)'
			)
		)
	);
}
?>