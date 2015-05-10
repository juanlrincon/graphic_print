<!-- Inclusión de librerías para funcionalidad AJAX (Prototype, Scriptaculous) -->
<?php echo $javascript->link(array('prototype','scriptaculous'), false); ?>

<div class="ciudads form">
<?php echo $form->create('Ciudad');?>
	<fieldset>
	<?php
	    echo $form->input('Ciudad.id');
		echo $form->input('pais_id', array('options' => $paises, 'label' =>'País'), null, array('id' => 'pais_id'));
		// Función para iniciar la busqueda de estados según país seleccionado 
        echo $ajax->observeField('CiudadPaisId', array(
            'url' => array('action' => 'update_estados'), 
            'update' => 'CiudadEstadoId'));
		echo $form->input('estado_id', array('options' => $estados, 'label' =>'Estado'), null, array('id' => 'estados'));
		echo $form->input('nombre', array('label' =>'Ciudad', 'maxLength' => 50));
	?>
	</fieldset>
<?php echo $html->submit2(); ?>
</div>