<div class="usuarios form">
<?php echo $form->create('Usuario');?>
	<fieldset>
 		<legend><?php __('Edit Usuario');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('username');
		echo $form->input('password');
		echo $form->input('puesto_id');
		echo $form->input('departamento_id');
		echo $form->input('plaza_id');
		echo $form->input('rol_id');
		echo $form->input('titulo');
		echo $form->input('nombre');
		echo $form->input('ap_paterno');
		echo $form->input('ap_materno');
		echo $form->input('calle');
		echo $form->input('no_ext');
		echo $form->input('no_int');
		echo $form->input('colonia');
		echo $form->input('ciudad');
		echo $form->input('codigo_postal');
		echo $form->input('estado');
		echo $form->input('email_personal');
		echo $form->input('email_empresa');
		echo $form->input('telefono1');
		echo $form->input('telefono2');
		echo $form->input('celular');
		echo $form->input('nextel');
		echo $form->input('fecha_nacimiento');
		echo $form->input('fotografia');
		echo $form->input('notas');
		echo $form->input('no_empleado');
		echo $form->input('nomina');
		echo $form->input('no_seguro_social');
		echo $form->input('fecha_ingreso');
		//echo $form->input('estatus');
	?>
	</fieldset>
<?php echo $html->submit2(); ?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Usuario.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Usuario.id'))); ?></li>
		<li><?php echo $html->link(__('List Usuarios', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Puestos', true), array('controller' => 'puestos', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Puesto', true), array('controller' => 'puestos', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Departamentos', true), array('controller' => 'departamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Departamento', true), array('controller' => 'departamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Plazas', true), array('controller' => 'plazas', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Plaza', true), array('controller' => 'plazas', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Roles', true), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Rol', true), array('controller' => 'roles', 'action' => 'add')); ?> </li>
	</ul>
</div>
