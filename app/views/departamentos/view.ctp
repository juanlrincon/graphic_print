<div class="departamentos view">
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $departamento['Departamento']['nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Estatus'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->estatus($departamento['Departamento']['estatus']); ?>
			&nbsp;
		</dd>
	</dl>
</div>


<!--
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Departamento', true), array('action' => 'edit', $departamento['Departamento']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Departamento', true), array('action' => 'delete', $departamento['Departamento']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $departamento['Departamento']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Departamentos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Departamento', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Usuarios', true), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Usuario', true), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Usuarios');?></h3>
	<?php if (!empty($departamento['Usuario'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Username'); ?></th>
		<th><?php __('Password'); ?></th>
		<th><?php __('Puesto Id'); ?></th>
		<th><?php __('Departamento Id'); ?></th>
		<th><?php __('Plaza Id'); ?></th>
		<th><?php __('Rol Id'); ?></th>
		<th><?php __('Titulo'); ?></th>
		<th><?php __('Nombre'); ?></th>
		<th><?php __('Ap Paterno'); ?></th>
		<th><?php __('Ap Materno'); ?></th>
		<th><?php __('Calle'); ?></th>
		<th><?php __('No Ext'); ?></th>
		<th><?php __('No Int'); ?></th>
		<th><?php __('Colonia'); ?></th>
		<th><?php __('Ciudad'); ?></th>
		<th><?php __('Codigo Postal'); ?></th>
		<th><?php __('Estado'); ?></th>
		<th><?php __('Email Personal'); ?></th>
		<th><?php __('Email Empresa'); ?></th>
		<th><?php __('Telefono1'); ?></th>
		<th><?php __('Telefono2'); ?></th>
		<th><?php __('Celular'); ?></th>
		<th><?php __('Nextel'); ?></th>
		<th><?php __('Fecha Nacimiento'); ?></th>
		<th><?php __('Fotografia'); ?></th>
		<th><?php __('Notas'); ?></th>
		<th><?php __('No Empleado'); ?></th>
		<th><?php __('Nomina'); ?></th>
		<th><?php __('No Seguro Social'); ?></th>
		<th><?php __('Fecha Ingreso'); ?></th>
		<th><?php __('Estatus'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($departamento['Usuario'] as $usuario):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $usuario['id'];?></td>
			<td><?php echo $usuario['username'];?></td>
			<td><?php echo $usuario['password'];?></td>
			<td><?php echo $usuario['puesto_id'];?></td>
			<td><?php echo $usuario['departamento_id'];?></td>
			<td><?php echo $usuario['plaza_id'];?></td>
			<td><?php echo $usuario['rol_id'];?></td>
			<td><?php echo $usuario['titulo'];?></td>
			<td><?php echo $usuario['nombre'];?></td>
			<td><?php echo $usuario['ap_paterno'];?></td>
			<td><?php echo $usuario['ap_materno'];?></td>
			<td><?php echo $usuario['calle'];?></td>
			<td><?php echo $usuario['no_ext'];?></td>
			<td><?php echo $usuario['no_int'];?></td>
			<td><?php echo $usuario['colonia'];?></td>
			<td><?php echo $usuario['ciudad'];?></td>
			<td><?php echo $usuario['codigo_postal'];?></td>
			<td><?php echo $usuario['estado'];?></td>
			<td><?php echo $usuario['email_personal'];?></td>
			<td><?php echo $usuario['email_empresa'];?></td>
			<td><?php echo $usuario['telefono1'];?></td>
			<td><?php echo $usuario['telefono2'];?></td>
			<td><?php echo $usuario['celular'];?></td>
			<td><?php echo $usuario['nextel'];?></td>
			<td><?php echo $usuario['fecha_nacimiento'];?></td>
			<td><?php echo $usuario['fotografia'];?></td>
			<td><?php echo $usuario['notas'];?></td>
			<td><?php echo $usuario['no_empleado'];?></td>
			<td><?php echo $usuario['nomina'];?></td>
			<td><?php echo $usuario['no_seguro_social'];?></td>
			<td><?php echo $usuario['fecha_ingreso'];?></td>
			<td><?php echo $usuario['estatus'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'usuarios', 'action' => 'view', $usuario['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'usuarios', 'action' => 'edit', $usuario['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'usuarios', 'action' => 'delete', $usuario['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $usuario['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Usuario', true), array('controller' => 'usuarios', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
 -->