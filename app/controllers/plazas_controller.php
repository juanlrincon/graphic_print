<?php
class PlazasController extends AppController {

	var $name = 'Plazas';
	var $helpers = array('Html', 'Form');

//temporal
function beforeFilter() {
parent::beforeFilter();
//$this->Auth->allow('*');
}

	function index() {
		$this->pageTitle = 'Plazas';
		$this->Plaza->recursive = 0;
		$this->set('plazas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Plaza', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('plaza', $this->Plaza->read(null, $id));
	}

	function add() {
		$this->pageTitle = 'Agregar Plaza';
		if (!empty($this->data)) {
			$this->Plaza->create();
			if ($this->Plaza->save($this->data)) {
				$this->Session->setFlash(__('The Plaza has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Plaza could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		$this->pageTitle = 'Editar Plaza';
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Plaza', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Plaza->save($this->data)) {
				$this->Session->setFlash(__('The Plaza has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Plaza could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Plaza->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Plaza', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Plaza->del($id)) {
			$this->Session->setFlash(__('Plaza deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The Plaza could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}


	function admin_index() {
		$this->Plaza->recursive = 0;
		$this->set('plazas', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Plaza', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('plaza', $this->Plaza->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Plaza->create();
			if ($this->Plaza->save($this->data)) {
				$this->Session->setFlash(__('The Plaza has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Plaza could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Plaza', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Plaza->save($this->data)) {
				$this->Session->setFlash(__('The Plaza has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Plaza could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Plaza->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Plaza', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Plaza->del($id)) {
			$this->Session->setFlash(__('Plaza deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The Plaza could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}

}
?>