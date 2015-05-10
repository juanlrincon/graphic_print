<div class="plazas index">
<?php echo '<div class="linea">'.$html->image('linea.jpg', array('border' => '0')).'</div>'; ?>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('nombre');?></th>
	<th><?php echo $paginator->sort('estatus');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
</table>
<?php echo '<div class="linea2">'.$html->image('linea.jpg', array('border' => '0')).'</div>'; ?>
<table border="0" cellpadding="0" cellspacing="0">
<?php
$i = 0;
foreach ($plazas as $plaza):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $plaza['Plaza']['nombre']; ?>
		</td>
		<td>
			<?php echo $html->estatus($plaza['Plaza']['estatus']); ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $plaza['Plaza']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $plaza['Plaza']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $plaza['Plaza']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $plaza['Plaza']['id'])); ?>
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
		<li><?php echo $html->link(__('New Plaza', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Clientes', true), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Cliente', true), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Usuarios', true), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Usuario', true), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
 -->
