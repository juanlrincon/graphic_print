<?php
class ProyectosController extends AppController {

	var $name = 'Proyectos';
	var $helpers = array('Html', 'Form');

	function beforeFilter() {
		parent::beforeFilter();
		//$this->Auth->allow('*');
	}

	function index() {
		$this->pageTitle = 'Proyectos';
		$this->Proyecto->recursive = 0;
		$this->set('proyectos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Proyecto', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('proyecto', $this->Proyecto->read(null, $id));
	}

	function add() {
		$this->pageTitle = 'Agregar Proyecto';
		if (!empty($this->data)) {
			$this->Proyecto->create();
			if ($this->Proyecto->save($this->data)) {
				$this->Session->setFlash(__('The Proyecto has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Proyecto could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		$this->pageTitle = 'Editar Proyecto';
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Proyecto', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Proyecto->save($this->data)) {
				$this->Session->setFlash(__('The Proyecto has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Proyecto could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Proyecto->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Proyecto', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Proyecto->del($id)) {
			$this->Session->setFlash(__('Proyecto deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The Proyecto could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}

}
?>