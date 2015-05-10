<?php

class HomeController extends AppController {
/**
 * Controller name
 *
 * @var string
 * @access public
 */
	var $name = 'Home';
/**
 * Default helper
 *
 * @var array
 * @access public
 */
	var $helpers = array('Html');
/**
 * This controller does not use a model
 *
 * @var array
 * @access public
 */
	var $uses = array();
/**
 * Displays a view
 *
 * @param mixed What page to display
 * @access public
 */
	   
	   function index() {
	   	$this->pageTitle = 'Bienvenido';
	   	$this->layout = 'home';
	   }
}

?>