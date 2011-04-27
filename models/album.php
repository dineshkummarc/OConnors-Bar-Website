<?php
class Album extends AppModel {
	var $name = 'Album';
	var $displayField = 'title';
	
	var $actsAs = array(
		'Attachment' => array(
			'image' => array(
				'uploadDir' => '/img/uploads/gallery',
			),
			'thumbnail' => array(
				'uploadDir' => '/img/uploads/gallery',
				'image_resize' => true,
				'image_ratio_crop' => true,
				'image_x' => 150,
				'image_y' => 150
			)
		),
		'Containable',
		'Sluggable',
		'Sequence'
	);
	
	var $validate = array(
		'title' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please supply a title for the photo album',
			)
		),
		'image' => array(
			'extension' => array(
				'rule' => array('extension', array('jpg', 'jpeg', 'png', 'gif')),
				'message' => 'Please supply a valid image (jpg, jpeg, png, gif).'
			)
		),
		'thumbnail' => array(
			'extension' => array(
				'rule' => array('extension', array('jpg', 'jpeg', 'png', 'gif')),
				'message' => 'Please supply a valid thumbnail image (jpg, jpeg, png, gif).'
			)
		)
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Image' => array(
			'className' => 'Image',
			'foreignKey' => 'album_id',
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