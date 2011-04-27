<?php
class Image extends AppModel {
	var $name = 'Image';
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
		'Sequence'
	);
	
	var $validate = array(
		'title' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please supply a title / caption for the image',
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

	var $belongsTo = array(
		'Album' => array(
			'className' => 'Album',
			'foreignKey' => 'album_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>