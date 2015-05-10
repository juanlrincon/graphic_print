<?php
foreach($clientes as $key => $value)
{
	//echo '<a style="cursor:pointer;" onclick="document.getElementById(\'searchtext\').value=\''.$value.'\';document.getElementById(\'livesearch\').innerHTML=\'\'">'.$value.'</a><br>';
	echo 'N&uacute;mero del Cliente: '.$value['Cliente']['id'].'<br>';
	echo 'Nombre el Cliente: '.$value['Cliente']['nombre'].'<br>';
	echo 'Nombre Comercial: '.$value['Cliente']['nombre_comercial'].'<br>';
	echo 'Raz&oacute;n Social: '.$value['Cliente']['rfc'].'<br>';
	echo 'Direcci&oacute;n de Entrega: '.$value['Cliente']['colonia'].'<br>';
	echo 'Nombre de Contacto: '.$value['Contacto']['nombre'].'<br>';
	echo 'Horario para recibir material: '.$value['RecepcionMaterial']['hora_inicio'].' a '.$value['RecepcionMaterial']['fin'].'<br>';
	echo 'Horario para recibir material: '.$value['RecepcionMaterial']['hora_inicio'].'<br>';
}

//print_r($clientes);
?>