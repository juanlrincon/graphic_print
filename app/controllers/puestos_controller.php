<?php
class PuestosController extends AppController {

	var $name = 'Puestos';
	var $helpers = array('Html', 'Form');

//temporal
function beforeFilter() {
parent::beforeFilter();
$this->Auth->allow('*');
}

	function index() {
		$this->pageTitle = 'Puestos';
		$this->Puesto->recursive = 0;
		$this->set('puestos', $this->paginate('Puesto', array('Puesto.estatus =' => '1')));
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Puesto', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('puesto', $this->Puesto->read(null, $id));
	}

	function add() {
		$this->pageTitle = 'Agregar Puesto';
		if (!empty($this->data)) {
			$this->Puesto->create();
			$this->data['Puesto']['estatus'] = '1';
			if ($this->Puesto->save($this->data)) {
				$this->Session->setFlash(__('The Puesto has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Puesto could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		$this->pageTitle = 'Editar Puesto';
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Puesto', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Puesto->save($this->data)) {
				$this->Session->setFlash(__('The Puesto has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Puesto could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Puesto->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Puesto', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->data['Puesto']['estatus'] = '0';
		if ($this->Puesto->save($this->data)) {
			$this->Session->setFlash(__('Puesto deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The Puesto could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}


	function admin_index() {
		$this->Puesto->recursive = 0;
		$this->set('puestos', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Puesto', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('puesto', $this->Puesto->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Puesto->create();
			if ($this->Puesto->save($this->data)) {
				$this->Session->setFlash(__('The Puesto has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Puesto could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Puesto', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Puesto->save($this->data)) {
				$this->Session->setFlash(__('The Puesto has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Puesto could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Puesto->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Puesto', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Puesto->del($id)) {
			$this->Session->setFlash(__('Puesto deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The Puesto could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}

}
?>