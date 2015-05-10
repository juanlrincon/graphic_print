<?php
class Rol extends AppModel {

	var $name = 'Rol';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'Usuario' => array(
			'className' => 'Usuario',
			'foreignKey' => 'rol_id',
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
//var $actsAs = array('Acl' => array('type' => 'requester'));
/*
function parentNode() {
    return null;
}
*/
}
?>