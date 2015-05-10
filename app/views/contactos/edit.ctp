<div class="contactos form">
<?php echo $form->create('Contacto');?>
	<fieldset>
	<?php
		echo $form->input('id');
		echo $form->input('titulo');
		echo $form->input('nombre');
		echo $form->input('ap_paterno');
		echo $form->input('ap_materno');
		echo $form->input('telefono');
		echo $form->input('extension');
		echo $form->input('celular');
		echo $form->input('email');
		echo $form->input('genero');
	?>
	</fieldset>
<?php echo $html->submit2(); ?>
</div>
<!-- 
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Contacto.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Contacto.id'))); ?></li>
		<li><?php echo $html->link(__('List Contactos', true), array('action' => 'index'));?></li>
	</ul>
</div>
 -->
