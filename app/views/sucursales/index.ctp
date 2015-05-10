<div class="sucursales index">
<?php echo '<div class="linea">'.$html->image('linea.jpg', array('border' => '0')).'</div>'; ?>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('pais_id');?></th>
	<th><?php echo $paginator->sort('nombre');?></th>
	<th><?php echo $paginator->sort('ciudad');?></th>
	<th><?php echo $paginator->sort('estado');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
</table>
<?php echo '<div class="linea2">'.$html->image('linea.jpg', array('border' => '0')).'</div>'; ?>
<table border="0" cellpadding="0" cellspacing="0">
<?php
$i = 0;
foreach ($sucursales as $sucursal):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $sucursal['Pais']['pais']; ?>
		</td>
		<td>
			<?php echo $sucursal['Sucursal']['nombre']; ?>
		</td>
		<td>
			<?php echo $sucursal['Sucursal']['ciudad']; ?>
		</td>
		<td>
			<?php echo $sucursal['Sucursal']['estado']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $sucursal['Sucursal']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $sucursal['Sucursal']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $sucursal['Sucursal']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $sucursal['Sucursal']['id'])); ?>
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
		<li><?php echo $html->link(__('New Sucursal', true), array('action' => 'add')); ?></li>
	</ul>
</div>
 -->
