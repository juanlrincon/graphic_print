<?php // echo $javascript->link(array('jquery_min', 'jquery-ui.min', 'jquery.corner'), false); ?>
<?php // echo $javascript->link(array('prototype','scriptaculous'), false); ?>

 <script>
 /*jQuery(document).ready(function(){
	  jQuery('#accordion').accordion({ collapsible: true, autoHeight: false,  active: false});
	  //jQuery('#popup').corner("8px");
 });
*/
	
var cantidad_number = 2;
function addInput() {
	var div = document.createElement("div");
	var input = document.createElement("input");
	input.setAttribute("type", "input");
	input.setAttribute("name", "data[Cotizacion]["+cantidad_number+"]");
	div.setAttribute('id',"input"+cantidad_number);
	div.appendChild(input);
	document.getElementById("inputs").appendChild(div);
     cantidad_number++;
 }

function removeInput() {
	cantidad_number--;
		var el = document.getElementById("input"+cantidad_number);
		//var olddiv = document.getElementById("input"+cantidad_number);
		//d.removeChild(olddiv);

//d = document.getElementById("input"+cantidad_number);
//alert("input"+cantidad_number);
	//	document.removeChild(olddiv);

		//document.getElementById(“elemento-a-eliminar”);
		// Obtenemos el padre de dicho elemento
		// con la propiedad “parentNode”
		var padre = el.parentNode;
		// Eliminamos el hijo (el) del elemento padre
		padre.removeChild(el);

//document.removeelemenE(d);
		

	}


</script>

<!-- <div class="cotizaciones form">  -->

<?php echo $form->create('Cotizacion');?>

	<?php
	//print_r($tipo_impresiones);
	
	
	echo '<fieldset>';

echo "<script type=\"text/javascript\">
//<![CDATA[
function Actualizar(str) {
	new Ajax.Updater('livesearch','/fuerza_grafica/cotizaciones/livesearch/'+str, {
	asynchronous:true,
	evalScripts:true,
	parameters:Form.Element.serialize('CotizacionSearchtext'), requestHeaders:['X-Update', 'livesearch'],
	onLoading: function(){
		Element.hide('livesearch');Element.show('loading')},
	onLoaded: function(){
		Element.hide('loading');Element.show('livesearch')
	}
	}
	);
}
//]]>
</script>";

echo '
<input type="text" size="30" onkeyup="Actualizar(this.value);" id="CotizacionSearchtext" name="CotizacionSearchtext">
<div id="livesearch" name="livesearch" style="margin:0px;padding:0px;"></div>
<div id="loading" style="display: none;">'.$html->image("ajax-loader.gif").'</div>
<div id="cliente" name="cliente"></div>
';

/*
echo $ajax->observeField('CotizacionSearchtext', array(
   'frequency' => 1,
			'url' => array('action' => 'livesearch', 'document.getElementById(\'CotizacionSearchtext\').value'),
    		'loading' => "Element.hide('livesearch');Element.show('loading')",
			'update' => 'livesearch',
			'complete' => "Element.hide('loading');Element.show('livesearch');")
	);
*/
?>

<div id="view" class="auto_complete">
    <!-- Results will load here -->
</div>





 <?php 
 

/*	echo '<input name="data[Cantidad][1]">';
		echo '<input name="data[Cantidad][2]">';
			echo '<input name="data[Cantidad][3]">';
*/
 
	echo $form->input('cliente_id'); // quitar el find que usa este
	echo $html->link(__('Agregar Cliente', true), array('controller' => 'clientes', 'action' => 'add'));

	
	
	echo $form->input('proyecto_id');
	echo $html->link(__('Agregar Proyecto', true), array('controller' => 'proyectos', 'action' => 'add'));
	//echo $form->input('cantidad_id');

 /*	echo 'Cantidad';
	echo '<div class="selectBox2"><div class="selectBox"><div class="box" id="box_cantidad_id">&nbsp;</div>'.$form->input('cantidad_id', array('id' => 'cantidad_id', 'label' => '', 'onchange' => 'setbox(this);')).'</div></div></div>';
	echo '<script>setbox0("cantidad_id")</script>';

	echo '<div id="inputs"></div>';
	echo '<a href="javascript:{addInput();}">Agregar Cantidad</a>';
	echo '<br>';
	echo '<a href="javascript:{removeInput();}">Quitar Cantidad</a>';
	echo $form->input('papeles_cotizacion_id');
*/
	// borrar esto solo para maquetar

