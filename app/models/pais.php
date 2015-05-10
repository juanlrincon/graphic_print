<?php
class Pais extends AppModel {

	var $name = 'Pais';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'Estado' => array(
			'className' => 'Estado',
			'foreignKey' => 'pais_id',
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