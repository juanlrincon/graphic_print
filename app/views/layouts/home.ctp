<?php
/* SVN FILE: $Id$ */
/**
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
 * @subpackage    cake.cake.libs.view.templates.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @version       $Revision$
 * @modifiedby    $LastChangedBy$
 * @lastmodified  $Date$
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
$session->flash('auth');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $html->meta('icon');

		echo $html->css('style');
echo $javascript->link(array('jquery_min', 'jquery-ui.min', 'jquery.corner', 'custom-form-elements'), true);
//echo $html->script('jquery_min');

		echo $scripts_for_layout;

		//echo '<script type="text/javascript" src="/fuerza_grafica/js/.js"></script>';
		
echo "<script>
/*
 jQuery(document).ready(function(){
 	jQuery('#accordionm').accordion({ collapsible: true, autoHeight: false,  active: 2});
	  jQuery('#popup').corner('8px');
	   });
	*/   
	/*   
function toggle(obj) {
	var el = document.getElementById(obj);
	if (el.style.display == 'none') {
		el.style.display = 'block';
	}
	else {
		el.style.display = 'none';
	}
}
*/
</script>";

echo '<script>
function setbox0(name)
{

	obj1 = eval("document.getElementById(\'"+name+"\')");
	obj2 = eval("document.getElementById(\'box_"+name+"\')");
	obj2.innerHTML = obj1.options[0].text;
}

function setbox(obj)
{

	obj2 = eval("document.getElementById(\'box_"+obj.id+"\')");
	obj2.innerHTML = obj.options[(obj.selectedIndex)].text;
}

</script>';
	?>

</head>



<script type="text/javascript">
$(function () {
	  $('.bubbleInfo').each(function () {
	    // options
	    var distance = 20;
	    var time = 250;
	    var hideDelay = 800;

	    var hideDelayTimer = null;

	    // tracker
	    var beingShown = false;
	    var shown = false;
	    
	    var trigger = $('.trigger', this);
	    var popup = $('.popup', this).css('opacity', 0);

	    // set the mouseover and mouseout on both element
	    $([trigger.get(0), popup.get(0)]).mouseover(function () {
	      // stops the hide event if we move from the trigger to the popup element
	      if (hideDelayTimer) clearTimeout(hideDelayTimer);

	      // don't trigger the animation again if we're being shown, or already visible
	      if (beingShown || shown) {
	        return;
	      } else {
	        beingShown = true;
	        // reset position of popup box
	        popup.css({
	          top: 20,
	          left: 35,
	          display: 'block' // brings the popup back in to view
	        })

	        // (we're using chaining on the popup) now animate it's opacity and position
	        .animate({
	          top: '-=' + distance + 'px',
	          opacity: 1
	        }, time, 'swing', function() {
	          // once the animation is complete, set the tracker variables
	          beingShown = false;
	          shown = true;
	        });
	      }
	    }).mouseout(function () {
	      // reset the timer if we get fired again - avoids double animations
	      if (hideDelayTimer) clearTimeout(hideDelayTimer);
	      
	      // store the timer so that it can be cleared in the mouseover if required
	      hideDelayTimer = setTimeout(function () {
	        hideDelayTimer = null;
	        popup.animate({
	          top: '-=' + distance + 'px',
	          opacity: 0
	        }, time, 'swing', function () {
	          // once the animate is complete, set the tracker variables
	          shown = false;
	          // hide the popup entirely after the effect (opacity alone doesn't do the job)
	          popup.css('display', 'none');
	        });
	      }, hideDelay);
	    });
	  });
	});

</script>


<body>

<?php 
//echo $html->image('fondo.jpg', array('class' => 'grid'));
?>

	<div id="container">
		<div id="header">
            <div id="logotipo">
				<?php
					echo '<a href="'.$this->base.'/pages/welcome">'.$html->image('logo.jpg', array('width' => '198')).'</a>';
				?>
			</div>
			<div id="username">
			<?php
			//global $variable;
			//echo $variable;
			//echo '<--';
			global $days, $months;
			echo $days[date('N')].'<br>'.date('d').' de '.$months[date('n')].', '.date('Y'); ?>
			<br><br><div class="azul">
			<?php
			//print_r($_SESSION);
			if (isset($_SESSION['Auth']['Usuario']))
			{
				echo $_SESSION['Auth']['Usuario']['nombre'].' '.$_SESSION['Auth']['Usuario']['ap_paterno'].' '.$_SESSION['Auth']['Usuario']['ap_materno'];
			}
			?></div>
			<?php echo $html->link('Logout', array('controller' => 'usuarios', 'action' => 'logout')); ?>
			</div>
		</div>
		<div id="content">
		<div id="menus">Inicio<br>
<?php echo $html->cssMenu3();
?>
</div>
			<div id="contenido">
				<div class="title" style="float:left;"><?php echo ucwords($this->params['controller']); ?></div>
<div class="bubbleInfo">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img class="trigger" src="<?php echo $this->base; ?>/img/info.jpg" />
  <div class="popup" id="popup">
De acuerdo a Greimas, es un enunciado ya sea gr&aacute;fico o f&oacute;nico que nos permite visualizar las palabras que escuchamos que es utilizado para manifestar el proceso lingu&iacute;stico. 
  </div>
</div>
				<div class="azul" style="clear:both;"><?php echo $this->pageTitle; ?></div>

				<?php $session->flash(); ?>

				
				<?php
					if ($this->action == 'index')
					{
						echo '<div id="lista_content">';		
					}
					else
					{
						echo '<div id="final_content">';
					}
				?>
				
				<?php echo $content_for_layout; ?></div>

			</div>
		</div>



		<div id="footer">
		</div>
	</div>
	<?php echo $cakeDebug; ?>
</body>
</html>