//echo $form->input('cantidad_id');
				
	echo '<div style="width:100%;height:100%;">';

//echo $page;

	//if (!isset($_POST['add']))
	if ($page != '')
	{
		////$add = $_POST['add'];
$count = 1;
		if ($page == $count)
		{
			echo '<a href="#"><h4>INFORMACI&Oacute;N GENERAL</h4><br></a>';
			echo '<div>';
	
			echo $form->input('fecha');
			echo $form->input('comentarios_inicial');

			echo '</div>';
		}
$count++;
		if ($page == $count)
		{
			echo '<a href="#">INFORMACI&Oacute;N DEL PROYECTO Y ARCHIVOS<br></a>';
			echo '<div>';
// 

			
			echo $form->input('comentarios_general');
			echo $form->input('archivo_digital', array('class' => 'styled', 'div' => array('class' => 'overflow'), 'label' => array('class' => 'label2')));
			echo $form->input('archivo');
			echo $form->input('fotos', array('class' => 'styled', 'div' => array('class' => 'overflow'), 'label' => array('class' => 'label2')));
			echo $form->input('muestra', array('class' => 'styled', 'div' => array('class' => 'overflow'), 'label' => array('class' => 'label2')));
			echo $form->input('otro', array('class' => 'styled', 'div' => array('class' => 'overflow'), 'label' => array('class' => 'label2')));
			echo $form->input('proporciona_otro');
			echo $form->input('comision');
			echo $form->input('comentarios_proyecto');
	
			echo '</div>';
		}
$count++;
		if ($page == $count)
		{
			echo '<a href="#">DISE&Ntilde;O Y PREPRENSA<br></a>';
			echo '<div>';
	
			echo $form->input('pruebas_color');
			echo $form->input('correccion_color');
			echo $form->input('tiempo_diseno');
			echo $form->input('comentarios_diseno');
	
			echo '</div>';
		}
$count++;
		if ($page == $count)
		{
			echo '<a href="#">IMPRESI&Oacute;N, MEDIDAS Y PAPEL<br></a>';
			echo '<div>';
	
			echo $form->input('tipo_impresion');
			echo $form->input('medida_extendida');
			echo $form->input('medida_final');
			echo $form->input('otro_tipo_papel');
			echo $form->input('papel_tipo');
			echo $form->input('papel_caras');
			echo $form->input('comentarios_impresion');
	
			echo '</div>';
		}
$count++;
		if ($page == $count)
		{
			echo '<a href="#">TINTAS<br></a>';
			echo '<div>';
	
			echo $form->input('tintas_frente');
			echo $form->input('seleccion_frente', array('class' => 'styled', 'div' => array('class' => 'overflow'), 'label' => array('class' => 'label2')));
			echo $form->input('plasta_frente', array('class' => 'styled', 'div' => array('class' => 'overflow'), 'label' => array('class' => 'label2')));
			echo $form->input('rebases_frente');
			echo $form->input('tintas_vuelta');
			echo $form->input('seleccion_vuelta', array('class' => 'styled', 'div' => array('class' => 'overflow'), 'label' => array('class' => 'label2')));
			echo $form->input('plasta_vuelta', array('class' => 'styled', 'div' => array('class' => 'overflow'), 'label' => array('class' => 'label2')));
			echo $form->input('rebases_vuelta');
			echo $form->input('comentarios_tintas');
	
			echo '</div>';
		}
$count++;
		if ($page == $count)
		{
			echo '<a href="#">BARNIZ<br></a>';
			echo '<div>';
	
			echo $form->input('barniz_torre_frente');
			echo $form->input('barniz_torre_vuelta');
			echo $form->input('barniz_uv_frente');
			echo $form->input('barniz_uv_vuelta');
			echo $form->input('barniz_uv_frente_tipo');
			echo $form->input('barniz_uv_vuelta_tipo');
			echo $form->input('cotizar_barniz_uv');
			echo $form->input('comentarios_barniz');
	
			echo '</div>';
		}
$count++;
		if ($page == $count)
		{
			echo '<a href="#">PLASTIFICADO<br></a>';
			echo '<div>';
	
			echo $form->input('plastificado_frente');
			echo $form->input('plastificado_vuelta');
			echo $form->input('comentarios_plastificado');
	
			echo '</div>';
		}
$count++;
		if ($page == $count)
		{
			echo '<a href="#">TROQUELADO<br></a>';
			echo '<div>';
	
			echo $form->input('corte_suaje', array('class' => 'styled', 'div' => array('class' => 'overflow'), 'label' => array('class' => 'label2')));
			echo $form->input('semicorte_suaje', array('class' => 'styled', 'div' => array('class' => 'overflow'), 'label' => array('class' => 'label2')));
			echo $form->input('perforado', array('class' => 'styled', 'div' => array('class' => 'overflow'), 'label' => array('class' => 'label2')));
			echo $form->input('marca_suaje', array('class' => 'styled', 'div' => array('class' => 'overflow'), 'label' => array('class' => 'label2')));
			echo $form->input('botado', array('class' => 'styled', 'div' => array('class' => 'overflow'), 'label' => array('class' => 'label2')));
			echo $form->input('hoststamping', array('class' => 'styled', 'div' => array('class' => 'overflow'), 'label' => array('class' => 'label2')));
			echo $form->input('origen_suaje');
			echo $form->input('origen_cliche');
			echo $form->input('solapas_proyecto');
			echo $form->input('comentarios_troquelado');
	
			echo '</div>';
		}
$count++;
		if ($page == $count)
		{
			echo '<a href="#">ARMADO Y PEGADO<br></a>';
			echo '<div>';
	
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
	
			echo '</div>';
		}
$count++;
		if ($page == $count)
		{
			echo '<a href="#">ENCUADERNADO<br></a>';
			echo '<div>';
	
			echo $form->input('encuadernado');
			echo $form->input('posicion_encuadernado');
			echo $form->input('color_encuadernado');
			echo $form->input('otro_color_encuadernado');
			echo $form->input('comentarios_encuadernado');
	
			echo '</div>';
		}
$count++;
		if ($page == $count)
		{
			echo '<a href="#">FOLIO<br></a>';
			echo '<div>';
	
			echo $form->input('folio_inicio');
			echo $form->input('folio_fin');
			echo $form->input('color_folio');
			echo $form->input('otro_color_folio');
			echo $form->input('folio_palabra_no');
			echo $form->input('comentarios_folio');
	
			echo '</div>';
		}
$count++;
		if ($page == $count)
		{
			echo '<a href="#">PONCHADO<br></a>';
			echo '<div>';
	
			echo $form->input('orificios', array('class' => 'styled', 'div' => array('class' => 'overflow'), 'label' => array('class' => 'label2')));
			echo $form->input('comentarios_ponchado');
	
			echo '</div>';
		}
$count++;
		if ($page == $count)
		{
			echo '<a href="#">DOBLADO<br></a>';
			echo '<div>';
	
			echo $form->input('dobleces_eje1');
			echo $form->input('dobleces_eje2');
			echo $form->input('comentarios_doblado');
	
			echo '</div>';
		}
$count++;
		if ($page == $count)
		{
			echo '<a href="#">REDONDEADO<br></a>';
			echo '<div>';
	
			echo $form->input('redondeado', array('class' => 'styled', 'div' => array('class' => 'overflow'), 'label' => array('class' => 'label2')));
			echo $form->input('comentarios_redondeado');
	
			echo '</div>';
		}
$count++;
		if ($page == $count)
		{
			echo '<a href="#">EMPAQUE<br></a>';
			echo '<div>';
	
			echo $form->input('papel_kraft', array('class' => 'styled', 'div' => array('class' => 'overflow'), 'label' => array('class' => 'label2')));
			echo $form->input('impresos_paquete');
			echo $form->input('fajillas');
			echo $form->input('caja_rotulada', array('class' => 'styled', 'div' => array('class' => 'overflow'), 'label' => array('class' => 'label2')));
			echo $form->input('caja_sin_rotular', array('class' => 'styled', 'div' => array('class' => 'overflow'), 'label' => array('class' => 'label2')));
			echo $form->input('emplayada', array('class' => 'styled', 'div' => array('class' => 'overflow'), 'label' => array('class' => 'label2')));
			echo $form->input('esquineros', array('class' => 'styled', 'div' => array('class' => 'overflow'), 'label' => array('class' => 'label2')));
			echo $form->input('fleje', array('class' => 'styled', 'div' => array('class' => 'overflow'), 'label' => array('class' => 'label2')));
			echo $form->input('comentarios_empaque');
	
			echo '</div>';
		}
$count++;
		if ($page == $count)
		{
			echo '<a href="#">DISTRIBUCI&Oacute;N<br></a>';
			echo '<div>';
	
			echo $form->input('distribucion');
			echo $form->input('comentarios_distribucion');
	
			echo '</div>';
		}
$count++;
		if ($page == $count)
		{
			echo '<a href="#">SELLAR BOLSA<br></a>';
			echo '<div>';
	
			echo $form->input('sellar_bolsa');
			echo $form->input('cantidad_sellar');
			echo $form->input('comentarios_bolsa');
	
			echo '</div>';
		}
$count++;
		if ($page == $count)
		{
			echo '<a href="#">EMPLAYADO A CALOR<br></a>';
			echo '<div>';
	
			echo $form->input('emplayado_calor', array('class' => 'styled', 'div' => array('class' => 'overflow'), 'label' => array('class' => 'label2')));
			echo $form->input('emplayado_pasadas');
			echo $form->input('comentarios_emplayado');
	
			echo '</div>';
		}
$count++;
		if ($page == $count)
		{
			echo '<a href="#">OJILLO METALICO<br></a>';
			echo '<div>';
	
			echo $form->input('ojillo', array('class' => 'styled', 'div' => array('class' => 'overflow'), 'label' => array('class' => 'label2')));
			echo $form->input('color_ojillo');
			echo $form->input('otro_color_ojillo');
			echo $form->input('tipo_ojillo');
			echo $form->input('otro_tipo_ojillo');
			echo $form->input('comentarios_ojillo');
	
			echo '</div>';
		}
$count++;
		if ($page == $count)
		{
			echo '<a href="#">PLASTIFLECHA<br></a>';
			echo '<div>';
	
			echo $form->input('plastiflecha', array('class' => 'styled', 'div' => array('class' => 'overflow'), 'label' => array('class' => 'label2')));
			echo $form->input('longitud_plastiflecha');
			echo $form->input('comentarios_plastiflecha');
	
			echo '</div>';
		}
$count++;
		if ($page == $count)
		{
			echo '<a href="#">POSTES DE ALUMINIO<br></a>';
			echo '<div>';
	
			echo $form->input('poste_aluminio', array('class' => 'styled', 'div' => array('class' => 'overflow'), 'label' => array('class' => 'label2')));
			echo $form->input('longitud_poste_aluminio');
			echo $form->input('comentarios_postes');
	
			echo '</div>';
		}
$count++;
		if ($page == $count)
		{
			echo '<a href="#">VELCRO<br></a>';
			echo '<div>';
	
			echo $form->input('velcro', array('class' => 'styled', 'div' => array('class' => 'overflow'), 'label' => array('class' => 'label2')));
			echo $form->input('cantidad_velcro');
			echo $form->input('tira_velcro', array('class' => 'styled', 'div' => array('class' => 'overflow'), 'label' => array('class' => 'label2')));
			echo $form->input('cantidad_tira_velcro');
			echo $form->input('comentarios_velcro');
	
			echo '</div>';
		}
$count++;
		if ($page == $count)
		{
			echo '<a href="#">HERRAJE<br></a>';
			echo '<div>';
	
			echo $form->input('herraje', array('class' => 'styled', 'div' => array('class' => 'overflow'), 'label' => array('class' => 'label2')));
			echo $form->input('tipo_heraje');
			echo $form->input('comentarios_herraje');
	
			echo '</div>';
		}
$count++;
		if ($page == $count)
		{
			echo '<a href="#">FOAM<br></a>';
			echo '<div>';
	
			echo $form->input('foam', array('class' => 'styled', 'div' => array('class' => 'overflow'), 'label' => array('class' => 'label2')));
			echo $form->input('medida_foam');
			echo $form->input('piezas_foam');
			echo $form->input('tiras_foam', array('class' => 'styled', 'div' => array('class' => 'overflow'), 'label' => array('class' => 'label2')));
			echo $form->input('centimetros_tira_foam');
			echo $form->input('esquinas_foam', array('class' => 'styled', 'div' => array('class' => 'overflow'), 'label' => array('class' => 'label2')));
			echo $form->input('comentarios_foam');
	
			echo '</div>';
		}
$count++;
		if ($page == $count)
		{
			echo '<a href="#">CORTE RECTO<br></a>';
			echo '<div>';
	
			echo $form->input('corte_recto', array('class' => 'styled', 'div' => array('class' => 'overflow'), 'label' => array('class' => 'label2')));
			echo $form->input('comentarios_corte');
	
			echo '</div>';
		}
$count++;
		if ($page == $count)
		{
			echo '<a href="#">IMAN<br></a>';
			echo '<div>';
	
			echo $form->input('iman', array('class' => 'styled', 'div' => array('class' => 'overflow'), 'label' => array('class' => 'label2')));
			echo $form->input('centimetros_iman');
			echo $form->input('esquinas_iman', array('class' => 'styled', 'div' => array('class' => 'overflow'), 'label' => array('class' => 'label2')));
			echo $form->input('comentarios_iman');
	
			echo '</div>';
		}
$count++;
		if ($page == $count)
		{
			echo '<a href="#">TERMOREALZADO<br></a>';
			echo '<div>';
	
			echo $form->input('termorealzado', array('class' => 'styled', 'div' => array('class' => 'overflow'), 'label' => array('class' => 'label2')));
			echo $form->input('lados_termorealzado', array('class' => 'styled', 'div' => array('class' => 'overflow'), 'label' => array('class' => 'label2')));
			echo $form->input('comentarios_termo');
	
			echo '</div>';
		}
$count++;
		if ($page == $count)
		{
			echo '<a href="#">OTROS ACABADOS<br></a>';
			echo '<div>';
	
			echo $form->input('otros_acabados', array('class' => 'styled', 'div' => array('class' => 'overflow'), 'label' => array('class' => 'label2')));
			echo $form->input('otros_acabados_descripcion');
			echo $form->input('comentarios_acabados');
	
			echo '</div>';
		}

		echo '</div>';
		echo '</fieldset>';
		echo $html->submit2();
	}

/*	echo $html->link(__('Anterior', true), array('action' => 'add', $prev));

	echo $html->link($html->image('prev.jpg'), array('action' => 'add', $next));
	*/


		
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
	

	
<!-- 
<div class="actions">
	<ul>
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