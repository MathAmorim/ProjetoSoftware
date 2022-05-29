<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv='refresh' content='0; URL=../controle/disp.xml'>
	<title>Disponibilidade</title>
</head>
<body>
	<?php
	$res = array();
	$tp = array('Disponivel','Reservado');
	for ($i=0; $i < 10; $i++) { 
		$status = $tp[rand(0, count($tp)-1)];
		$res[$i]['data'] = $i+1;
		$res[$i]['status'] = $status;
	    //$res[$i]['reserva'] = $reserva;
	}

	$xml = '<?xml version="1.0"?>';
	$xml = '<?xml-stylesheet type="text/xsl" href="../interface/disp.xsl"?>';
	$xml .= '<recursos>';

	for ( $i = 0; $i < count( $res ); $i++ ) {
		$xml .= '<recurso>';
		$xml .= '<data>' . $res[$i]['data'] .'/6/2022'. '</data>';
		$xml .= '<status>' . $res[$i]['status'] . '</status>';
		//$xml .= '<identificacao>' . $res[$i]['identificacao'] . '</identificacao>';
		$xml .= '</recurso>';
	}

	$xml .= '</recursos>';

	$fp = fopen('../controle/disp.xml', 'w+');
	fwrite($fp, $xml);
	fclose($fp);
	?>
</body>
</html>

