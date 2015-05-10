<div class="sucursales form">
<?php echo $form->create('Sucursal');?>
	<fieldset>
	<?php
		echo $form->input('id');
		echo $form->input('pais_id');
		echo $form->input('nombre');
		echo $form->input('calle');
		echo $form->input('no_ext');
		echo $form->input('no_int');
		echo $form->input('colonia');
		echo $form->input('ciudad');
		echo $form->input('codigo_postal');
		echo $form->input('estado');
	?>
	</fieldset>
<?php echo $html->submit2(); ?>
</div>
<!-- 
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Sucursal.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Sucursal.id'))); ?></li>
		<li><?php echo $html->link(__('List Sucursales', true), array('action' => 'index'));?></li>
	</ul>
</div>
 -->