<?php
class CiudadesController extends AppController {

	var $name = 'Ciudades';
	var $helpers = array('Html', 'Form', 'Ajax', 'Javascript');
	
	function beforeFilter() {
	    parent::beforeFilter();
	   	//$this->Auth->allowedActions = array('update_estados');
	    //$this->set('related', 'Cursos');
		//$this->Auth->allow('*');
	   	$this->permissions = $this->permisos_array();
	}
	
	function index() {
		$this->Ciudad->recursive = 0;
		// Comportamiento de contenedor para incluir la clases relacionada 'Paise' ('Estado' y 'Status' 
		// se incluyen por referencia directa). ('Behavior' - 'Containable') 
		$this->Ciudad->Behaviors->attach('Containable');
		// Configuración de los datos utilizados en paginación (listados) 
		$this->paginate = array(
            'contain' => array(    
                'Estado' => array(
                    'fields' => array('estado'),
                    'Pais' => array(
                        'fields' => array('pais')
                        )
                    )
                ),
            'order' => array(
                'Ciudad.ciudad' => 'asc',
                'Estado.estado' => 'asc' 
                )
            );
		// Título de la página 
		$this->pageTitle = 'Lista de Ciudades';
		$this->set('ciudades', $this->paginate());
	}

	function add() {
	    // Título de la página 
		$this->pageTitle = 'Nueva Ciudad';
		
		if (!empty($this->data)) {
    	    $this->data['Ciudad']['estatus'] = '1';
			$this->data['Ciudad']['created_id'] = $this->Auth->user('id');
			$this->Ciudad->create();
			if ($this->Ciudad->save($this->data)) {
				$this->Session->setFlash('La Ciudad ha sido añadida');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('La Ciudad no pudo ser añadida.');
			}
		}
		// Asignación de lista de países activos 
		$this->set('paises', $this->Ciudad->Estado->Pais->find('list', array(
		    'fields' => array('Pais.pais'),
		    'conditions' => array('Pais.estatus' => '1')
		)));
        // Asignación de lista vacía de estados (se llena al seleccionar el país) 
        $this->set('estados', array());
	}

	function update_estados() {
        if (!empty($this->data['Ciudad']['pais_id'])) { 
		    // Pra desactivar temporalmente mensajes 'warning' por la llamada Ajax
		    Configure::write('debug', 0);
		    // Layout necesario para llamadas Ajax
		    $this->layout = 'ajax';
		    $idPais = (int)$this->data['Ciudad']['pais_id'];
        
		    // Asignación de lista de estados activos del país $paise_id
            $this->set('estados', $this->Ciudad->Estado->find('list', array(
                'fields' => array('Estado.nombre'),
                'conditions' => array('Estado.estatus' => '1', 'Estado.pais_id' => $idPais) 
            )));
	    }
	}
	
	function edit($id = null) {
	    // Título de la página 
		$this->pageTitle = 'Editar Ciudad';

		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Clave inválida de Ciudad');
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			$this->data['Ciudad']['modified_id'] = $this->Auth->user('id');
			if ($this->Ciudad->save($this->data)) {
				$this->Session->setFlash('La Ciudad ha sido guardada');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('La Ciudad no pudo ser guardada. Por favor, trate otra vez.');
			}
		}
		if (empty($this->data)) {
    		$this->data = $this->Ciudad->read(null, $id);
		}
		$idPais = $this->Ciudad->Estado->field('pais_id', array('estado.id' => (int)$this->data['Ciudad']['estado_id']));		
      
		// Asignación de lista de países activos 
		$this->set('paises', $this->Ciudad->Estado->Pais->find('list', array(
		    'fields' => array('Pais.pais'),
		    'conditions' => array('Pais.estatus' => '1')
		)));
       
		// Asignación de lista de estados activos 
	//	if (!$idPais) {
		    $this->set('estados', $this->Ciudad->Estado->find('list', array(
    		    'fields' => array('Estado.estado'),
    		    'conditions' => array('Estado.estatus' => '1', 'Estado.pais_id' => $idPais)
    		)));
	//	} else {
	//	    $this->set('estados', $this->Ciudad->Estado->find('list', array(
	//	        'fields' => array('Estado.nombre'),
		       // 'conditions' => array('Estado.estado' => '1', 'Estado.pais_id' => $idPais)
	//	        'conditions' => array('Estado.estado' => '1')
	//	    )));
	//    }
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Estado', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Ciudad->recursive = 1;

		$this->set('ciudad', $this->Ciudad->read(null, $id));
	}

	function deactivate($id = null) {
		if (!$id) {
			$this->Session->setFlash('Clave inválida de Ciudad');
			$this->redirect(array('action' => 'index'));
		}
	    $this->data['Ciudad']['estatus'] = '0';
		$this->data['Ciudad']['modified_id'] = $this->Auth->user('id');
    	if ($this->Ciudad->save($this->data, false)) {
			$this->Session->setFlash('Ciudad desactivada');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('La ciudad no pudo ser desactivada.');
		$this->redirect(array('action' => 'index'));
	}
	
	function activate($id = null) {
		if (!$id) {
			$this->Session->setFlash('Clave inválida de Ciudad');
			$this->redirect(array('action' => 'index'));
		}
	    $this->data['Ciudad']['estatus'] = '1';
		$this->data['Ciudad']['modified_id'] = $this->Auth->user('id');
    	if ($this->Ciudad->save($this->data, false)) {
			$this->Session->setFlash('Ciudad activada');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('La ciudad no pudo ser activada. Por favor, trate otra vez.');
		$this->redirect(array('action' => 'index'));
	}
}
?>