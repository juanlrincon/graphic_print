<div class="plazas view">
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $plaza['Plaza']['nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Estatus'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->estatus($plaza['Plaza']['estatus']); ?>
			&nbsp;
		</dd>
	</dl>
</div>


<!-- 
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Plaza', true), array('action' => 'edit', $plaza['Plaza']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Plaza', true), array('action' => 'delete', $plaza['Plaza']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $plaza['Plaza']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Plazas', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Plaza', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Clientes', true), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Cliente', true), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Usuarios', true), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Usuario', true), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Clientes');?></h3>
	<?php if (!empty($plaza['Cliente'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Contacto Id'); ?></th>
		<th><?php __('Pais Id'); ?></th>
		<th><?php __('Sucursal Id'); ?></th>
		<th><?php __('Plaza Id'); ?></th>
		<th><?php __('Usuario Modificacion Id'); ?></th>
		<th><?php __('Vendedor Id'); ?></th>
		<th><?php __('Recepcion Material Id'); ?></th>
		<th><?php __('Recepcion Factura Id'); ?></th>
		<th><?php __('Entrega Cheque Id'); ?></th>
		<th><?php __('Usuario Creacion Id'); ?></th>
		<th><?php __('Agente Id'); ?></th>
		<th><?php __('Nombre Comercial'); ?></th>
		<th><?php __('Colonia'); ?></th>
		<th><?php __('Rfc'); ?></th>
		<th><?php __('No Ext'); ?></th>
		<th><?php __('Calle'); ?></th>
		<th><?php __('Codigo Postal'); ?></th>
		<th><?php __('Razon Social'); ?></th>
		<th><?php __('No Int'); ?></th>
		<th><?php __('Ciudad'); ?></th>
		<th><?php __('Estado'); ?></th>
		<th><?php __('Comentarios'); ?></th>
		<th><?php __('Fecha Registro'); ?></th>
		<th><?php __('Status'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($plaza['Cliente'] as $cliente):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $cliente['id'];?></td>
			<td><?php echo $cliente['contacto_id'];?></td>
			<td><?php echo $cliente['pais_id'];?></td>
			<td><?php echo $cliente['sucursal_id'];?></td>
			<td><?php echo $cliente['plaza_id'];?></td>
			<td><?php echo $cliente['usuario_modificacion_id'];?></td>
			<td><?php echo $cliente['vendedor_id'];?></td>
			<td><?php echo $cliente['recepcion_material_id'];?></td>
			<td><?php echo $cliente['recepcion_factura_id'];?></td>
			<td><?php echo $cliente['entrega_cheque_id'];?></td>
			<td><?php echo $cliente['usuario_creacion_id'];?></td>
			<td><?php echo $cliente['agente_id'];?></td>
			<td><?php echo $cliente['nombre_comercial'];?></td>
			<td><?php echo $cliente['colonia'];?></td>
			<td><?php echo $cliente['rfc'];?></td>
			<td><?php echo $cliente['no_ext'];?></td>
			<td><?php echo $cliente['calle'];?></td>
			<td><?php echo $cliente['codigo_postal'];?></td>
			<td><?php echo $cliente['razon_social'];?></td>
			<td><?php echo $cliente['no_int'];?></td>
			<td><?php echo $cliente['ciudad'];?></td>
			<td><?php echo $cliente['estado'];?></td>
			<td><?php echo $cliente['comentarios'];?></td>
			<td><?php echo $cliente['fecha_registro'];?></td>
			<td><?php echo $cliente['status'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'clientes', 'action' => 'view', $cliente['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'clientes', 'action' => 'edit', $cliente['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'clientes', 'action' => 'delete', $cliente['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $cliente['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Cliente', true), array('controller' => 'clientes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Usuarios');?></h3>
	<?php if (!empty($plaza['Usuario'])):?>
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
		foreach ($plaza['Usuario'] as $usuario):
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