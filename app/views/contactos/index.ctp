<div class="contactos index">
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('titulo');?></th>
	<th><?php echo $paginator->sort('nombre');?></th>
	<th><?php echo $paginator->sort('ap_paterno');?></th>
	<th><?php echo $paginator->sort('ap_materno');?></th>
	<th><?php echo $paginator->sort('telefono');?></th>
	<th><?php echo $paginator->sort('extension');?></th>
	<th><?php echo $paginator->sort('celular');?></th>
	<th><?php echo $paginator->sort('email');?></th>
	<th><?php echo $paginator->sort('genero');?></th>
	<th><?php echo $paginator->sort('estatus');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($contactos as $contacto):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $contacto['Contacto']['id']; ?>
		</td>
		<td>
			<?php echo $contacto['Contacto']['titulo']; ?>
		</td>
		<td>
			<?php echo $contacto['Contacto']['nombre']; ?>
		</td>
		<td>
			<?php echo $contacto['Contacto']['ap_paterno']; ?>
		</td>
		<td>
			<?php echo $contacto['Contacto']['ap_materno']; ?>
		</td>
		<td>
			<?php echo $contacto['Contacto']['telefono']; ?>
		</td>
		<td>
			<?php echo $contacto['Contacto']['extension']; ?>
		</td>
		<td>
			<?php echo $contacto['Contacto']['celular']; ?>
		</td>
		<td>
			<?php echo $contacto['Contacto']['email']; ?>
		</td>
		<td>
			<?php echo $contacto['Contacto']['genero']; ?>
		</td>
		<td>
			<?php echo $contacto['Contacto']['estatus']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $contacto['Contacto']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $contacto['Contacto']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $contacto['Contacto']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $contacto['Contacto']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<!-- 
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New Contacto', true), array('action' => 'add')); ?></li>
	</ul>
</div>
 -->