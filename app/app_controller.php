<?php
class AppController extends Controller {
//var $components = array('Auth', 'RequestHandler');
    var $helpers = array('Html', 'Form', 'Time', 'Javascript');
	var $components = array('Auth', 'RequestHandler', 'Session');
var $permissions = array(); 

    function beforeFilter() {
		$this->Auth->userModel = 'Usuario';  
    	$this->Auth->fields  = array(
            'username'=>'username', //The field the user logs in with (eg. username)
            'password' =>'password' //The password field
        );
        $this->Auth->authorize = 'controller';
        //$this->Auth->autoRedirect = false;
        $this->Auth->loginAction = array('controller' => 'usuarios', 'action' => 'login');
        $this->Auth->logoutRedirect = array('controller' => 'usuarios', 'action' => 'login');
        $this->Auth->loginRedirect = array('controller' => 'usuarios', 'action' => 'login2'); 
//echo $this->Auth->Usuario->nombres;
//print_r($_SESSION);
//$this->set('nombre_usuario', 'aaa'); 
//$this->Auth->actionPath = 'controllers/';


App::import('L10n');
                $this->L10n = new L10n;
                $this->L10n->get('spa');
setlocale(LC_ALL, 'Spanish (Argentina)');

$this->permisos_array();
    }

function beforeRender() {
    foreach($this->modelNames as $model) {
      foreach($this->$model->_schema as $var => $field) {
        if(strpos($field['type'], 'enum') === FALSE)
          continue;

        preg_match_all("/\'([^\']+)\'/", $field['type'], $strEnum);

        if(is_array($strEnum[1])) {
          $varName = Inflector::camelize(Inflector::pluralize($var));
          $varName[0] = strtolower($varName[0]);
          $this->set($varName, array_combine($strEnum[1], $strEnum[1]));
        }
      }
    }
  }
  
  
function permisos_array() {
	global $permisos;
	//$permisos = $permiso;
/*echo '-->';
print_r($permiso);
echo '<--';
*/
	if ($this->Auth->user('rol_id') != 1)	// Administrador = 1
	{
		$sql = "SELECT * FROM permisos WHERE rol_id = '".$this->Auth->user('rol_id')."'";

		$record = mysql_query($sql);



		if ($record)
		{
			if (mysql_num_rows($record) == 0)
			{
				unset($permisos);
				$permisos = array();
			}

			$row = mysql_fetch_array($record);

			foreach($permisos as $key => $value)
			{
				if ($row['p'.$key] != 1)
				{
					unset($permisos[$key]);
				}
			}
		}
		else
		{
			unset($permisos);
			$permisos = array();
		}
	}

	if ($this->Auth->user('rol_id') == 1)
	{
		// TODO: REVISAR ERROR QUE SALE AQUI AL DESCOMENTAR ESTO
		//print_r($permisos);
		$permisos[40]['nombre'] = 'Agregar Permiso';
		$permisos[40]['path'] = 'permisos/add';
		$permisos[40]['menu'] = array(array('48' => 'Regresar'));
		$permisos[41]['nombre'] = 'Editar Permiso';
		$permisos[41]['path'] = 'permisos/edit';
		$permisos[41]['menu'] = array(array('48' => 'Regresar'));
		$permisos[42]['nombre'] = 'Permisos';
		$permisos[42]['path'] = 'permisos/index';
		$permisos[42]['menu'] = array(array('3' => 'Regresar'), '46');
		
	}

/*	$config =& Configure::getInstance();
	$config->permisos = $permisos;
        $this->set('permisos', $permisos);
	$permisos2 = '';
	*/
		$permisos2 = '';
//print_r($permisos);

if (count($permisos) > 0)
	foreach($permisos as $key => $value)
	{
		if (ereg($this->params['controller'], $value['path']))
		{
			if (ereg('add', $value['path']))
				$permisos2['add'] = '*';

			if (ereg('edit', $value['path']))
				$permisos2['edit'] = '*';

			if (ereg('lists', $value['path']))
				$permisos2['lists'] = '*';

			if (ereg('activate', $value['path']))
			{
				$permisos2['activate'] = '*';
				$permisos2['deactivate'] = '*';
			}

			if (ereg('index', $value['path']))
			{
				$permisos2['index'] = '*';
				$permisos2['view'] = '*';
			}
		}
	}
//$permisos = 'prueba de paso de v';;
	//$this->set('permisos', $permisos2);
	return $permisos2;
}

    
    

function isAuthorized(){
        if($this->Auth->user('rol_id') == 1) return true; //Remove this line if you don't want admins to have access to everything by default
        if(!empty($this->permissions[$this->action])){
            if($this->permissions[$this->action] == '*') return true;
            if(in_array($this->Auth->user('rol'), $this->permissions[$this->action])) return true;
        }
        $this->Session->setFlash('No estas autorizado para accesar a esta area.');
        $this->redirect(array('controller' => 'pages', 'action' => 'error'));
        return false;
        
    }

}

?>