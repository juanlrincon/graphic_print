<?php 
/* SVN FILE: $Id$ */
/* Puesto Test cases generated on: 2010-03-05 18:40:19 : 1267814419*/
App::import('Model', 'Puesto');

class PuestoTestCase extends CakeTestCase {
	var $Puesto = null;
	var $fixtures = array('app.puesto', 'app.usuario', 'app.usuario');

	function startTest() {
		$this->Puesto =& ClassRegistry::init('Puesto');
	}

	function testPuestoInstance() {
		$this->assertTrue(is_a($this->Puesto, 'Puesto'));
	}

	function testPuestoFind() {
		$this->Puesto->recursive = -1;
		$results = $this->Puesto->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Puesto' => array(
			'id' => 1,
			'nombre' => 'Lorem ipsum dolor sit amet',
			'estatus' => 'Lorem ipsum dolor sit ame'
		));
		$this->assertEqual($results, $expected);
	}
}
?>