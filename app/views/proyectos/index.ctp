<div class="proyectos index">
<?php echo '<div class="linea">'.$html->image('linea.jpg', array('border' => '0')).'</div>'; ?>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('nombre');?></th>
	<th><?php echo $paginator->sort('created_id');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
</table>
<?php echo '<div class="linea2">'.$html->image('linea.jpg', array('border' => '0')).'</div>'; ?>
<table border="0" cellpadding="0" cellspacing="0">
<?php
$i = 0;
foreach ($proyectos as $proyecto):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $proyecto['Proyecto']['nombre']; ?>
		</td>
		<td>
			<?php
			echo $proyecto['Creador']['nombre'].' '.$proyecto['Creador']['ap_paterno'].' '.$proyecto['Creador']['ap_materno'];
			?>
		</td>
		<td>
			<?php echo $time->format2($proyecto['Proyecto']['created']); ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $proyecto['Proyecto']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $proyecto['Proyecto']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $proyecto['Proyecto']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $proyecto['Proyecto']['id'])); ?>
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
		<li><?php echo $html->link(__('New Proyecto', true), array('action' => 'add')); ?></li>
	</ul>
</div>
 -->
