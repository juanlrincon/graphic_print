<?php
class Cliente extends AppModel {

	var $name = 'Cliente';
	var $validate = array(
		'pais_id' => array('notempty'),
		'sucursal_id' => array('notempty'),
		'plaza_id' => array('notempty'),
		'vendedor_id' => array('notempty'),
		'recepcion_material_id' => array('notempty'),
		'recepcion_factura_id' => array('notempty'),
		'entrega_cheque_id' => array('notempty'),
		'agente_id' => array('notempty')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Contacto' => array(
			'className' => 'Contacto',
			'foreignKey' => 'contacto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Pais' => array(
			'className' => 'Pais',
			'foreignKey' => 'pais_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Sucursal' => array(
			'className' => 'Sucursal',
			'foreignKey' => 'sucursal_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Plaza' => array(
			'className' => 'Plaza',
			'foreignKey' => 'plaza_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'RecepcionMaterial' => array(
			'className' => 'RecepcionMaterial',
			'foreignKey' => 'recepcion_material_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'RecepcionFactura' => array(
			'className' => 'RecepcionFactura',
			'foreignKey' => 'recepcion_factura_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'EntregaCheque' => array(
			'className' => 'EntregaCheque',
			'foreignKey' => 'entrega_cheque_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Agente' => array(
			'className' => 'Usuario',
			'foreignKey' => 'agente_id',
			'conditions' => array('Agente.puesto_id' => '1'),
			'fields' => '',
			'order' => ''
		),
		'Vendedor' => array(
			'className' => 'Usuario',
			'foreignKey' => 'vendedor_id',
			'conditions' => array('Agente.puesto_id' => '1'),
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
		'Cotizacion' => array(
			'className' => 'Cotizacion',
			'foreignKey' => 'cliente_id',
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