<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>index</title>
</head>
<body>
	<?php
		require_once('recurso.php');
		require_once('usuario.php');
		class Reserva{
			private $id;
			private $data;
			private $recurso;
			private $usuario;
			function __construct($id, $data, $id_recurso, $id_usuario){
				$this->id = $id;
				$this->data = $data;
				$this->recurso = new Recurso($id_recurso);
				$this->usuario = new Usuario($id_usuario);
			}
			public function VerUsuario(){
				$this->usuario->VerUsuario();
			} 
		}
		echo 'tudo certo! reserva <br>';
	?>
</body>
</html>
