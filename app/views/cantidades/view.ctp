<div class="cantidades view">
<h2><?php  __('Cantidad');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cantidad['Cantidad']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cantidad'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cantidad['Cantidad']['cantidad']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tipo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cantidad['Cantidad']['tipo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Solapas'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cantidad['Cantidad']['solapas']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<!-- 
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Cantidad', true), array('action' => 'edit', $cantidad['Cantidad']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Cantidad', true), array('action' => 'delete', $cantidad['Cantidad']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $cantidad['Cantidad']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Cantidades', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Cantidad', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Cotizaciones', true), array('controller' => 'cotizaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Cotizacion', true), array('controller' => 'cotizaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Cotizaciones');?></h3>
	<?php if (!empty($cantidad['Cotizacion'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Cliente Id'); ?></th>
		<th><?php __('Proyecto Id'); ?></th>
		<th><?php __('Cantidad Id'); ?></th>
		<th><?php __('Papeles Cotizacion Id'); ?></th>
		<th><?php __('Fecha'); ?></th>
		<th><?php __('Comentarios Inicial'); ?></th>
		<th><?php __('Comentarios General'); ?></th>
		<th><?php __('Archivo Digital'); ?></th>
		<th><?php __('Archivo'); ?></th>
		<th><?php __('Fotos'); ?></th>
		<th><?php __('Muestra'); ?></th>
		<th><?php __('Otro'); ?></th>
		<th><?php __('Proporciona Otro'); ?></th>
		<th><?php __('Comision'); ?></th>
		<th><?php __('Comentarios Proyecto'); ?></th>
		<th><?php __('Pruebas Color'); ?></th>
		<th><?php __('Correccion Color'); ?></th>
		<th><?php __('Tiempo Diseno'); ?></th>
		<th><?php __('Comentarios Diseno'); ?></th>
		<th><?php __('Tipo Impresion'); ?></th>
		<th><?php __('Medida Extendida'); ?></th>
		<th><?php __('Medida Final'); ?></th>
		<th><?php __('Otro Tipo Papel'); ?></th>
		<th><?php __('Papel Tipo'); ?></th>
		<th><?php __('Papel Caras'); ?></th>
		<th><?php __('Comentarios Impresion'); ?></th>
		<th><?php __('Tintas Frente'); ?></th>
		<th><?php __('Seleccion Frente'); ?></th>
		<th><?php __('Plasta Frente'); ?></th>
		<th><?php __('Rebases Frente'); ?></th>
		<th><?php __('Tintas Vuelta'); ?></th>
		<th><?php __('Seleccion Vuelta'); ?></th>
		<th><?php __('Plasta Vuelta'); ?></th>
		<th><?php __('Rebases Vuelta'); ?></th>
		<th><?php __('Comentarios Tintas'); ?></th>
		<th><?php __('Barniz Torre Frente'); ?></th>
		<th><?php __('Barniz Torre Vuelta'); ?></th>
		<th><?php __('Barniz Uv Frente'); ?></th>
		<th><?php __('Barniz Uv Vuelta'); ?></th>
		<th><?php __('Barniz Uv Frente Tipo'); ?></th>
		<th><?php __('Barniz Uv Vuelta Tipo'); ?></th>
		<th><?php __('Cotizar Barniz Uv'); ?></th>
		<th><?php __('Comentarios Barniz'); ?></th>
		<th><?php __('Plastificado Frente'); ?></th>
		<th><?php __('Plastificado Vuelta'); ?></th>
		<th><?php __('Comentarios Plastificado'); ?></th>
		<th><?php __('Corte Suaje'); ?></th>
		<th><?php __('Semicorte Suaje'); ?></th>
		<th><?php __('Perforado'); ?></th>
		<th><?php __('Marca Suaje'); ?></th>
		<th><?php __('Botado'); ?></th>
		<th><?php __('Hoststamping'); ?></th>
		<th><?php __('Origen Suaje'); ?></th>
		<th><?php __('Origen Cliche'); ?></th>
		<th><?php __('Solapas Proyecto'); ?></th>
		<th><?php __('Comentarios Troquelado'); ?></th>
		<th><?php __('Tipo Pegado Gral'); ?></th>
		<th><?php __('Ancho Cinta Gral'); ?></th>
		<th><?php __('Largo Cinta Gral'); ?></th>
		<th><?php __('Tipo Pegado Folder'); ?></th>
		<th><?php __('Ancho Cinta Folder'); ?></th>
		<th><?php __('Largo Cinta Folder'); ?></th>
		<th><?php __('Tipo Pegado Caja'); ?></th>
		<th><?php __('Ancho Cinta Caja'); ?></th>
		<th><?php __('Largo Cinta Caja'); ?></th>
		<th><?php __('Tipo Pegado Blocks'); ?></th>
		<th><?php __('Cantidad Hojas Block'); ?></th>
		<th><?php __('Comentarios Armado'); ?></th>
		<th><?php __('Encuadernado'); ?></th>
		<th><?php __('Posicion Encuadernado'); ?></th>
		<th><?php __('Color Encuadernado'); ?></th>
		<th><?php __('Otro Color Encuadernado'); ?></th>
		<th><?php __('Comentarios Encuadernado'); ?></th>
		<th><?php __('Folio Inicio'); ?></th>
		<th><?php __('Folio Fin'); ?></th>
		<th><?php __('Color Folio'); ?></th>
		<th><?php __('Otro Color Folio'); ?></th>
		<th><?php __('Folio Palabra No'); ?></th>
		<th><?php __('Comentarios Folio'); ?></th>
		<th><?php __('Orificios'); ?></th>
		<th><?php __('Comentarios Ponchado'); ?></th>
		<th><?php __('Dobleces Eje1'); ?></th>
		<th><?php __('Dobleces Eje2'); ?></th>
		<th><?php __('Comentarios Doblado'); ?></th>
		<th><?php __('Redondeado'); ?></th>
		<th><?php __('Comentarios Redondeado'); ?></th>
		<th><?php __('Papel Kraft'); ?></th>
		<th><?php __('Impresos Paquete'); ?></th>
		<th><?php __('Fajillas'); ?></th>
		<th><?php __('Caja Rotulada'); ?></th>
		<th><?php __('Caja Sin Rotular'); ?></th>
		<th><?php __('Emplayada'); ?></th>
		<th><?php __('Esquineros'); ?></th>
		<th><?php __('Fleje'); ?></th>
		<th><?php __('Comentarios Empaque'); ?></th>
		<th><?php __('Distribucion'); ?></th>
		<th><?php __('Comentarios Distribucion'); ?></th>
		<th><?php __('Sellar Bolsa'); ?></th>
		<th><?php __('Cantidad Sellar'); ?></th>
		<th><?php __('Comentarios Bolsa'); ?></th>
		<th><?php __('Emplayado Calor'); ?></th>
		<th><?php __('Emplayado Pasadas'); ?></th>
		<th><?php __('Comentarios Emplayado'); ?></th>
		<th><?php __('Ojillo'); ?></th>
		<th><?php __('Color Ojillo'); ?></th>
		<th><?php __('Otro Color Ojillo'); ?></th>
		<th><?php __('Tipo Ojillo'); ?></th>
		<th><?php __('Otro Tipo Ojillo'); ?></th>
		<th><?php __('Comentarios Ojillo'); ?></th>
		<th><?php __('Plastiflecha'); ?></th>
		<th><?php __('Longitud Plastiflecha'); ?></th>
		<th><?php __('Comentarios Plastiflecha'); ?></th>
		<th><?php __('Poste Aluminio'); ?></th>
		<th><?php __('Longitud Poste Aluminio'); ?></th>
		<th><?php __('Comentarios Postes'); ?></th>
		<th><?php __('Velcro'); ?></th>
		<th><?php __('Cantidad Velcro'); ?></th>
		<th><?php __('Tira Velcro'); ?></th>
		<th><?php __('Cantidad Tira Velcro'); ?></th>
		<th><?php __('Comentarios Velcro'); ?></th>
		<th><?php __('Herraje'); ?></th>
		<th><?php __('Tipo Heraje'); ?></th>
		<th><?php __('Comentarios Herraje'); ?></th>
		<th><?php __('Foam'); ?></th>
		<th><?php __('Medida Foam'); ?></th>
		<th><?php __('Piezas Foam'); ?></th>
		<th><?php __('Tiras Foam'); ?></th>
		<th><?php __('Centimetros Tira Foam'); ?></th>
		<th><?php __('Esquinas Foam'); ?></th>
		<th><?php __('Comentarios Foam'); ?></th>
		<th><?php __('Corte Recto'); ?></th>
		<th><?php __('Comentarios Corte'); ?></th>
		<th><?php __('Iman'); ?></th>
		<th><?php __('Centimetros Iman'); ?></th>
		<th><?php __('Esquinas Iman'); ?></th>
		<th><?php __('Comentarios Iman'); ?></th>
		<th><?php __('Termorealzado'); ?></th>
		<th><?php __('Lados Termorealzado'); ?></th>
		<th><?php __('Comentarios Termo'); ?></th>
		<th><?php __('Otros Acabados'); ?></th>
		<th><?php __('Otros Acabados Descripcion'); ?></th>
		<th><?php __('Comentarios Acabados'); ?></th>
		<th><?php __('Created Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified Id'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Estatus'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($cantidad['Cotizacion'] as $cotizacion):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $cotizacion['id'];?></td>
			<td><?php echo $cotizacion['cliente_id'];?></td>
			<td><?php echo $cotizacion['proyecto_id'];?></td>
			<td><?php echo $cotizacion['cantidad_id'];?></td>
			<td><?php echo $cotizacion['papeles_cotizacion_id'];?></td>
			<td><?php echo $cotizacion['fecha'];?></td>
			<td><?php echo $cotizacion['comentarios_inicial'];?></td>
			<td><?php echo $cotizacion['comentarios_general'];?></td>
			<td><?php echo $cotizacion['archivo_digital'];?></td>
			<td><?php echo $cotizacion['archivo'];?></td>
			<td><?php echo $cotizacion['fotos'];?></td>
			<td><?php echo $cotizacion['muestra'];?></td>
			<td><?php echo $cotizacion['otro'];?></td>
			<td><?php echo $cotizacion['proporciona_otro'];?></td>
			<td><?php echo $cotizacion['comision'];?></td>
			<td><?php echo $cotizacion['comentarios_proyecto'];?></td>
			<td><?php echo $cotizacion['pruebas_color'];?></td>
			<td><?php echo $cotizacion['correccion_color'];?></td>
			<td><?php echo $cotizacion['tiempo_diseno'];?></td>
			<td><?php echo $cotizacion['comentarios_diseno'];?></td>
			<td><?php echo $cotizacion['tipo_impresion'];?></td>
			<td><?php echo $cotizacion['medida_extendida'];?></td>
			<td><?php echo $cotizacion['medida_final'];?></td>
			<td><?php echo $cotizacion['otro_tipo_papel'];?></td>
			<td><?php echo $cotizacion['papel_tipo'];?></td>
			<td><?php echo $cotizacion['papel_caras'];?></td>
			<td><?php echo $cotizacion['comentarios_impresion'];?></td>
			<td><?php echo $cotizacion['tintas_frente'];?></td>
			<td><?php echo $cotizacion['seleccion_frente'];?></td>
			<td><?php echo $cotizacion['plasta_frente'];?></td>
			<td><?php echo $cotizacion['rebases_frente'];?></td>
			<td><?php echo $cotizacion['tintas_vuelta'];?></td>
			<td><?php echo $cotizacion['seleccion_vuelta'];?></td>
			<td><?php echo $cotizacion['plasta_vuelta'];?></td>
			<td><?php echo $cotizacion['rebases_vuelta'];?></td>
			<td><?php echo $cotizacion['comentarios_tintas'];?></td>
			<td><?php echo $cotizacion['barniz_torre_frente'];?></td>
			<td><?php echo $cotizacion['barniz_torre_vuelta'];?></td>
			<td><?php echo $cotizacion['barniz_uv_frente'];?></td>
			<td><?php echo $cotizacion['barniz_uv_vuelta'];?></td>
			<td><?php echo $cotizacion['barniz_uv_frente_tipo'];?></td>
			<td><?php echo $cotizacion['barniz_uv_vuelta_tipo'];?></td>
			<td><?php echo $cotizacion['cotizar_barniz_uv'];?></td>
			<td><?php echo $cotizacion['comentarios_barniz'];?></td>
			<td><?php echo $cotizacion['plastificado_frente'];?></td>
			<td><?php echo $cotizacion['plastificado_vuelta'];?></td>
			<td><?php echo $cotizacion['comentarios_plastificado'];?></td>
			<td><?php echo $cotizacion['corte_suaje'];?></td>
			<td><?php echo $cotizacion['semicorte_suaje'];?></td>
			<td><?php echo $cotizacion['perforado'];?></td>
			<td><?php echo $cotizacion['marca_suaje'];?></td>
			<td><?php echo $cotizacion['botado'];?></td>
			<td><?php echo $cotizacion['hoststamping'];?></td>
			<td><?php echo $cotizacion['origen_suaje'];?></td>
			<td><?php echo $cotizacion['origen_cliche'];?></td>
			<td><?php echo $cotizacion['solapas_proyecto'];?></td>
			<td><?php echo $cotizacion['comentarios_troquelado'];?></td>
			<td><?php echo $cotizacion['tipo_pegado_gral'];?></td>
			<td><?php echo $cotizacion['ancho_cinta_gral'];?></td>
			<td><?php echo $cotizacion['largo_cinta_gral'];?></td>
			<td><?php echo $cotizacion['tipo_pegado_folder'];?></td>
			<td><?php echo $cotizacion['ancho_cinta_folder'];?></td>
			<td><?php echo $cotizacion['largo_cinta_folder'];?></td>
			<td><?php echo $cotizacion['tipo_pegado_caja'];?></td>
			<td><?php echo $cotizacion['ancho_cinta_caja'];?></td>
			<td><?php echo $cotizacion['largo_cinta_caja'];?></td>
			<td><?php echo $cotizacion['tipo_pegado_blocks'];?></td>
			<td><?php echo $cotizacion['cantidad_hojas_block'];?></td>
			<td><?php echo $cotizacion['comentarios_armado'];?></td>
			<td><?php echo $cotizacion['encuadernado'];?></td>
			<td><?php echo $cotizacion['posicion_encuadernado'];?></td>
			<td><?php echo $cotizacion['color_encuadernado'];?></td>
			<td><?php echo $cotizacion['otro_color_encuadernado'];?></td>
			<td><?php echo $cotizacion['comentarios_encuadernado'];?></td>
			<td><?php echo $cotizacion['folio_inicio'];?></td>
			<td><?php echo $cotizacion['folio_fin'];?></td>
			<td><?php echo $cotizacion['color_folio'];?></td>
			<td><?php echo $cotizacion['otro_color_folio'];?></td>
			<td><?php echo $cotizacion['folio_palabra_no'];?></td>
			<td><?php echo $cotizacion['comentarios_folio'];?></td>
			<td><?php echo $cotizacion['orificios'];?></td>
			<td><?php echo $cotizacion['comentarios_ponchado'];?></td>
			<td><?php echo $cotizacion['dobleces_eje1'];?></td>
			<td><?php echo $cotizacion['dobleces_eje2'];?></td>
			<td><?php echo $cotizacion['comentarios_doblado'];?></td>
			<td><?php echo $cotizacion['redondeado'];?></td>
			<td><?php echo $cotizacion['comentarios_redondeado'];?></td>
			<td><?php echo $cotizacion['papel_kraft'];?></td>
			<td><?php echo $cotizacion['impresos_paquete'];?></td>
			<td><?php echo $cotizacion['fajillas'];?></td>
			<td><?php echo $cotizacion['caja_rotulada'];?></td>
			<td><?php echo $cotizacion['caja_sin_rotular'];?></td>
			<td><?php echo $cotizacion['emplayada'];?></td>
			<td><?php echo $cotizacion['esquineros'];?></td>
			<td><?php echo $cotizacion['fleje'];?></td>
			<td><?php echo $cotizacion['comentarios_empaque'];?></td>
			<td><?php echo $cotizacion['distribucion'];?></td>
			<td><?php echo $cotizacion['comentarios_distribucion'];?></td>
			<td><?php echo $cotizacion['sellar_bolsa'];?></td>
			<td><?php echo $cotizacion['cantidad_sellar'];?></td>
			<td><?php echo $cotizacion['comentarios_bolsa'];?></td>
			<td><?php echo $cotizacion['emplayado_calor'];?></td>
			<td><?php echo $cotizacion['emplayado_pasadas'];?></td>
			<td><?php echo $cotizacion['comentarios_emplayado'];?></td>
			<td><?php echo $cotizacion['ojillo'];?></td>
			<td><?php echo $cotizacion['color_ojillo'];?></td>
			<td><?php echo $cotizacion['otro_color_ojillo'];?></td>
			<td><?php echo $cotizacion['tipo_ojillo'];?></td>
			<td><?php echo $cotizacion['otro_tipo_ojillo'];?></td>
			<td><?php echo $cotizacion['comentarios_ojillo'];?></td>
			<td><?php echo $cotizacion['plastiflecha'];?></td>
			<td><?php echo $cotizacion['longitud_plastiflecha'];?></td>
			<td><?php echo $cotizacion['comentarios_plastiflecha'];?></td>
			<td><?php echo $cotizacion['poste_aluminio'];?></td>
			<td><?php echo $cotizacion['longitud_poste_aluminio'];?></td>
			<td><?php echo $cotizacion['comentarios_postes'];?></td>
			<td><?php echo $cotizacion['velcro'];?></td>
			<td><?php echo $cotizacion['cantidad_velcro'];?></td>
			<td><?php echo $cotizacion['tira_velcro'];?></td>
			<td><?php echo $cotizacion['cantidad_tira_velcro'];?></td>
			<td><?php echo $cotizacion['comentarios_velcro'];?></td>
			<td><?php echo $cotizacion['herraje'];?></td>
			<td><?php echo $cotizacion['tipo_heraje'];?></td>
			<td><?php echo $cotizacion['comentarios_herraje'];?></td>
			<td><?php echo $cotizacion['foam'];?></td>
			<td><?php echo $cotizacion['medida_foam'];?></td>
			<td><?php echo $cotizacion['piezas_foam'];?></td>
			<td><?php echo $cotizacion['tiras_foam'];?></td>
			<td><?php echo $cotizacion['centimetros_tira_foam'];?></td>
			<td><?php echo $cotizacion['esquinas_foam'];?></td>
			<td><?php echo $cotizacion['comentarios_foam'];?></td>
			<td><?php echo $cotizacion['corte_recto'];?></td>
			<td><?php echo $cotizacion['comentarios_corte'];?></td>
			<td><?php echo $cotizacion['iman'];?></td>
			<td><?php echo $cotizacion['centimetros_iman'];?></td>
			<td><?php echo $cotizacion['esquinas_iman'];?></td>
			<td><?php echo $cotizacion['comentarios_iman'];?></td>
			<td><?php echo $cotizacion['termorealzado'];?></td>
			<td><?php echo $cotizacion['lados_termorealzado'];?></td>
			<td><?php echo $cotizacion['comentarios_termo'];?></td>
			<td><?php echo $cotizacion['otros_acabados'];?></td>
			<td><?php echo $cotizacion['otros_acabados_descripcion'];?></td>
			<td><?php echo $cotizacion['comentarios_acabados'];?></td>
			<td><?php echo $cotizacion['created_id'];?></td>
			<td><?php echo $cotizacion['created'];?></td>
			<td><?php echo $cotizacion['modified_id'];?></td>
			<td><?php echo $cotizacion['modified'];?></td>
			<td><?php echo $cotizacion['estatus'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'cotizaciones', 'action' => 'view', $cotizacion['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'cotizaciones', 'action' => 'edit', $cotizacion['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'cotizaciones', 'action' => 'delete', $cotizacion['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $cotizacion['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Cotizacion', true), array('controller' => 'cotizaciones', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
 -->