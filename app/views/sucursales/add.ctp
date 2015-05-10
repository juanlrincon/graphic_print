<div class="sucursales form">
	<fieldset>
	<?php
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
		<li><?php echo $html->link(__('List Sucursales', true), array('action' => 'index'));?></li>
	</ul>
</div>
 -->