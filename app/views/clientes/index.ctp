<div class="clientes index">
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('nombre_comercial');?></th>
	<th><?php echo $paginator->sort('razon_social');?></th>
	<th><?php echo $paginator->sort('fecha_registro');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php

$i = 0;
foreach ($clientes as $cliente):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $cliente['Cliente']['nombre_comercial']; ?>
		</td>
		<td>
			<?php echo $cliente['Cliente']['razon_social']; ?>
		</td>
		<td>
			<?php echo $time->format2($cliente['Cliente']['fecha_registro']); ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $cliente['Cliente']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $cliente['Cliente']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $cliente['Cliente']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $cliente['Cliente']['id'])); ?>
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
		<li><?php echo $html->link(__('New Cliente', true), array('action' => 'add')); ?></li>
	</ul>
</div>
 -->