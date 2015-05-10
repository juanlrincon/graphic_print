<div class="proyectos view">
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $proyecto['Proyecto']['nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php
			echo $proyecto['Creador']['nombre'].' '.$proyecto['Creador']['ap_paterno'].' '.$proyecto['Creador']['ap_materno'];
			?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $time->format2($proyecto['Proyecto']['created']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php
			echo $proyecto['Modificador']['nombre'].' '.$proyecto['Modificador']['ap_paterno'].' '.$proyecto['Modificador']['ap_materno'];
			?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $time->format2($proyecto['Proyecto']['modified']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Estatus'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->estatus($proyecto['Proyecto']['estatus']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<!-- 
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Proyecto', true), array('action' => 'edit', $proyecto['Proyecto']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Proyecto', true), array('action' => 'delete', $proyecto['Proyecto']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $proyecto['Proyecto']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Proyectos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Proyecto', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
 -->