<?php
class CotizacionesController extends AppController {

	var $name = 'Cotizaciones';
	var $helpers = array('Html', 'Form', 'Javascript', 'Ajax');

var $permissions = array(
        'view' => '*',
        'add' => array('Usuario', 'Administrador'),
        'delete' => array('Administrador')
    ); 

	function beforeFilter() {
		parent::beforeFilter();
		//$this->Auth->allow('*');
	}

	function update_cliente($id) {
		$clientes = $this->Cotizacion->Cliente->find
		(
			'all',
			array
			(
				//'fields' => array('id', 'nombre_comercial'),
				//'order' => 'nombre_comercial ASC',
				//'recursive' => -1
				'conditions' => array('Cliente.id' => $id),
			)
		);
			$this->set(compact('clientes'));
	}

	function livesearch($q = null) {
		if (!empty($q))
		{
			$results = $this->Cotizacion->Cliente->find
			(
				'list',
				array
				(
					'fields' => array('id', 'nombre'),
					'conditions' => "nombre like '%".$q."%'",
				)
			);
			//print_r($results);
			//$this->set('results', $this->paginate('Cliente', "Cliente.nombre_comercial like '%".$q."%'"));
			//$this->set('results', $this->find('Cliente', "Cliente.nombre_comercial like '%".$q."%'"));
			$this->set(compact('results'));
			$this->set(compact('q'));
			$this->layout = 'livesearch';
		}
		//echo $q;
	}

	function set_clientes() {
		$clientes = $this->Cotizacion->Cliente->find
		(
			'list',
			array
			(
				'fields' => array('id', 'nombre_comercial'),
				'order' => 'nombre_comercial ASC',
				'recursive' => -1
			)
		);

		$this->set(compact('clientes'));
	}

	function set_proyectos() {
		$proyectos = $this->Cotizacion->Proyecto->find
		(
			'list',
			array
			(
				'fields' => array('id', 'nombre'),
				'order' => 'nombre ASC',
				'recursive' => -1
			)
		);

		$this->set(compact('proyectos'));
	}

	function set_cantidades() {
		$cantidades = $this->Cotizacion->Cantidad->find
		(
			'list',
			array
			(
				'fields' => array('id', 'cantidad'),
				'order' => 'cantidad ASC',
				'recursive' => -1
			)
		);

		$this->set(compact('cantidades'));
	}

	function select_add() {
		
	}

	function index() {
		$this->pageTitle = 'Cotizaciones';
		$this->Cotizacion->recursive = 1;
		$this->set('cotizaciones', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Cotizacion', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('cotizacion', $this->Cotizacion->read(null, $id));
	}

	function add($page = null) {
		$this->pageTitle = 'Agregar Cotizaci&oacute;n';
		if (!empty($this->data)) {
			$this->Cotizacion->create();
			if ($this->Cotizacion->save($this->data)) {
				$this->Session->setFlash(__('The Cotizacion has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La cotización no se pudo guardar.', true));
			}
		}
		$clientes = $this->Cotizacion->Cliente->find('list');
		//$proyectos = $this->Cotizacion->Proyecto->find('list');
		$cantidades = $this->Cotizacion->Cantidad->find('list');
		$papelesCotizacions = $this->Cotizacion->PapelesCotizacion->find('list');
		$this->set(compact('clientes', 'proyectos', 'cantidades', 'papelesCotizacions'));
		
		$this->set_clientes();
		$this->set_proyectos();
		$this->set_cantidades();
		//$this->set('tipo_impresiones', $this->Cotizacion->getEnumValues('tipo_impresion'));
		$this->set('page', $page);
	}

	function edit($id = null) {
		$this->pageTitle = 'Editar Cotización';
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Cotizacion', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Cotizacion->save($this->data)) {
				$this->Session->setFlash(__('The Cotizacion has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Cotizacion could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Cotizacion->read(null, $id);
		}
		$clientes = $this->Cotizacion->Cliente->find('list');
		$proyectos = $this->Cotizacion->Proyecto->find('list');
		$cantidades = $this->Cotizacion->Cantidad->find('list');
		$papelesCotizacions = $this->Cotizacion->PapelesCotizacion->find('list');
		$this->set(compact('clientes','proyectos','cantidades','papelesCotizacions'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Cotizacion', true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Cotizacion->del($id)) {
			$this->Session->setFlash(__('Cotizacion deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The Cotizacion could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>