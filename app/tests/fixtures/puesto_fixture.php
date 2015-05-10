<?php 
/* SVN FILE: $Id$ */
/* Puesto Fixture generated on: 2010-03-05 18:40:19 : 1267814419*/

class PuestoFixture extends CakeTestFixture {
	var $name = 'Puesto';
	var $table = 'puestos';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'nombre' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 128),
		'estatus' => array('type'=>'binary', 'null' => true, 'default' => NULL, 'length' => 1),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id' => 1,
		'nombre' => 'Lorem ipsum dolor sit amet',
		'estatus' => 'Lorem ipsum dolor sit ame'
	));
}
?>