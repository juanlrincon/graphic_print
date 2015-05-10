<?php
/* SVN FILE: $Id$ */
/**
 * Short description for file.
 *
 * This file is application-wide helper file. You can put all
 * application-wide helper-related methods here.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework (http://www.cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake
 * @since         CakePHP(tm) v 0.2.9
 * @version       $Revision$
 * @modifiedby    $LastChangedBy$
 * @lastmodified  $Date$
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
App::import('Core', 'Helper');
/**
 * This is a placeholder class.
 * Create the same file in app/app_helper.php
 *
 * Add your application-wide methods in the class below, your helpers
 * will inherit them.
 *
 * @package       cake
 * @subpackage    cake.cake
 */
class AppHelper extends Helper {

	function submit2($value = '', $padding = '') {

		if ($value == '')
		{
			$value = 'Guardar';
		}

		if ($padding == '')
		{
			$padding = '30';
		}

		return '<div class="submit" style="padding-top:'.$padding.'px;"><input type="submit" value="'.$value.'" />'.
		 '<a href="javascript:document.forms[0].submit();false;">'.
		$this->image('boton.jpg', array('class' => 'image_btn')).
		'</a></div></form>';
		
	}

function cssMenu3() {
global $permiso;

$permisos = unserialize(serialize($permiso));

				//print_r($permisos);
////	global $permisos;
	
	$links = '';
$active = false;
////	$config =& Configure::getInstance();
////	$permisos = $config->permisos;
				//echo $this->Session->read('url_referrer');
				//echo '<br>';
				//echo $this->params['url']['url'];
//die($permisos);
$counter = 0;
					echo '<div id="accordionm">';
if (count($permisos) > 0)
	foreach($permisos as $key => $value)
	{
		if (isset($value['path']))
		{
			if ($this->params['action'] == 'view')
				$action2 = 'edit';
			else
				$action2 = '';			
								// 	cambiar activate por borrar o algo asi
				if (ereg('edit', $value['path']) or ereg('activate', $value['path']))
					continue;

				if (isset($value['titulo']) and $value['titulo'] != '')
				{
					if ($counter != 0)
						$links .= '</div>'."\n";

					$counter++;
					//if ($this->controller.'/'.$this->action == '')
					//echo $this->params['controller'];
					//$first = 1;
					$links .= '<a href="#" style="display:block;margin:0px;padding:0px;">'.$value['titulo'].'</a><div>'."\n";
					//$links .= '<div onclick="toggle(\'div_'.$key.'\');" style="cursor:pointer;">'.$value['titulo'].'</div><div id="div_'.$key.'" style="display:none;">'."\n";
				}
					if (substr($value['path'], 0, strrpos($value['path'], '/')) == $this->params['controller'])
						$active = $counter-1;

					if ($this->params['controller'].'/'.$this->params['action'] == $value['path'])
						$selected = 'class="azul"';
					else
						$selected = '';

					$links .= '<li style="list-style-type: none;"><a href="'.$this->base.'/'.$value['path'].'" '.$selected.'>'.$value['nombre'].'</a><br>'."\n";
		}
	}
	$links .= '</div></div>'."\n";
	$links .= "<script>
 jQuery(document).ready(function(){
 	jQuery('#accordionm').accordion({ collapsible: true, autoHeight: false,  active: ".$active."});
	  jQuery('#popup').corner('8px');
	   });
	   
	</script>";
	return $links;
}
	

function cssMenu2() {
global $permiso;

$permisos = unserialize(serialize($permiso));

				//print_r($permisos);
////	global $permisos;
	
	$links = '';

////	$config =& Configure::getInstance();
////	$permisos = $config->permisos;
				//echo $this->Session->read('url_referrer');
				//echo '<br>';
				//echo $this->params['url']['url'];

//print_r($config->permisos);
/*if (count($permisos) > 0)
	foreach($permisos as $key => $value)
	*/
if (count($permisos) > 0)
	foreach($permisos as $key => $value)
	{
		if (isset($value['path']))
		{
			if ($this->params['action'] == 'view')
				$action2 = 'edit';
			else
				$action2 = '';			

			if ($this->params['controller'].'/'.$this->params['action'] == $value['path'] or $this->params['controller'].'/'.$action2 == $value['path'])
			{
				foreach($value['menu'] as $key2 => $value2)
				{
					if (is_array($value2))
					{
						foreach($value2 as $key3 => $value3)
						{
							/*if (strlen($value3) >= 1 and strlen($value3) <= 15)
								$links .= '<div id="botones">';
							else if (strlen($value3) >= 15)
								$links .= '<div id="botones2">';
	*/
							$links .= '<a href="'.$this->base.'/'.$permisos[$key3]['path'].'">'.$value3.'</a>';
		//					$links .= '</div>';
						}
					}
					else
					{
						if (isset($permisos[$value2]))
						{
							//if ($url_referrer == '/'.$permisos[$value2]['path'] and )
							//	$permisos[$value2]['nombre'] = 'Regresar';
	
							/*if (strlen($permisos[$value2]['nombre']) >= 1 and strlen($permisos[$value2]['nombre']) <= 15)
								$links .= '<div id="botones">';
							else if (strlen($permisos[$value2]['nombre']) >= 15)
								$links .= '<div id="botones2">';
	*/
							$links .= '<a href="'.$this->base.'/'.$permisos[$value2]['path'].'">'.$permisos[$value2]['nombre'].'</a>';
		//					$links .= '</div>';
						}
					}
				}
			}
		}
	}
	return $links;
}

function menu($menu)
{
	//print_r($menu);
	foreach($menu as $key => $value)
	{
?>		<div class="menulista"><?php echo $this->link($value, array('controller' => 'cursos', 'action' => 'index', $key)); ?></div>
	<?php
	}
}


function link2($title, $url = null, $htmlAttributes = array(), $confirmMessage = false, $escapeTitle = true)
{
	//global $permisos;
	$config =& Configure::getInstance();

if (count($config->permisos) > 0)
	foreach($config->permisos as $key => $value)
	{
		if ($url['action'] == 'view')
			$action2 = 'edit';
		else
			$action2 = '';

		if ($url['action'] == 'deactivate')
			$action3 = 'activate';
		else
			$action3 = '';

		if ($this->params['controller'].'/'.$url['action'] == $value['path'] or $this->params['controller'].'/'.$action2 == $value['path'] or $this->params['controller'].'/'.$action3 == $value['path'])
			return $this->link($title, $url, $htmlAttributes, $confirmMessage, $escapeTitle);
	}
}


function format2($date)
{
	global $short_date;

	if ($date != 0)
	{
	
		$date = substr($date,0,10);
		
		$date_split = split(' - ', $this->format('d - M - Y', $date));
		
		return $date_split[0].' - '.$short_date[$date_split[1]].' - '.$date_split[2];
	}
}



function estatus($status)
{
	if($status == 1)
		return 'Activo';
	else
		return 'Inactivo';
}

}
?>