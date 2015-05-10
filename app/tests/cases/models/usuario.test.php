<?php 
/* SVN FILE: $Id$ */
/* Usuario Test cases generated on: 2010-03-04 23:12:22 : 1267744342*/
App::import('Model', 'Usuario');

class UsuarioTestCase extends CakeTestCase {
	var $Usuario = null;
	var $fixtures = array('app.usuario', 'app.puesto', 'app.departamento', 'app.plaza', 'app.perfil');

	function startTest() {
		$this->Usuario =& ClassRegistry::init('Usuario');
	}

	function testUsuarioInstance() {
		$this->assertTrue(is_a($this->Usuario, 'Usuario'));
	}

	function testUsuarioFind() {
		$this->Usuario->recursive = -1;
		$results = $this->Usuario->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Usuario' => array(
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
		$this->assertEqual($results, $expected);
	}
}
?>