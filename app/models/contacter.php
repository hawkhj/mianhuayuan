<?php
class Contacter extends AppModel {
	var $name = 'Contacter';
	var $primaryKey = 'ContacterId';
	var $validate = array(
		'ContacterId' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
