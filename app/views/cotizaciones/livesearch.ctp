<?php

echo '
<style>
#results {
	border-style: solid;
	border-width: 1px;
	border-color: #A5ACB22;
}
#results a
{
	text-decoration: none;
	font-weight: normal;
}
</style>';

if (count($results) > 0)
{
	echo '<div id="results">';
}

foreach($results as $key => $value)
{
//	echo '<a style="cursor:pointer;" onclick="document.getElementById(\'CotizacionSearchtext\').value=\''.$value.'\';document.getElementById(\'livesearch\').innerHTML=\'\'">'.$value.'</a><br>';
$value2 = str_replace($q, '<b><u>'.$q.'</u></b>', $value);
	 echo $ajax->link(
 $value2,
 array( 'controller' => 'cotizaciones', 'action' => 'update_cliente', $key),
 array( 'update' => 'cliente', 'complete' => 'document.getElementById(\'CotizacionSearchtext\').value=\''.$value.'\';document.getElementById(\'livesearch\').innerHTML=\'\'' ),
 null, false
 );

  echo '<br>';

}


if (count($results) > 0)
{
	echo '</div>';
}
 	
 	

?>