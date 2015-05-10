<div class="clientes form">
<?php echo $form->create('Cliente');?>
	<fieldset>
	<?php
		echo $form->input('id');
		echo $form->input('contacto_id');
		echo $form->input('pais_id');
		echo $form->input('sucursal_id');
		echo $form->input('plaza_id');
		echo $form->input('vendedor_id');
		echo $form->input('recepcion_material_id');
		echo $form->input('recepcion_factura_id');
		echo $form->input('entrega_cheque_id');
		echo $form->input('agente_id');
		echo $form->input('nombre_comercial');
		echo $form->input('colonia');
		echo $form->input('rfc');
		echo $form->input('no_ext');
		echo $form->input('calle');
		echo $form->input('codigo_postal');
		echo $form->input('razon_social');
		echo $form->input('no_int');
		echo $form->input('ciudad');
		echo $form->input('estado');
		echo $form->input('comentarios');
		echo $form->input('fecha_registro');
	?>
	</fieldset>
<?php echo $html->submit2(); ?>
</div>
<!-- 
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Cliente.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Cliente.id'))); ?></li>
		<li><?php echo $html->link(__('List Clientes', true), array('action' => 'index'));?></li>
	</ul>
</div>
 -->