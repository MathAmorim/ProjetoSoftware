<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>index</title>
</head>
<body>
	<?php
	$xml = "";
	foreach(file('../modelo/recursos.xml') as $line) {
		$xml .= $line;
	}
	$fp_out = fopen('recursos.xml', 'w+');
	fwrite($fp_out, $xml);
	fclose($fp_out);
	echo '<a href="recursos.xml"><button>Recursos</button></a>';
	?>
</body>
</html>
