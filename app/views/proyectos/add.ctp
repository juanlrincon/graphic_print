<div class="proyectos form">
<?php echo $form->create('Proyecto');?>
	<fieldset>
	<?php
		echo $form->input('nombre');
	?>
	</fieldset>
<?php echo $html->submit2(); ?>
</div>
<!-- 
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Proyectos', true), array('action' => 'index'));?></li>
	</ul>
</div>
 -->
