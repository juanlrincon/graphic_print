<?php
class SucursalesController extends AppController {

	var $name = 'Sucursales';
	var $helpers = array('Html', 'Form');

	function beforeFilter() {
		parent::beforeFilter();
		//$this->Auth->allow('*');
	}

	function set_paises() {
		$paises = $this->Sucursal->Pais->find
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
		$this->pageTitle = 'Sucursales';
		$this->Sucursal->recursive = 0;
		$this->set('sucursales', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Sucursal', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('sucursal', $this->Sucursal->read(null, $id));
	}

	function add() {
		$this->pageTitle = 'Agregar Sucursal';
		if (!empty($this->data)) {
			$this->Sucursal->create();
			if ($this->Sucursal->save($this->data)) {
				$this->Session->setFlash(__('The Sucursal has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Sucursal could not be saved. Please, try again.', true));
			}
		}
		$this->set_paises();
	}

	function edit($id = null) {
		$this->pageTitle = 'Editar Sucursal';
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Sucursal', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Sucursal->save($this->data)) {
				$this->Session->setFlash(__('The Sucursal has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Sucursal could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Sucursal->read(null, $id);
		}
		$this->set_paises();
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Sucursal', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Sucursal->del($id)) {
			$this->Session->setFlash(__('Sucursal deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The Sucursal could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}

}
?>