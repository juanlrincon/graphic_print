<?php
class Ciudad extends AppModel {

	var $name = 'Ciudad';
	// Validaciones para formas 
	// NOTA: No se incluye el campo "'required' => true" porque ocasiona que fallen las funciones 'delete' y 'activate'
	var $validate = array(
	    'pais_id' => array(
		    'numeric',
		    'notempty' => array(
		        'rule' => 'notempty',
		        'message' => 'Por favor, seleccione un pais.',
		        'required' => true
		        )
		    ),
		'estado_id' => array(
		        'rule' => 'numeric',
		        'message' => 'Por favor, seleccione un estado.',
		    	'required' => true
		    ),
		'pais' => array(
		    'notempty' => array(
		        'rule' => 'notempty',
		        'message' => 'El nombre de la ciudad es requerido',
		    	'required' => true
		        )
			)
	);
	// Orden por omisión para búsquedas de listas 
	var $order = array('Ciudad.created' => 'asc');
	
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Estado' => array(
			'className' => 'Estado',
			'foreignKey' => 'estado_id',
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
/*
	var $hasMany = array(
		'Curso' => array(
			'className' => 'Curso',
			'foreignKey' => 'ciudad_id',
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
	*/
	// Función: afterFind
	// Decripción: Añade la fecha de modificación a la descripción del estado de los registros Desactivados 
	// e inactivos que tengan el comodín '<fecha_modif>'.
	
	
	function fechaFormato($dateString) {
	    return date('d-m-Y', strtotime($dateString));
	}
}
?>