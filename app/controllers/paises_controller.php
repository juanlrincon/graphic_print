<?php
class PaisesController extends AppController {

	var $name = 'Paises';
	var $helpers = array('Html', 'Form');

	function beforeFilter() {
	parent::beforeFilter();
	//$this->Auth->allow('*');
	$this->Auth->userModel = 'Usuario';
	}

	function index() {
		$this->pageTitle = 'Paises';
		$this->Pais->recursive = 0;
		$this->set('paises', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Pais', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('pais', $this->Pais->read(null, $id));
	}

	function add() {
		$this->pageTitle = 'Agregar País';
		if (!empty($this->data)) {
			$this->Pais->create();
			   //$data['User'] = $this->Auth->user()
			if ($this->Pais->save($this->data)) {
				$this->Session->setFlash(__('The Pais has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Pais could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		$this->pageTitle = 'Editar País';
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Pais', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Pais->save($this->data)) {
				$this->Session->setFlash(__('The Pais has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Pais could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Pais->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Pais', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Pais->del($id)) {
			$this->Session->setFlash(__('Pais deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The Pais could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}


	function admin_index() {
		$this->Pais->recursive = 0;
		$this->set('paises', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Pais', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('pais', $this->Pais->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Pais->create();
			if ($this->Pais->save($this->data)) {
				$this->Session->setFlash(__('The Pais has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Pais could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Pais', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Pais->save($this->data)) {
				$this->Session->setFlash(__('The Pais has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Pais could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Pais->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Pais', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Pais->del($id)) {
			$this->Session->setFlash(__('Pais deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The Pais could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}

}
?>