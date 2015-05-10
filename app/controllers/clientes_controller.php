<?php
class ClientesController extends AppController {

	var $name = 'Clientes';
	var $helpers = array('Html', 'Form');


	function beforeFilter() {
		parent::beforeFilter();
		//$this->Auth->allow('*');
	}

	function set_sucursales() {
		$sucursales = $this->Cliente->Sucursal->find
		(
			'list',
			array
			(
				'fields' => array('id', 'nombre'),
				'order' => 'nombre ASC',
				'recursive' => -1
			)
		);

		$this->set(compact('sucursales'));
	}

	function set_plazas() {
		$plazas = $this->Cliente->Plaza->find
		(
			'list',
			array
			(
				'fields' => array('id', 'nombre'),
				'order' => 'nombre ASC',
				'recursive' => -1
			)
		);

		$this->set(compact('plazas'));
	}

	function set_agentes() {
		$agentes = $this->Cliente->Agente->find
		(
			'list',
			array
			(
				'fields' => array('id', 'nombre'),
				'order' => 'nombre ASC',
				'conditions' => array('puesto_id' => '2'),
				'recursive' => -1
			)
		);

		$this->set(compact('agentes'));
	}

	function set_vendedores() {
		$vendedores = $this->Cliente->Agente->find
		(
			'list',
			array
			(
				'fields' => array('id', 'nombre'),
				'order' => 'nombre ASC',
				'conditions' => array('puesto_id' => '1'),
				'recursive' => -1
			)
		);

		$this->set(compact('vendedores'));
	}

	function set_contactos() {
		$contactos = $this->Cliente->Contacto->find
		(
			'list',
			array
			(
				'fields' => array('id', 'nombre'),
				'order' => 'nombre ASC',
				'recursive' => -1
			)
		);

		$this->set(compact('contactos'));
	}

	function set_paises() {
		$paises = $this->Cliente->Pais->find
			(
				'list',
				array
				(
					'fields' => array('id', 'pais'),
					'order' => 'pais ASC',
					'recursive' => -1
				)
			);

		$this->set(compact('paises'));
	}

	function index() {
		$this->pageTitle = 'Clientes';
		$this->Cliente->recursive = 0;
		$this->set('clientes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Cliente', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('cliente', $this->Cliente->read(null, $id));
	}

	function add() {
		$this->pageTitle = 'Agregar Clientes';
		if (!empty($this->data)) {
			$this->Cliente->create();
			if ($this->Cliente->save($this->data)) {
				$this->Session->setFlash(__('The Cliente has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Cliente could not be saved. Please, try again.', true));
			}
		}

		$this->set_sucursales();
		$this->set_plazas();
		$this->set_paises();
		$this->set_agentes();
		$this->set_vendedores();
		$this->set_contactos();
	}

	function edit($id = null) {
		$this->pageTitle = 'Editar Cliente';
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Cliente', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Cliente->save($this->data)) {
				$this->Session->setFlash(__('The Cliente has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Cliente could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Cliente->read(null, $id);
		}

		$this->set_sucursales();
		$this->set_plazas();
		$this->set_paises();
		$this->set_agentes();
		$this->set_vendedores();
		$this->set_contactos();
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Cliente', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Cliente->del($id)) {
			$this->Session->setFlash(__('Cliente deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The Cliente could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}

}
?>