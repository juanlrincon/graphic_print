<?php 
/* SVN FILE: $Id$ */
/* ProyectosController Test cases generated on: 2010-05-01 00:49:55 : 1272674995*/
App::import('Controller', 'Proyectos');

class TestProyectos extends ProyectosController {
	var $autoRender = false;
}

class ProyectosControllerTest extends CakeTestCase {
	var $Proyectos = null;

	function startTest() {
		$this->Proyectos = new TestProyectos();
		$this->Proyectos->constructClasses();
	}

	function testProyectosControllerInstance() {
		$this->assertTrue(is_a($this->Proyectos, 'ProyectosController'));
	}

	function endTest() {
		unset($this->Proyectos);
	}
}
?>