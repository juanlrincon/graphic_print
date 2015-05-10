<?php
class EstadosController extends AppController {

	var $name = 'Estados';
	var $helpers = array('Html', 'Form');

	function beforeFilter() {
	parent::beforeFilter();
	//$this->Auth->allow('*');
	//echo '--->'.$this->Auth->user('rol_id');
	}

	function index() {
		$this->pageTitle = 'Estados';
		$this->Estado->recursive = 0;
		$this->set('estados', $this->paginate('Estado', array('Estado.estatus =' => '1')));
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Estado', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Estado->recursive = 1;
		//$this->Estado->find();
		
			/*$estado = $this->Estado->find('multiple', array(
		    'fields' => array('Estado.estado', 'Estado.estado'),
		    'conditions' => array('Estado.id' => $id, 'Estado.estatus' => '1')
			));
			print_r($estado);
			*/
		$this->set('estado', $this->Estado->read(null, $id));
	}

	function add() {
		$this->pageTitle = 'Agregar Estado';
		if (!empty($this->data)) {
			$this->Estado->create();
			$this->data['Estado']['estatus'] = '1';
			if ($this->Estado->save($this->data)) {
				$this->Session->setFlash(__('The Estado has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Estado could not be saved. Please, try again.', true));
			}
		}
		$paises = $this->Estado->Pais->find  
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

	function edit($id = null) {
		$this->pageTitle = 'Editar Estado';
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Estado', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Estado->save($this->data)) {
				$this->Session->setFlash(__('The Estado has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Estado could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Estado->read(null, $id);
		}
		$paises = $this->Estado->Pais->find  
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

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Estado', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->data['Estado']['estatus'] = '0';
		if ($this->Estado->save($this->data)) {
			$this->Session->setFlash(__('Estado deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The Estado could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}


	function admin_index() {
		$this->Estado->recursive = 0;
		$this->set('estados', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Estado', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('estado', $this->Estado->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Estado->create();
			if ($this->Estado->save($this->data)) {
				$this->Session->setFlash(__('The Estado has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Estado could not be saved. Please, try again.', true));
			}
		}
		$paises = $this->Estado->Pai->find('list');
		$this->set(compact('paises'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Estado', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Estado->save($this->data)) {
				$this->Session->setFlash(__('The Estado has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Estado could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Estado->read(null, $id);
		}
		$paises = $this->Estado->Pai->find('list');
		$this->set(compact('paises'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Estado', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Estado->del($id)) {
			$this->Session->setFlash(__('Estado deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The Estado could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}

}
?>