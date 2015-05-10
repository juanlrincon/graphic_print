<?php
class Cantidad extends AppModel {

	var $name = 'Cantidad';
	var $validate = array(
		'cliente_id' => array(
			'rule' => 'numeric',
			'message' => 'La Cliente es requerido',
			'required' => true
		),
		'tipo' => array('notempty')
	);


	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'Cotizacion' => array(
			'className' => 'Cotizacion',
			'foreignKey' => 'cantidad_id',
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