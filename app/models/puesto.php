<?php
class Puesto extends AppModel {

	var $name = 'Puesto';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'Usuario' => array(
			'className' => 'Usuario',
			'foreignKey' => 'puesto_id',
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