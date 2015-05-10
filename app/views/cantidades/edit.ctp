<div class="cantidades form">
<?php echo $form->create('Cantidad');?>
	<fieldset>
	<?php
		echo $form->input('id');
		echo $form->input('cantidad');
		echo $form->input('tipo');
		echo $form->input('solapas');
	?>
	</fieldset>
<?php echo $html->submit2(); ?>
</div>
<!-- 
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Cantidad.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Cantidad.id'))); ?></li>
		<li><?php echo $html->link(__('List Cantidades', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Cotizaciones', true), array('controller' => 'cotizaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Cotizacion', true), array('controller' => 'cotizaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
 -->
 