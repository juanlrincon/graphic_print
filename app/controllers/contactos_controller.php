<?php
class ContactosController extends AppController {

	var $name = 'Contactos';
	var $helpers = array('Html', 'Form');

	function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('*');
  	    $this->permissions = $this->permisos_array();
	}

	function index() {
		$this->pageTitle = 'Contactos';
		$this->Contacto->recursive = 0;
		$this->set('contactos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Contacto', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('contacto', $this->Contacto->read(null, $id));
	}

	function add() {
		$this->pageTitle = 'Agregar Contacto';
		if (!empty($this->data)) {
			$this->Contacto->create();
			if ($this->Contacto->save($this->data)) {
				$this->Session->setFlash(__('The Contacto has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Contacto could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		$this->pageTitle = 'Editar Contacto';
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Contacto', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Contacto->save($this->data)) {
				$this->Session->setFlash(__('The Contacto has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Contacto could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Contacto->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Contacto', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Contacto->del($id)) {
			$this->Session->setFlash(__('Contacto deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The Contacto could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}

}
?>