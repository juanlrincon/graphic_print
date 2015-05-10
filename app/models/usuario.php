<?php
class Usuario extends AppModel {

	var $name = 'Usuario';
	var $validate = array(
		'username' => array('notempty'),
		'password' => array('notempty')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Puesto' => array(
			'className' => 'Puesto',
			'foreignKey' => 'puesto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Departamento' => array(
			'className' => 'Departamento',
			'foreignKey' => 'departamento_id',
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
		'Rol' => array(
			'className' => 'Rol',
			'foreignKey' => 'rol_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
/**    
 * After save callback
 *
 * Update the aro for the user.
 *
 * @access public
 * @return void
 */
	/*
function afterSave($created) {
        if (!$created) {
            $parent = $this->parentNode();
            $parent = $this->node($parent);
            $node = $this->node();
            $aro = $node[0];
            $aro['Aro']['parent_id'] = $parent[0]['Aro']['id'];
            $this->Aro->save($aro); //revisar esto
        }
}
*/
}
?>