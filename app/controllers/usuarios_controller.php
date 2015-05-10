<?php
class UsuariosController extends AppController {
	var $helpers = array('Html', 'Form');
	//var $components = array('Acl');

var $name = 'Usuarios';// determina nombre de la vista
//var $displayField = 'username'; 
/*
	var $permissions = array(
	        'logout' => '*',
	    );
*/
function beforeFilter() {
	parent::beforeFilter();
	$this->Auth->allow('*');
	   // $this->Auth->userModel = 'Usuario';
	   /////////////////// $this->Auth->allowedActions = array('login','login2','logout', 'add');
	    $this->Auth->allowedActions = array('login','login2','logout');
  //print_r($this->Auth);
  	    $this->permissions = $this->permisos_array();
    }

    function login(){
////$this->Session->del('Message.auth');
    	//$this->Auth->authError = 'caca';
		$this->layout = 'login';
    	//print_r($this->Auth);
    	$this->pageTitle = 'Acceso a Portal';
        if($this->Auth->user()){
        	$this->Session->write('rol', $this->Usuario->Rol->field('nombre',array('id' => $this->Auth->user('rol_id'))));
        	//$this->redirect($this->Auth->redirect());
        	$this->redirect(array('controller' => 'usuarios', 'action' => 'login2'));
        	//echo 'jala';
        }
        else
        {
        	//echo 'falló';
        }
    }

	function login2(){
		//echo 'juanlllllllllllllllllllllllllllllllllllllllllllllllllll';
		//die('aqui');
		
		//$this->redirect(array('controller' => 'algo', 'action' => 'algo2'));
			
		if ($this->Auth->user())
	        {
	        	$this->Session->write('rol', $this->Usuario->Rol->field('nombre',array('id' => $this->Auth->user('rol_id'))));
				$_SESSION['rol'] = $this->Auth->user('rol_id');
				//$this->redirect($this->Auth->redirect());
				$_SESSION['nombre_usuario'] = $this->Auth->user('nombres').' '.$this->Auth->user('apellido_paterno').' '.$this->Auth->user('apellido_materno');

			/*	$bienvenida = $this->Usuario->Rol->find('list', array(
				    'fields' => array('Rol.mensaje'),
				    'conditions' => array('Rol.estatus' => '1', 'Rol.id' => $this->Auth->user('rol_id'))
				));*/
/*
				if ($this->Auth->user('rol_id') == 6)
				{
					$this->redirect(array('controller' => 'curso_participantes', 'action' => 'uindex'));
				}
				else
				{
					$this->Session->write('bienvenida',$bienvenida);
					$this->redirect(array('controller' => 'pages', 'action' => 'welcome'));
				}*/
				$this->redirect(array('controller' => 'home'));			
	        }
	        
	    }

    function logout(){
		//unset($_SESSION['rol']);
    	clearCache();
		cache::Clear();
	    //$this->Session->setFlash('Good-Bye');
		$this->redirect($this->Auth->logout());

    } 
    
	function index() {
		//$this->build_acl();
		//$this->initDB();
		//clearCache();
		//cache::Clear();
		$this->Usuario->recursive = 0;
		$this->pageTitle = 'Usuarios';
		$this->set('usuarios', $this->paginate('Usuario', array('Usuario.estatus =' => '1')));
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Usuario', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('usuario', $this->Usuario->read(null, $id));
	}

	function add() {
		$this->pageTitle = 'Agregar Usuario';
		//$this->_setCategories(); 
		if (!empty($this->data)) {
		    //$this->data['Usuario']['nombre_usuario'] = $this->data['Usuario']['correo_electronico'];
		    //$password = $this->data['Usuario']['password'];
		    $this->data['Usuario']['created_id'] = $this->Auth->user('id');
		    //$this->data['Usuario']['created_id'] = '1';
    	    $this->data['Usuario']['estatus'] = '1';
    	    $this->Usuario->set($this->data);

			$this->Usuario->create();
			//$this->data['Usuario']['password'] = md5($this->data['Usuario']['password']);
			if ($this->Usuario->save($this->data)) {
				$this->Session->setFlash(__('The Usuario has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Usuario could not be saved. Please, try again.', true));
			}
		}
         $puestos = $this->Usuario->Puesto->find  
             (  
                 'list',  
                 array  
                 (  
                     'fields' => array('id', 'nombre'),  
                     'order' => 'nombre ASC',  
                     'recursive' => -1  
                 )  
             );  
         $departamentos = $this->Usuario->Departamento->find  
             (  
                 'list',  
                 array  
                 (  
                     'fields' => array('id', 'nombre'),  
                     'order' => 'nombre ASC',  
                     'recursive' => -1  
                 )  
             );  
  

         $plazas = $this->Usuario->Plaza->find  
             (  
                 'list',  
                 array  
                 (  
                     'fields' => array('id', 'nombre'),  
                     'order' => 'nombre ASC',  
                     'recursive' => -1  
                 )  
             );


         $roles = $this->Usuario->Rol->find  
             (  
                 'list',  
                 array  
                 (  
                     'fields' => array('id', 'nombre'),  
                     'order' => 'nombre ASC',  
                     'recursive' => -1  
                 )  
             ); 

		$this->set(compact('puestos', 'departamentos', 'plazas', 'roles'));
	}

	function edit($id = null) {
		$this->pageTitle = 'Editar Usuario';
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Usuario', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			$this->data['Usuario']['password'] = md5($this->data['Usuario']['password']);
			if ($this->Usuario->save($this->data)) {
				$this->Session->setFlash(__('The Usuario has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Usuario could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Usuario->read(null, $id);
		}
         $puestos = $this->Usuario->Puesto->find  
             (  
                 'list',  
                 array  
                 (  
                     'fields' => array('id', 'nombre'),  
                     'order' => 'nombre ASC',  
                     'recursive' => -1  
                 )  
             );  
         $departamentos = $this->Usuario->Departamento->find  
             (  
                 'list',  
                 array  
                 (  
                     'fields' => array('id', 'nombre'),  
                     'order' => 'nombre ASC',  
                     'recursive' => -1  
                 )  
             );  
  

         $plazas = $this->Usuario->Plaza->find  
             (  
                 'list',  
                 array  
                 (  
                     'fields' => array('id', 'nombre'),  
                     'order' => 'nombre ASC',  
                     'recursive' => -1  
                 )  
             );


         $roles = $this->Usuario->Rol->find  
             (  
                 'list',  
                 array  
                 (  
                     'fields' => array('id', 'nombre'),  
                     'order' => 'nombre ASC',  
                     'recursive' => -1  
                 )  
             );

		$this->set(compact('puestos','departamentos','plazas','roles'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Usuario', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->data['Usuario']['estatus'] = '0';
		if ($this->Usuario->save($this->data)) {
			$this->Session->setFlash(__('Usuario deleted', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('The Usuario could not be deleted. Please, try again.', true));
		$this->redirect(array('action' => 'index'));

	}

}
?>