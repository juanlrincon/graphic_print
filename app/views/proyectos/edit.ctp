<div class="proyectos form">
<?php echo $form->create('Proyecto');?>
	<fieldset>
	<?php
		echo $form->input('id');
		echo $form->input('nombre');
	?>
	</fieldset>
<?php echo $html->submit2(); ?>
</div>
<!-- 
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Proyecto.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Proyecto.id'))); ?></li>
		<li><?php echo $html->link(__('List Proyectos', true), array('action' => 'index'));?></li>
	</ul>
</div>
 -->