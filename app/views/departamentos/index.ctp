<div class="departamentos index">
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('nombre');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($departamentos as $departamento):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $departamento['Departamento']['nombre']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $departamento['Departamento']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $departamento['Departamento']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $departamento['Departamento']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $departamento['Departamento']['id'])); ?>
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
		<li><?php echo $html->link(__('New Departamento', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Usuarios', true), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Usuario', true), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
 -->
