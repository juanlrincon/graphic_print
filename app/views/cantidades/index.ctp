<div class="cantidades index">
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('cantidad');?></th>

	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($cantidades as $cantidad):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $cantidad['Cantidad']['cantidad']; ?>
		</td>

		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $cantidad['Cantidad']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $cantidad['Cantidad']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $cantidad['Cantidad']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $cantidad['Cantidad']['id'])); ?>
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
		<li><?php echo $html->link(__('New Cantidad', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Cotizaciones', true), array('controller' => 'cotizaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Cotizacion', true), array('controller' => 'cotizaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
 -->
 