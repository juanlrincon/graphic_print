<div class="ciudads index">
<?php echo '<div class="linea">'.$html->image('linea.jpg', array('border' => '0')).'</div>'; ?>
<table cellpadding="0" cellspacing="0">
<tr>
    <th><?php echo $paginator->sort('País','Estado.Pais.pais');?></th>
    <th><?php echo $paginator->sort('Estado / Provincia','Estado.pais');?></th>
	<th><?php echo $paginator->sort('Ciudad','nombre');?></th>
	<th><?php echo $paginator->sort('Creación', 'created');?></th>
	<th><?php echo $paginator->sort('Modificación', 'modified');?></th>
	<th><?php echo $paginator->sort('Estado', 'estatus');?></th>
    <th class="actions">Acciones</th>
</tr>
</table>
<?php echo '<div class="linea2">'.$html->image('linea.jpg', array('border' => '0')).'</div>'; ?>
<table border="0" cellpadding="0" cellspacing="0">
<?php
$i = 0;
foreach ($ciudades as $ciudad):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
        <td>
			<?php echo $ciudad['Estado']['Pais']['pais']; ?>
		</td>
		<td>
			<?php echo $ciudad['Estado']['estado']; ?>
		</td>
		<td>
			<?php echo $ciudad['Ciudad']['ciudad']; ?>
		</td>
		<td>
			<?php echo $time->format2($ciudad['Ciudad']['created']); ?>
		</td>
		<td>
			<?php echo $time->format2($ciudad['Ciudad']['modified']); ?>
		</td>
		<td>
            <?php
				if ($ciudad['Ciudad']['estatus'] == 1)
				{
					echo 'Activa';
				}
				else
				{
					echo 'Inactiva';	
				}
            ?>
        </td>
		<td class="actions">
		    <?php
			echo $html->link('Ver', array('action' => 'view', $ciudad['Ciudad']['id']));

			echo '&nbsp;&nbsp;&nbsp;';

			echo $html->link('Editar', array('action' => 'edit', $ciudad['Ciudad']['id']));
			
		    echo '&nbsp;&nbsp;&nbsp;';
		    if ($ciudad['Ciudad']['estatus'] == '1')
		    {
			    echo $html->link('Desactivar', array('action' => 'deactivate', $ciudad['Ciudad']['id']), null, sprintf('¿Está seguro de que quiere desactivar la ciudad %s?', $ciudad['Ciudad']['ciudad']));
			} else {
			    echo $html->link('Activar', array('action' => 'activate', $ciudad['Ciudad']['id']), null, sprintf('¿Está seguro de que quiere activar la ciudad %s?', $ciudad['Ciudad']['nombre']));
			}
			?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>