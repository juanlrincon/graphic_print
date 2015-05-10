<?php
class CantidadesController extends AppController {

	var $name = 'Cantidades';
	var $helpers = array('Html', 'Form');


	function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('*');
	}

	function index() {
		$this->pageTitle = 'Cantidades';
		$this->Cantidad->recursive = 0;
		$this->set('cantidades', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Cantidad', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('cantidad', $this->Cantidad->read(null, $id));
	}

	function add() {
		$this->pageTitle = 'Agregar Cantidad';
		if (!empty($this->data)) {
			$this->Cantidad->create();
			if ($this->Cantidad->save($this->data)) {
				$this->Session->setFlash(__('The Cantidad has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Cantidad could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		$this->pageTitle = 'Editar Cantidad';
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Cantidad', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Cantidad->save($this->data)) {
				$this->Session->setFlash(__('The Cantidad has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Cantidad could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Cantidad->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Cantidad', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Cantidad->del($id)) {
			$this->Session->setFlash(__('Cantidad deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The Cantidad could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}

}
?>