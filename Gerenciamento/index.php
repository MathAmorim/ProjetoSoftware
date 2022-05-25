<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>index</title>
</head>
<body>
	<?php
	$res = array();
	$tp = array('Projetor','Laboratorio');
	for ($i=0; $i < 10; $i++) { 
		$tipo = $tp[rand(0, count($tp)-1)];
	   	$res[$i]['id'] = $i;
	    $res[$i]['tipo'] = $tipo;
	    //$res[$i]['identificacao'] = $identificacao;
	}

	$xml = '<?xml version="1.0"?>';
	$xml = '<?xml-stylesheet type="text/xsl" href="recursos.xsl"?>';
	$xml .= '<recursos>';

	for ( $i = 0; $i < count( $res ); $i++ ) {
		$xml .= '<recurso>';
		$xml .= '<id>' . $res[$i]['id'] . '</id>';
		$xml .= '<tipo>' . $res[$i]['tipo'] . '</tipo>';
		//$xml .= '<identificacao>' . $res[$i]['identificacao'] . '</identificacao>';
		$xml .= '</recurso>';
	}

	$xml .= '</recursos>';

	$fp = fopen('recursos.xml', 'w+');
	fwrite($fp, $xml);
	fclose($fp);
	echo "XML gerado! <br>";
	echo '<a href="recursos.xml">Abrir XML</a>';
	?>
</body>
</html>

