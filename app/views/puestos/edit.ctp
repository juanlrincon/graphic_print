<div class="puestos form">
<?php echo $form->create('Puesto');?>
	<fieldset>
	<?php
		echo $form->input('id');
		echo $form->input('nombre');
	?>
	</fieldset>
<?php echo $html->submit2(); ?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Puesto.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Puesto.id'))); ?></li>
		<li><?php echo $html->link(__('List Puestos', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Usuarios', true), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Usuario', true), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
