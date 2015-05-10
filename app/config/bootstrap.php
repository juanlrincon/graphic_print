<?php
/* SVN FILE: $Id$ */
/**
 * Short description for file.
 *
 * Long description for file
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
 * @subpackage    cake.app.config
 * @since         CakePHP(tm) v 0.10.8.2117
 * @version       $Revision$
 * @modifiedby    $LastChangedBy$
 * @lastmodified  $Date$
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
/**
 *
 * This file is loaded automatically by the app/webroot/index.php file after the core bootstrap.php is loaded
 * This is an application wide file to load any function that is not used within a class define.
 * You can also use this to include or require any files in your application.
 *
 */
 // Para configurar el lenguaje de la aplicación a español (es) 
    Configure::write('Config.language', 'spa');
/**
 * The settings below can be used to set additional paths to models, views and controllers.
 * This is related to Ticket #470 (https://trac.cakephp.org/ticket/470)
 *
 * $modelPaths = array('full path to models', 'second full path to models', 'etc...');
 * $viewPaths = array('this path to views', 'second full path to views', 'etc...');
 * $controllerPaths = array('this path to controllers', 'second full path to controllers', 'etc...');
 *
 */
//EOF
global $permiso, $permisos, $short_date, $tc_images_path, $days, $months;

$permiso[1]['titulo'] = 'Usuarios';
$permiso[1]['nombre'] = 'Agregar Usuario';
$permiso[1]['path'] = 'usuarios/add';
$permiso[2]['nombre'] = 'Editar Usuario';
$permiso[2]['path'] = 'usuarios/edit';
$permiso[3]['nombre'] = 'Lista de Usuarios';
$permiso[3]['path'] = 'usuarios/index';
$permiso[4]['nombre'] = 'Borrar Usuario';
$permiso[4]['path'] = 'usuarios/activate';
//$permiso[4]['espacio'] = '';

$permiso[5]['titulo'] = 'Cotizaciones';
$permiso[5]['nombre'] = 'Agregar Cotizaci&oacute;n';
$permiso[5]['path'] = 'cotizaciones/add';
$permiso[6]['nombre'] = 'Editar Cotización';
$permiso[6]['path'] = 'cotizaciones/edit';
$permiso[7]['nombre'] = 'Lista de Cotizaciones';
$permiso[7]['path'] = 'cotizaciones/index';
$permiso[8]['nombre'] = 'Borrar Cotizaciones';
$permiso[8]['path'] = 'cotizaciones/activate';
$permiso[8]['espacio'] = '';

$permiso[9]['titulo'] = 'Estados';
$permiso[9]['nombre'] = 'Agregar Estado';
$permiso[9]['path'] = 'estados/add';
$permiso[10]['nombre'] = 'Editar Estado';
$permiso[10]['path'] = 'estados/edit';
$permiso[11]['nombre'] = 'Lista de Estados';
$permiso[11]['path'] = 'estados/index';
$permiso[12]['nombre'] = 'Activar Estado';
$permiso[12]['path'] = 'estados/activate';
$permiso[12]['espacio'] = '';

$permiso[13]['titulo'] = 'Clientes';
$permiso[13]['nombre'] = 'Agregar Cliente';
$permiso[13]['path'] = 'clientes/add';
$permiso[14]['nombre'] = 'Editar Cliente';
$permiso[14]['path'] = 'clientes/edit';
$permiso[15]['nombre'] = 'Listar Clientes';
$permiso[15]['path'] = 'clientes/index';
$permiso[16]['nombre'] = 'Borrar Cliente';
$permiso[16]['path'] = 'paises/activate';
$permiso[16]['espacio'] = '';

$permiso[17]['titulo'] = 'Plazas';
$permiso[17]['nombre'] = 'Agregar Plaza';
$permiso[17]['path'] = 'plazas/add';
$permiso[18]['nombre'] = 'Editar Plaza';
$permiso[18]['path'] = 'plazas/edit';
$permiso[18]['nombre'] = 'Lista de Plazas';
$permiso[18]['path'] = 'plazas/index';
$permiso[19]['nombre'] = 'Borrar Plaza';
$permiso[19]['path'] = 'plazas/activate';
$permiso[19]['espacio'] = '';

$permiso[20]['titulo'] = 'Ciudades';
$permiso[20]['nombre'] = 'Agregar Ciudad';
$permiso[20]['path'] = 'ciudades/add';
$permiso[21]['nombre'] = 'Editar Ciudad';
$permiso[21]['path'] = 'ciudades/edit';
$permiso[22]['nombre'] = 'Lista de Ciudades';
$permiso[22]['path'] = 'ciudades/index';
$permiso[23]['nombre'] = 'Borrar Ciudad';
$permiso[23]['path'] = 'ciudades/activate';
$permiso[23]['espacio'] = '';

