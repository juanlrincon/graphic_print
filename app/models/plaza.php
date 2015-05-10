<?php
class Plaza extends AppModel {

	var $name = 'Plaza';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'Cliente' => array(
			'className' => 'Cliente',
			'foreignKey' => 'plaza_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Usuario' => array(
			'className' => 'Usuario',
			'foreignKey' => 'plaza_id',
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