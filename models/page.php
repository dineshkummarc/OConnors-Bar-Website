<?php
class Page extends AppModel {
	
	var $name = 'Page';
	var $displayField = 'title';
	
	var $actsAs = array(
		'Sluggable' => array(
			'overwrite' => false
		)
	);
	
	var $validate = array(
		'title' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please supply a title for the page',
			),
		)
	);

	var $belongsTo = array(
		'Parent' => array(
			'className' => 'Page',
			'foreignKey' => 'page_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Children' => array(
			'className' => 'Page',
			'foreignKey' => 'page_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
?>