$permiso[24]['titulo'] = 'Roles';
$permiso[24]['nombre'] = 'Agregar Rol';
$permiso[24]['path'] = 'roles/add';
$permiso[25]['nombre'] = 'Editar Rol';
$permiso[25]['path'] = 'roles/edit';
$permiso[26]['nombre'] = 'Lista de Roles';
$permiso[26]['path'] = 'roles/index';
$permiso[27]['nombre'] = 'Borrar Rol';
$permiso[27]['path'] = 'roles/activate';
$permiso[27]['espacio'] = '';

$permiso[28]['titulo'] = 'Proyectos';
$permiso[28]['nombre'] = 'Agregar Proyecto';
$permiso[28]['path'] = 'proyectos/add';
$permiso[29]['nombre'] = 'Editar Proyecto';
$permiso[29]['path'] = 'proyectos/edit';
$permiso[30]['nombre'] = 'Lista de Proyectos';
$permiso[30]['path'] = 'proyectos/index';
$permiso[31]['nombre'] = 'Borrar Proyecto';
$permiso[31]['path'] = 'proyectos/activate';
$permiso[31]['espacio'] = '';

$permiso[32]['titulo'] = 'Sucursales';
$permiso[32]['nombre'] = 'Agregar Sucursal';
$permiso[32]['path'] = 'sucursales/add';
$permiso[33]['nombre'] = 'Editar Sucursal';
$permiso[33]['path'] = 'sucursales/edit';
$permiso[34]['nombre'] = 'Lista de Sucursales';
$permiso[34]['path'] = 'sucursales/index';
$permiso[35]['nombre'] = 'Borrar Sucursal';
$permiso[35]['path'] = 'sucursales/activate';
$permiso[35]['espacio'] = '';

$permiso[36]['titulo'] = 'Departamentos';
$permiso[36]['nombre'] = 'Agregar Departamento';
$permiso[36]['path'] = 'departamentos/add';
$permiso[37]['nombre'] = 'Editar Departamento';
$permiso[37]['path'] = 'departamentos/edit';
$permiso[38]['nombre'] = 'Listar Departamentos';
$permiso[38]['path'] = 'departamentos/index';
$permiso[39]['nombre'] = 'Borrar Departamento';
$permiso[39]['path'] = 'departamentos/activate';
$permiso[39]['espacio'] = '';
/*
$permiso[43]['titulo'] = 'Secciones';
$permiso[43]['nombre'] = 'Editar Sección';
$permiso[43]['path'] = 'secciones/edit';
$permiso[44]['nombre'] = 'Secciones';
$permiso[44]['path'] = 'secciones/index';
$permiso[44]['espacio'] = '';

$permiso[45]['nombre'] = '';
$permiso[45]['path'] = '';
$permiso[45]['espacio'] = '';
*/


//Configure::write('DateBehaviour.dateFormat', 'dd-mm-yyyy');
//Configure::write('DateBehaviour.delimiterDateFormat', '-');

$short_date['Jan'] = 'Ene';
$short_date['Feb'] = 'Feb';
$short_date['Mar'] = 'Mar';
$short_date['Apr'] = 'Abr';
$short_date['May'] = 'May';
$short_date['Jun'] = 'Jun';
$short_date['Jul'] = 'Jul';
$short_date['Aug'] = 'Ago';
$short_date['Sep'] = 'Sep';
$short_date['Oct'] = 'Oct';
$short_date['Nov'] = 'Nov';
$short_date['Dec'] = 'Dic';

$months[1] = 'Enero';
$months[2] = 'Febrero';
$months[3] = 'Marzo';
$months[4] = 'Abril';
$months[5] = 'Mayo';
$months[6] = 'Junio';
$months[7] = 'Julio';
$months[8] = 'Agosto';
$months[9] = 'Septiembre';
$months[10] = 'Octubre';
$months[11] = 'Noviembre';
$months[12] = 'Diciembre';

$days[1] = 'Lunes';
$days[2] = 'Martes';
$days[3] = 'Mi&eacute;rcoles';
$days[4] = 'Jueves';
$days[5] = 'Viernes';
$days[6] = 'Sábado';
$days[7] = 'Domingo';

//$_GLOBALS['1'] = 'aaa';
//global day;
//$variable = 'aaaaaaaaaaaaaaaaaaaaaaa';

$tc_images_path = '/files/tipocursos/';

//echo $this->TipoCurso->field('nombre', array('id' => '1'));
//$menu[0] = 1;
/*
$config =& Configure::getInstance();
$config->permisos = array();
*/
define('DEFAULT_LANGUAGE', 'spa');
?>