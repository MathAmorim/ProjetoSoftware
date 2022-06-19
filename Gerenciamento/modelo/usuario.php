<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>index</title>
</head>
<body>
	<?php
        require('../modelo/conecta.php');
		class Usuario {
			// Properties
			protected $matricula;
            protected $nome;
			protected $tipo;
			protected $status;

			//Constructor
			function __construct($matricula, $nome = null, $tipo = null, $status = null) {
				$this->matricula = $matricula;
                $this->nome = $nome;
				$this->tipo = $tipo;
				$this->status = $status;
			}

			// Methods
			public function set_matricula($matricula) {
				$this->matricula = $matricula;
			}
            public function set_nome($nome) {
				$this->nome = $nome;
			}
			public function set_tipo($tipo) {
				$this->tipo = $tipo;
			}
			public function set_status($status) {
				$this->status = $status;
			}
			public function get_matricula() {
				return $this->matricula;
			}
			public function get_tipo() {
				return $this->tipo;
			}
			public function get_status() {
				return $this->status;
			}
            public function Cadastrar($nome,$tipo,$status,$senha){
                $query = "INSERT INTO `usuarios`(`Nome`, `Tipo`, `Status`, `Senha`) VALUES ('{$nome}',{$tipo},{$status},'{$senha}')";
                Banco($query);
            }
            public function Remover($id){
                $query = "UPDATE `usuarios` SET `Status`=0 WHERE `Matricula`={$id}";
                Banco($query);
            }
            public function Alterar($id,$senha){
                $query = "UPDATE `usuarios` SET `Senha`='{$senha}' WHERE `Matricula`={$id}";
                Banco($query);
            }
			public function VerUsuario($id){
				$query = "SELECT `Nome`, `Tipo`, `Status`, `Senha` FROM `usuarios` WHERE `Matricula`={$id}";
                $result = BancoSelect($query);
				$object = $result->fetch_array();
				echo $object["Nome"]."<br>";
				echo $object["Tipo"]."<br>";
				echo $object["Status"]."<br>";
				echo $object["Senha"]."<br>";
			}
		}
		echo 'tudo certo! usuario <br>';
	?>
</body>
</html>
