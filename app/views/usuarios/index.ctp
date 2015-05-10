<div class="usuarios index">
<?php echo '<div class="linea">'.$html->image('linea.jpg', array('border' => '0')).'</div>'; ?>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('username');?></th>
	<th><?php echo $paginator->sort('puesto_id');?></th>
	<th><?php echo $paginator->sort('departamento_id');?></th>
	<th><?php echo $paginator->sort('plaza_id');?></th>
	<th><?php echo $paginator->sort('rol_id');?></th>
	<th><?php echo $paginator->sort('titulo');?></th>
	<th><?php echo $paginator->sort('Nombre','nombre');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
</table>
<?php echo '<div class="linea2">'.$html->image('linea.jpg', array('border' => '0')).'</div>'; ?>
<table border="0" cellpadding="0" cellspacing="0">
<?php
$i = 0;
foreach ($usuarios as $usuario):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $usuario['Usuario']['username']; ?>
		</td>
		<td>
			<?php echo $usuario['Puesto']['nombre']; ?>
		</td>
		<td>
			<?php echo $usuario['Departamento']['nombre']; ?>
		</td>
		<td>
			<?php echo $usuario['Plaza']['nombre']; ?>
		</td>
		<td>
			<?php echo $usuario['Rol']['nombre']; ?>
		</td>
		<td>
			<?php echo $usuario['Usuario']['titulo']; ?>
		</td>
		<td>
			<?php echo $usuario['Usuario']['nombre'].' '.$usuario['Usuario']['ap_paterno'].' '.$usuario['Usuario']['ap_materno']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $usuario['Usuario']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $usuario['Usuario']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $usuario['Usuario']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $usuario['Usuario']['id'])); ?>
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
		<li><?php echo $html->link(__('New Usuario', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Puestos', true), array('controller' => 'puestos', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Puesto', true), array('controller' => 'puestos', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Departamentos', true), array('controller' => 'departamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Departamento', true), array('controller' => 'departamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Plazas', true), array('controller' => 'plazas', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Plaza', true), array('controller' => 'plazas', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Roles', true), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Rol', true), array('controller' => 'roles', 'action' => 'add')); ?> </li>
	</ul>
</div>
 -->