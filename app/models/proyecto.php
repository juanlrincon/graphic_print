<?php
class Proyecto extends AppModel {

	var $name = 'Proyecto';
	var $validate = array(
		'nombre' => array('notempty'),
		'created_id' => array('numeric'),
		'modified_id' => array('numeric')
	);

	var $belongsTo = array(
		'Creador' => array(
			'className' => 'Usuario',
			'foreignKey' => 'created_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Modificador' => array(
			'className' => 'Usuario',
			'foreignKey' => 'modified_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'Cotizacion' => array(
			'className' => 'Cotizacion',
			'foreignKey' => 'proyecto_id',
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