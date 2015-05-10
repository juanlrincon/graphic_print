<div class="estados view">
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Estado'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $estado['Estado']['estado']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pais'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $estado['Pais']['pais']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Creado por'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php
			echo $estado['Creador']['nombre'].' '.$estado['Creador']['ap_paterno'].' '.$estado['Creador']['ap_materno'];
			?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php
			if ($estado['Estado']['created'] > 0)
				echo $time->format2($estado['Estado']['created']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modificado por'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php
				echo $estado['Modificador']['nombre'].' '.$estado['Modificador']['ap_paterno'].' '.$estado['Modificador']['ap_materno'];
			?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $time->format2($estado['Estado']['modified']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Estatus'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->estatus($estado['Estado']['estatus']); ?>
			&nbsp;
		</dd>
	</dl>
</div>



<!-- 
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Estado', true), array('action' => 'edit', $estado['Estado']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Estado', true), array('action' => 'delete', $estado['Estado']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $estado['Estado']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Estados', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Estado', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Paises', true), array('controller' => 'paises', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Pais', true), array('controller' => 'paises', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Ciudades', true), array('controller' => 'ciudades', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Ciudad', true), array('controller' => 'ciudades', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Ciudades');?></h3>
	<?php if (!empty($estado['Ciudad'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Ciudad'); ?></th>
		<th><?php __('Estado Id'); ?></th>
		<th><?php __('Created Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified Id'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Estatus'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($estado['Ciudad'] as $ciudad):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $ciudad['id'];?></td>
			<td><?php echo $ciudad['ciudad'];?></td>
			<td><?php echo $ciudad['estado_id'];?></td>
			<td><?php echo $ciudad['created_id'];?></td>
			<td><?php echo $ciudad['created'];?></td>
			<td><?php echo $ciudad['modified_id'];?></td>
			<td><?php echo $ciudad['modified'];?></td>
			<td><?php echo $ciudad['estatus'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'ciudades', 'action' => 'view', $ciudad['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'ciudades', 'action' => 'edit', $ciudad['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'ciudades', 'action' => 'delete', $ciudad['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ciudad['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Ciudad', true), array('controller' => 'ciudades', 'action' => 'add'));?> </li>
		</ul>
	</div>
 -->	
</div>
