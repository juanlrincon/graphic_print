<?php
class Cotizacion extends AppModel {

	var $name = 'Cotizacion';
/*
	var $validate = array(
		'nombre' => array(
			'rule' => 'alphanumeric',
			'message' => 'La cantidad es requerida',
			'required' => true
		)
	);
*/
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Cliente' => array(
			'className' => 'Cliente',
			'foreignKey' => 'cliente_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Proyecto' => array(
			'className' => 'Proyecto',
			'foreignKey' => 'proyecto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Cantidad' => array(
			'className' => 'Cantidad',
			'foreignKey' => 'cantidad_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'PapelesCotizacion' => array(
			'className' => 'PapelesCotizacion',
			'foreignKey' => 'papeles_cotizacion_id',
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
		'Cantidades' => array(
			'className' => 'Cantidades',
			'foreignKey' => 'cotizacion_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		));

}
?>