<?php
	// . PHP_EOL // quebra de linha 
    $res = array();
    $firstname = array('Johnathon','Anthony','Erasmo','Raleigh','Nancie','Tama','Camellia','Augustine','Christeen','Luz','Diego','Lyndia','Thomas','Georgianna','Leigha','Alejandro','Marquis','Joan','Stephania','Elroy','Zonia','Buffy','Sharie','Blythe','Gaylene','Elida','Randy','Margarete','Margarett','Dion','Tomi','Arden','Clora','Laine','Becki','Margherita','Bong','Jeanice','Qiana','Lawanda','Rebecka','Maribel','Tami','Yuri','Michele','Rubi','Larisa','Lloyd','Tyisha','Samatha',);
    $lastname = array('Mischke','Serna','Pingree','Mcnaught','Pepper','Schildgen','Mongold','Wrona','Geddes','Lanz','Fetzer','Schroeder','Block','Mayoral','Fleishman','Roberie','Latson','Lupo','Motsinger','Drews','Coby','Redner','Culton','Howe','Stoval','Michaud','Mote','Menjivar','Wiers','Paris','Grisby','Noren','Damron','Kazmierczak','Haslett','Guillemette','Buresh','Center','Kucera','Catt','Badon','Grumbles','Antes','Byron','Volkman','Klemp','Pekar','Pecora','Schewe','Ramage',);

	$tp = array('Professor','Aluno');
    $status = array('Ativo','Inativo');
	for ($i=0; $i < 10; $i++) { 
		$tipo = $tp[rand(0, count($tp)-1)];
        
        $nome = $firstname[rand(0,count($firstname)-1)];
        $nome .= ' ';
        $nome .= $lastname[rand(0,count($lastname)-1)];

        $stt = $status[rand(0,count($status)-1)];

		$res[$i]['id'] = $i;
        $res[$i]['nome'] = $nome;
		$res[$i]['tipo'] = $tipo;
        $res[$i]['status'] = $stt;
	}

	$xml = '<?xml version="1.0"?>';
	$xml .= '<?xml-stylesheet type="text/xsl" href="../interface/usuario.xsl"?>';
	$xml .= '<usuarios>';

	for ( $i = 0; $i < count( $res ); $i++ ) {
		$xml .= '<usuario>';
		$xml .= '<id>' . $res[$i]['id'] . '</id>';
        $xml .= '<nome>' . $res[$i]['nome'] . '</nome>';
		$xml .= '<tipo>' . $res[$i]['tipo'] . '</tipo>';
        $xml .= '<status>' . $res[$i]['status'] . '</status>';
		$xml .= '</usuario>';
	}

	$xml .= '</usuarios>';

	$fp = fopen('gerado.xml', 'w+');
	fwrite($fp, $xml);
	fclose($fp);
	echo "XML gerado! <br>";
    echo '<a href="index.html"><button>Voltar</button></a>';
