<div class="cotizaciones form">
<?php echo $form->create('Cotizacion');?>
	<fieldset>
	<?php
		echo $form->input('id');
		echo $form->input('cliente_id');
		echo $form->input('proyecto_id');
		echo $form->input('cantidad_id');
		echo $form->input('papeles_cotizacion_id');
	$count = 1;
	if ($page == $count)
	{
		echo $form->input('fecha');
		echo $form->input('comentarios_inicial');
	}
		echo $form->input('comentarios_general');
		echo $form->input('archivo_digital');
		echo $form->input('archivo');
		echo $form->input('fotos');
		echo $form->input('muestra');
		echo $form->input('otro');
		echo $form->input('proporciona_otro');
		echo $form->input('comision');
		echo $form->input('comentarios_proyecto');
		echo $form->input('pruebas_color');
		echo $form->input('correccion_color');
		echo $form->input('tiempo_diseno');
		echo $form->input('comentarios_diseno');
		echo $form->input('tipo_impresion');
		echo $form->input('medida_extendida');
		echo $form->input('medida_final');
		echo $form->input('otro_tipo_papel');
		echo $form->input('papel_tipo');
		echo $form->input('papel_caras');
		echo $form->input('comentarios_impresion');
		echo $form->input('tintas_frente');
		echo $form->input('seleccion_frente');
		echo $form->input('plasta_frente');
		echo $form->input('rebases_frente');
		echo $form->input('tintas_vuelta');
		echo $form->input('seleccion_vuelta');
		echo $form->input('plasta_vuelta');
		echo $form->input('rebases_vuelta');
		echo $form->input('comentarios_tintas');
		echo $form->input('barniz_torre_frente');
		echo $form->input('barniz_torre_vuelta');
		echo $form->input('barniz_uv_frente');
		echo $form->input('barniz_uv_vuelta');
		echo $form->input('barniz_uv_frente_tipo');
		echo $form->input('barniz_uv_vuelta_tipo');
		echo $form->input('cotizar_barniz_uv');
		echo $form->input('comentarios_barniz');
		echo $form->input('plastificado_frente');
		echo $form->input('plastificado_vuelta');
		echo $form->input('comentarios_plastificado');
		echo $form->input('corte_suaje');
		echo $form->input('semicorte_suaje');
		echo $form->input('perforado');
		echo $form->input('marca_suaje');
		echo $form->input('botado');
		echo $form->input('hoststamping');
		echo $form->input('origen_suaje');
		echo $form->input('origen_cliche');
		echo $form->input('solapas_proyecto');
		echo $form->input('comentarios_troquelado');
		echo $form->input('tipo_pegado_gral');
		echo $form->input('ancho_cinta_gral');
		echo $form->input('largo_cinta_gral');
		echo $form->input('tipo_pegado_folder');
		echo $form->input('ancho_cinta_folder');
		echo $form->input('largo_cinta_folder');
		echo $form->input('tipo_pegado_caja');
		echo $form->input('ancho_cinta_caja');
		echo $form->input('largo_cinta_caja');
		echo $form->input('tipo_pegado_blocks');
		echo $form->input('cantidad_hojas_block');
		echo $form->input('comentarios_armado');
		echo $form->input('encuadernado');
		echo $form->input('posicion_encuadernado');
		echo $form->input('color_encuadernado');
		echo $form->input('otro_color_encuadernado');
		echo $form->input('comentarios_encuadernado');
		echo $form->input('folio_inicio');
		echo $form->input('folio_fin');
		echo $form->input('color_folio');
		echo $form->input('otro_color_folio');
		echo $form->input('folio_palabra_no');
		echo $form->input('comentarios_folio');
		echo $form->input('orificios');
		echo $form->input('comentarios_ponchado');
		echo $form->input('dobleces_eje1');
		echo $form->input('dobleces_eje2');
		echo $form->input('comentarios_doblado');
		echo $form->input('redondeado');
		echo $form->input('comentarios_redondeado');
		echo $form->input('papel_kraft');
		echo $form->input('impresos_paquete');
		echo $form->input('fajillas');
		echo $form->input('caja_rotulada');
		echo $form->input('caja_sin_rotular');
		echo $form->input('emplayada');
		echo $form->input('esquineros');
		echo $form->input('fleje');
		echo $form->input('comentarios_empaque');
		echo $form->input('distribucion');
		echo $form->input('comentarios_distribucion');
		echo $form->input('sellar_bolsa');
		echo $form->input('cantidad_sellar');
		echo $form->input('comentarios_bolsa');
		echo $form->input('emplayado_calor');
		echo $form->input('emplayado_pasadas');
		echo $form->input('comentarios_emplayado');
		echo $form->input('ojillo');
		echo $form->input('color_ojillo');
		echo $form->input('otro_color_ojillo');
		echo $form->input('tipo_ojillo');
		echo $form->input('otro_tipo_ojillo');
		echo $form->input('comentarios_ojillo');
		echo $form->input('plastiflecha');
		echo $form->input('longitud_plastiflecha');
		echo $form->input('comentarios_plastiflecha');
		echo $form->input('poste_aluminio');
		echo $form->input('longitud_poste_aluminio');
		echo $form->input('comentarios_postes');
		echo $form->input('velcro');
		echo $form->input('cantidad_velcro');
		echo $form->input('tira_velcro');
		echo $form->input('cantidad_tira_velcro');
		echo $form->input('comentarios_velcro');
		echo $form->input('herraje');
		echo $form->input('tipo_heraje');
		echo $form->input('comentarios_herraje');
		echo $form->input('foam');
		echo $form->input('medida_foam');
		echo $form->input('piezas_foam');
		echo $form->input('tiras_foam');
		echo $form->input('centimetros_tira_foam');
		echo $form->input('esquinas_foam');
		echo $form->input('comentarios_foam');
		echo $form->input('corte_recto');
		echo $form->input('comentarios_corte');
		echo $form->input('iman');
		echo $form->input('centimetros_iman');
		echo $form->input('esquinas_iman');
		echo $form->input('comentarios_iman');
		echo $form->input('termorealzado');
		echo $form->input('lados_termorealzado');
		echo $form->input('comentarios_termo');
		echo $form->input('otros_acabados');
		echo $form->input('otros_acabados_descripcion');
		echo $form->input('comentarios_acabados');
	?>
	</fieldset>
<?php

	echo $html->submit2();

	$prev = $page - 1;
	$next = $page + 1;

	echo '<div style="float:left;width:665px;">&nbsp;</div>';
	echo '<div style="float:left;">';

	if($page > 1)
	{
		echo $html->image('prev.jpg', array('url' => array('action' => 'add', $prev)));
	}
	else
	{
		echo $html->image('prev_off.jpg');
	}

	echo '&nbsp;&nbsp;&nbsp;&nbsp;';

	if($page < 28)
	{
		echo $html->image('next.jpg', array('url' => array('action' => 'add', $next)));
	}
	else
	{
		echo $html->image('next_off.jpg');
	}
	echo '</div>';

?>
</div>
<!-- 
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Cotizacion.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Cotizacion.id'))); ?></li>
		<li><?php echo $html->link(__('List Cotizaciones', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Clientes', true), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Cliente', true), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Proyectos', true), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Proyecto', true), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Cantidades', true), array('controller' => 'cantidades', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Cantidad', true), array('controller' => 'cantidades', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Papeles Cotizaciones', true), array('controller' => 'papeles_cotizaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Papeles Cotizacion', true), array('controller' => 'papeles_cotizaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
 -->