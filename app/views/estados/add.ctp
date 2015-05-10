<div class="estados form">
<?php echo $form->create('Estado');?>
	<fieldset>
	<?php
		echo $form->input('estado');
		echo $form->input('pais_id');
		echo $html->link(__('New Pais', true), array('controller' => 'paises', 'action' => 'add'));
		//echo '&nbsp;&nbsp;';
		//echo $html->link(__('List Paises', true), array('controller' => 'paises', 'action' => 'index'));
	?>
	</fieldset>
<?php
//echo $form->end('Guardar');
echo $html->submit2();
?>
</div>
<!-- 
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Estados', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Paises', true), array('controller' => 'paises', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Pais', true), array('controller' => 'paises', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Ciudades', true), array('controller' => 'ciudades', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Ciudad', true), array('controller' => 'ciudades', 'action' => 'add')); ?> </li>
	</ul>
</div>
 -->