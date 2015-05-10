<?php
class DepartamentosController extends AppController {

	var $name = 'Departamentos';
	var $helpers = array('Html', 'Form');

function beforeFilter() {
parent::beforeFilter();
//$this->Auth->allow('*');
}

	function index() {
		$this->pageTitle = 'Departamentos';
		$this->Departamento->recursive = 0;
		$this->set('departamentos', $this->paginate('Departamento', array('Departamento.estatus =' => '1')));
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Departamento', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('departamento', $this->Departamento->read(null, $id));
	}

	function add() {
		$this->pageTitle = 'Agregar Departamento';
		if (!empty($this->data)) {
			$this->data['Departamento']['estatus'] = '1';
			$this->Departamento->create();
			if ($this->Departamento->save($this->data)) {
				$this->Session->setFlash(__('The Departamento has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Departamento could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		$this->pageTitle = 'Editar Departamento';
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Departamento', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Departamento->save($this->data)) {
				$this->Session->setFlash(__('The Departamento has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Departamento could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Departamento->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Departamento', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->data['Departamento']['estatus'] = '0';
		if ($this->Departamento->save($this->data)) {
			$this->Session->setFlash(__('Departamento deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The Departamento could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}


	function admin_index() {
		$this->Departamento->recursive = 0;
		$this->set('departamentos', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Departamento', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('departamento', $this->Departamento->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Departamento->create();
			if ($this->Departamento->save($this->data)) {
				$this->Session->setFlash(__('The Departamento has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Departamento could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Departamento', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Departamento->save($this->data)) {
				$this->Session->setFlash(__('The Departamento has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Departamento could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Departamento->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Departamento', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Departamento->del($id)) {
			$this->Session->setFlash(__('Departamento deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The Departamento could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}

}
?>