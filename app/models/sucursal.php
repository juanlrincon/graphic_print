<?php
class Sucursal extends AppModel {

	var $name = 'Sucursal';
	var $validate = array(
		'pais_id' => array(
			'rule' => 'notempty',
			'message' => 'El País es requerido'	
		),
		'calle' => array(
			'rule' => 'alphanumeric',
			'message' => 'El País es requerido'	
		),
		'no_ext' => array(
			'rule' => 'alphanumeric',
			'message' => 'El Número externo es requerido'	
		),
		'ciudad' => array(
			'rule' => 'alphanumeric',
			'message' => 'La ciudad es requerida'	
		),
		'codigo_postal' => array(
			'rule' => 'numeric',
			'message' => 'El codigo postal es requerido'	
		),
		'estado' => array(
			'rule' => 'alphanumeric',
			'message' => 'El estado es requerido'
		)
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Pais' => array(
			'className' => 'Pais',
			'foreignKey' => 'pais_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
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

	var $hasMany = array(
		'Cliente' => array(
			'className' => 'Cliente',
			'foreignKey' => 'sucursal_id',
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