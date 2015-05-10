<div class="cotizaciones index">
<?php echo '<div class="linea">'.$html->image('linea.jpg', array('border' => '0')).'</div>'; ?>
<table border="0" cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('cliente_id');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('estatus');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
</table>
<?php echo '<div class="linea2">'.$html->image('linea.jpg', array('border' => '0')).'</div>'; ?>
<table border="0" cellpadding="0" cellspacing="0">
<?php

$i = 0;

foreach ($cotizaciones as $cotizacion):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
	
?>

	<tr<?php echo $class;?>>
	
		<td><?php echo $cotizacion['Cliente']['nombre']; ?></td>
		<td><?php echo $time->format2($cotizacion['Cotizacion']['created']); ?></td>
		<td><?php echo $html->estatus($cotizacion['Cotizacion']['estatus']); ?></td>
		<td class="actions">
		<?php
			echo $html->link(__('View', true), array('action' => 'view', $cotizacion['Cotizacion']['id']));
			echo ' / ';
			echo $html->link(__('Edit', true), array('action' => 'edit', $cotizacion['Cotizacion']['id']));
			echo ' / ';
			echo $html->link(__('Delete', true), array('action' => 'delete', $cotizacion['Cotizacion']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $cotizacion['Cotizacion']['id'])); ?>
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
		<li><?php echo $html->link(__('New Cotizacion', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Clientes', true), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Cliente', true), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Proyectos', true), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Proyecto', true), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Cantidades', true), array('controller' => 'cantidades', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Cantidad', true), array('controller' => 'cantidades', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Papeles Cotizaciones', true), array('controller' => 'papeles_cotizaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Papeles Cotizacion', true), array('controller' => 'papeles_cotizaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>

-->
