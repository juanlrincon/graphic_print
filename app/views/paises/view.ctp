<div class="paises view">
<h2><?php  __('Pais');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pais['Pais']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pais'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pais['Pais']['pais']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pais['Pais']['created_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pais['Pais']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pais['Pais']['modified_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pais['Pais']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Estatus'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pais['Pais']['estatus']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Pais', true), array('action' => 'edit', $pais['Pais']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Pais', true), array('action' => 'delete', $pais['Pais']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $pais['Pais']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Paises', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Pais', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Estados', true), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Estado', true), array('controller' => 'estados', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Estados');?></h3>
	<?php if (!empty($pais['Estado'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Estado'); ?></th>
		<th><?php __('Pais Id'); ?></th>
		<th><?php __('Created Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified Id'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Estatus'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($pais['Estado'] as $estado):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $estado['id'];?></td>
			<td><?php echo $estado['estado'];?></td>
			<td><?php echo $estado['pais_id'];?></td>
			<td><?php echo $estado['created_id'];?></td>
			<td><?php echo $estado['created'];?></td>
			<td><?php echo $estado['modified_id'];?></td>
			<td><?php echo $estado['modified'];?></td>
			<td><?php echo $estado['estatus'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'estados', 'action' => 'view', $estado['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'estados', 'action' => 'edit', $estado['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'estados', 'action' => 'delete', $estado['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $estado['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Estado', true), array('controller' => 'estados', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
