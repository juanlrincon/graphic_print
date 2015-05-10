<div class="paises form">
<?php echo $form->create('Pais');?>
	<fieldset>
	<?php
		echo $form->input('id');
		echo $form->input('pais');
	?>
	</fieldset>
<?php echo $html->submit2(); ?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Pais.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Pais.id'))); ?></li>
		<li><?php echo $html->link(__('List Paises', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Estados', true), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Estado', true), array('controller' => 'estados', 'action' => 'add')); ?> </li>
	</ul>
</div>
