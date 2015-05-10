<div class="estados index">
<?php echo '<div class="linea">'.$html->image('linea.jpg', array('border' => '0')).'</div>'; ?>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('estado');?></th>
	<th><?php echo $paginator->sort('pais_id');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
</table>
<?php echo '<div class="linea2">'.$html->image('linea.jpg', array('border' => '0')).'</div>'; ?>
<table border="0" cellpadding="0" cellspacing="0">
<?php
$i = 0;
foreach ($estados as $estado):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $estado['Estado']['estado']; ?>
		</td>
		<td>
			<?php echo $estado['Pais']['pais']; ?>
		</td>
		<td>
			<?php echo $time->format2($estado['Estado']['created']); ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('Ver', true), array('action' => 'view', $estado['Estado']['id'])); ?>
			<?php echo $html->link(__('Editar', true), array('action' => 'edit', $estado['Estado']['id'])); ?>
			<?php echo $html->link(__('Borrar', true), array('action' => 'delete', $estado['Estado']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $estado['Estado']['id'])); ?>
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
		<li><?php echo $html->link(__('New Estado', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Paises', true), array('controller' => 'paises', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Pais', true), array('controller' => 'paises', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Ciudades', true), array('controller' => 'ciudades', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Ciudad', true), array('controller' => 'ciudades', 'action' => 'add')); ?> </li>
	</ul>
</div>
 -->
