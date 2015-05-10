<?php
class RolesController extends AppController {

	var $name = 'Roles';
	var $helpers = array('Html', 'Form');

function beforeFilter() {
    parent::beforeFilter(); 
    //$this->Auth->allow('*');
}

	function index() {
		$this->pageTitle = 'Roles';
		$this->Rol->recursive = 0;
		$this->set('roles', $this->paginate('Rol', array('Rol.estatus =' => '1')));
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Rol Inválido', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('rol', $this->Rol->read(null, $id));
	}

	function add() {
		$this->pageTitle = 'Agregar rol';
		if (!empty($this->data)) {
			$this->Rol->create();
			$this->data['Rol']['estatus'] = '1';
			if ($this->Rol->save($this->data)) {
				$this->Session->setFlash(__('El Rol ha sido guardado', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El Rol no pudo ser guardado', true));
			}
		}
	}

	function edit($id = null) {
		$this->pageTitle = 'Editar Rol';
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Rol Inválido', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Rol->save($this->data)) {
				$this->Session->setFlash(__('El Rol ha sido guardado', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El Rol no pudo ser guardado', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Rol->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Rol Inválido', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->data['Rol']['estatus'] = '0';
		if ($this->Rol->save($this->data)) {
			//$this->Rol->del($id)
			$this->Session->setFlash(__('El Rol ha sido borrado', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('El Rol no pudo ser borrado', true));
		$this->redirect(array('action' => 'index'));
	}


}
?>