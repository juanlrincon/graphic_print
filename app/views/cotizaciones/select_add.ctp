<?php 

// <form id="CotizacionAddForm" method="post" action="/fuerza_grafica/cotizaciones/add">

$arrAdd['1'] = 'INFORMACI&Oacute;N GENERAL';
$arrAdd['2'] = 'INFORMACI&Oacute;N DEL PROYECTO Y ARCHIVOS';
$arrAdd['3'] = 'DISE&Ntilde;O Y PREPRENSA';
$arrAdd['4'] = 'IMPRESI&Oacute;N, MEDIDAS Y PAPEL';
$arrAdd['5'] = 'TINTAS';
$arrAdd['6'] = 'BARNIZ';
$arrAdd['7'] = 'PLASTIFICADO';
$arrAdd['8'] = 'TROQUELADO';
$arrAdd['9'] = 'ARMADO Y PEGADO';
$arrAdd['10'] = 'ENCUADERNADO';
$arrAdd['11'] = 'FOLIO';
$arrAdd['12'] = 'PONCHADO';
$arrAdd['13'] = 'DOBLADO';
$arrAdd['14'] = 'REDONDEADO';
$arrAdd['15'] = 'EMPAQUE';

$arrAdd['16'] = 'DISTRIBUCI&Oacute;N';
$arrAdd['17'] = 'SELLAR BOLSA';
$arrAdd['18'] = 'EMPLAYADO A CALOR';
$arrAdd['19'] = 'OJILLO METALICO';
$arrAdd['20'] = 'PLASTIFLECHA';
$arrAdd['21'] = 'POSTES DE ALUMINIO';
$arrAdd['22'] = 'VELCRO';
$arrAdd['23'] = 'HERRAJE';
$arrAdd['24'] = 'FOAM';
$arrAdd['25'] = 'CORTE RECTO';
$arrAdd['26'] = 'IMAN';
$arrAdd['27'] = 'TERMOREALZADO';
$arrAdd['28'] = 'OTROS ACABADOS';


//echo '<form action="">';
echo $form->create('Cotizacion');

echo '<fieldset>';

echo '<div id="col1">';
foreach ($arrAdd as $key => $value)
{
	echo '<div class="overflow">
	<input type="checkbox" name="add['.$key.']" value="1" checked class="styled">
	<label class="label2">'.ucwords(strtolower($value)).'</label>
	</div>';
	if ($key == 15)
		echo '</div><div id="col2">';
}


//echo '</form>';'



?>
</fieldset>
<?php echo $html->submit2(); //Debe de decir enviar ?>
