<div class="roles index">
<?php echo '<div class="linea">'.$html->image('linea.jpg', array('border' => '0')).'</div>'; ?>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('nombre');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
</table>
<?php echo '<div class="linea2">'.$html->image('linea.jpg', array('border' => '0')).'</div>'; ?>
<table border="0" cellpadding="0" cellspacing="0">
<?php
$i = 0;
foreach ($roles as $rol):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $rol['Rol']['nombre']; ?>
		</td>
		<td>
			<?php echo $time->format2($rol['Rol']['created']); ?>
		</td>
		<td>
			<?php echo $time->format2($rol['Rol']['modified']); ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $rol['Rol']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $rol['Rol']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $rol['Rol']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $rol['Rol']['id'])); ?>
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
		<li><?php echo $html->link(__('New Rol', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Usuarios', true), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Usuario', true), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
 -->
