<?php 
/* SVN FILE: $Id$ */
/* Usuario Fixture generated on: 2010-03-04 23:12:22 : 1267744342*/

class UsuarioFixture extends CakeTestFixture {
	var $name = 'Usuario';
	var $table = 'usuarios';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'username' => array('type'=>'string', 'null' => false, 'default' => NULL, 'key' => 'unique'),
		'password' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 40),
		'puesto_id' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'departamento_id' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'plaza_id' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'perfil_id' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'titulo' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 128),
		'nombre' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 128),
		'ap_paterno' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 128),
		'ap_materno' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 128),
		'calle' => array('type'=>'string', 'null' => true, 'default' => NULL),
		'no_ext' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 10),
		'no_int' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 10),
		'colonia' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 128),
		'ciudad' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 128),
		'codigo_postal' => array('type'=>'integer', 'null' => true, 'default' => NULL, 'length' => 6),
		'estado' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 128),
		'email_personal' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 50),
		'email_empresa' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 50),
		'telefono1' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 15),
		'telefono2' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 15),
		'celular' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 15),
		'nextel' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 15),
		'fecha_nacimiento' => array('type'=>'date', 'null' => true, 'default' => NULL),
		'fotografia' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 128),
		'notas' => array('type'=>'text', 'null' => true, 'default' => NULL),
		'no_empleado' => array('type'=>'integer', 'null' => true, 'default' => NULL, 'length' => 20),
		'nomina' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 128),
		'no_seguro_social' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 20),
		'fecha_ingreso' => array('type'=>'date', 'null' => true, 'default' => NULL),
		'estatus' => array('type'=>'binary', 'null' => true, 'default' => NULL, 'length' => 1),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'idusuario_UNIQUE' => array('column' => 'id', 'unique' => 1), 'username_UNIQUE' => array('column' => 'username', 'unique' => 1))
	);
	var $records = array(array(
		'id' => 1,
		'username' => 'Lorem ipsum dolor sit amet',
		'password' => 'Lorem ipsum dolor sit amet',
		'puesto_id' => 1,
		'departamento_id' => 1,
		'plaza_id' => 1,
		'perfil_id' => 1,
		'titulo' => 'Lorem ipsum dolor sit amet',
		'nombre' => 'Lorem ipsum dolor sit amet',
		'ap_paterno' => 'Lorem ipsum dolor sit amet',
		'ap_materno' => 'Lorem ipsum dolor sit amet',
		'calle' => 'Lorem ipsum dolor sit amet',
		'no_ext' => 'Lorem ip',
		'no_int' => 'Lorem ip',
		'colonia' => 'Lorem ipsum dolor sit amet',
		'ciudad' => 'Lorem ipsum dolor sit amet',
		'codigo_postal' => 1,
		'estado' => 'Lorem ipsum dolor sit amet',
		'email_personal' => 'Lorem ipsum dolor sit amet',
		'email_empresa' => 'Lorem ipsum dolor sit amet',
		'telefono1' => 'Lorem ipsum d',
		'telefono2' => 'Lorem ipsum d',
		'celular' => 'Lorem ipsum d',
		'nextel' => 'Lorem ipsum d',
		'fecha_nacimiento' => '2010-03-04',
		'fotografia' => 'Lorem ipsum dolor sit amet',
		'notas' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'no_empleado' => 1,
		'nomina' => 'Lorem ipsum dolor sit amet',
		'no_seguro_social' => 'Lorem ipsum dolor ',
		'fecha_ingreso' => '2010-03-04',
		'estatus' => 'Lorem ipsum dolor sit ame'
	));
}
?>