<div class="usuarios index">
<h2><?php __('Usuarios');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('username');?></th>
	<th><?php echo $paginator->sort('puesto_id');?></th>
	<th><?php echo $paginator->sort('departamento_id');?></th>
	<th><?php echo $paginator->sort('plaza_id');?></th>
	<th><?php echo $paginator->sort('rol_id');?></th>
	<th><?php echo $paginator->sort('titulo');?></th>
	<th><?php echo $paginator->sort('nombre');?></th>
	<th><?php echo $paginator->sort('ap_paterno');?></th>
	<th><?php echo $paginator->sort('ap_materno');?></th>
	<!--<th><?php echo $paginator->sort('calle');?></th>
	<th><?php echo $paginator->sort('no_ext');?></th>
	<th><?php echo $paginator->sort('no_int');?></th>
	<th><?php echo $paginator->sort('colonia');?></th>
	<th><?php echo $paginator->sort('ciudad');?></th>
	<th><?php echo $paginator->sort('codigo_postal');?></th>
	<th><?php echo $paginator->sort('estado');?></th>
	<th><?php echo $paginator->sort('email_personal');?></th>
	<th><?php echo $paginator->sort('email_empresa');?></th>
	<th><?php echo $paginator->sort('telefono1');?></th>
	<th><?php echo $paginator->sort('telefono2');?></th>
	<th><?php echo $paginator->sort('celular');?></th>
	<th><?php echo $paginator->sort('nextel');?></th>
	<th><?php echo $paginator->sort('fecha_nacimiento');?></th>
	<th><?php echo $paginator->sort('fotografia');?></th>
	<th><?php echo $paginator->sort('notas');?></th>
	<th><?php echo $paginator->sort('no_empleado');?></th>
	<th><?php echo $paginator->sort('nomina');?></th>
	<th><?php echo $paginator->sort('no_seguro_social');?></th>
	<th><?php echo $paginator->sort('fecha_ingreso');?></th>
	<th><?php echo $paginator->sort('estatus');?></th>-->
	<th class="actions"><?php __('Actions');?></th>
</tr>
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
			<?php echo $usuario['Usuario']['id']; ?>
		</td>
		<td>
			<?php echo $usuario['Usuario']['username']; ?>
		</td>
		<td>
			<?php echo $html->link($usuario['Puesto']['nombre'], array('controller' => 'puestos', 'action' => 'view', $usuario['Puesto']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($usuario['Departamento']['nombre'], array('controller' => 'departamentos', 'action' => 'view', $usuario['Departamento']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($usuario['Plaza']['nombre'], array('controller' => 'plazas', 'action' => 'view', $usuario['Plaza']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($usuario['Rol']['nombre'], array('controller' => 'roles', 'action' => 'view', $usuario['Rol']['id'])); ?>
		</td>
		<td>
			<?php echo $usuario['Usuario']['titulo']; ?>
		</td>
		<td>
			<?php echo $usuario['Usuario']['nombre']; ?>
		</td>
		<td>
			<?php echo $usuario['Usuario']['ap_paterno']; ?>
		</td>
		<td>
			<?php echo $usuario['Usuario']['ap_materno']; ?>
		</td>
		<!-- <td>
			<?php echo $usuario['Usuario']['calle']; ?>
		</td>
		<td>
			<?php echo $usuario['Usuario']['no_ext']; ?>
		</td>
		<td>
			<?php echo $usuario['Usuario']['no_int']; ?>
		</td>
		<td>
			<?php echo $usuario['Usuario']['colonia']; ?>
		</td>
		<td>
			<?php echo $usuario['Usuario']['ciudad']; ?>
		</td>
		<td>
			<?php echo $usuario['Usuario']['codigo_postal']; ?>
		</td>
		<td>
			<?php echo $usuario['Usuario']['estado']; ?>
		</td>
		<td>
			<?php echo $usuario['Usuario']['email_personal']; ?>
		</td>
		<td>
			<?php echo $usuario['Usuario']['email_empresa']; ?>
		</td>
		<td>
			<?php echo $usuario['Usuario']['telefono1']; ?>
		</td>
		<td>
			<?php echo $usuario['Usuario']['telefono2']; ?>
		</td>
		<td>
			<?php echo $usuario['Usuario']['celular']; ?>
		</td>
		<td>
			<?php echo $usuario['Usuario']['nextel']; ?>
		</td>
		<td>
			<?php echo $usuario['Usuario']['fecha_nacimiento']; ?>
		</td>
		<td>
			<?php echo $usuario['Usuario']['fotografia']; ?>
		</td>
		<td>
			<?php echo $usuario['Usuario']['notas']; ?>
		</td>
		<td>
			<?php echo $usuario['Usuario']['no_empleado']; ?>
		</td>
		<td>
			<?php echo $usuario['Usuario']['nomina']; ?>
		</td>
		<td>
			<?php echo $usuario['Usuario']['no_seguro_social']; ?>
		</td>
		<td>
			<?php echo $usuario['Usuario']['fecha_ingreso']; ?>
		</td>
		<td>
			<?php echo $usuario['Usuario']['estatus']; ?>
		</td> -->
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $usuario['Usuario']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $usuario['Usuario']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $usuario['Usuario']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $usuario['Usuario']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
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
