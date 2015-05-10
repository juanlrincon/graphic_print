<?php
class Contacto extends AppModel {

	var $name = 'Contacto';
	var $validate = array(
		'nombre' => array('alphanumeric'),
		'ap_paterno' => array('notempty'),
		'ap_materno' => array('notempty')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'Cliente' => array(
			'className' => 'Cliente',
			'foreignKey' => 'contacto_id',
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