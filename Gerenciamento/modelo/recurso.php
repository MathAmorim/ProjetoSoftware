<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>index</title>
</head>
<body>
	<?php
		class Recurso {
			// Properties
			protected $id;
			protected $tipo;
			protected $status;

			//Constructor
			/* function __construct($id, $tipo, $status) {
				$this->id = $id;
				$this->tipo = $tipo;
				$this->status = $status;
			} */

			// Methods
			public function set_id($id) {
				$this->id = $id;
			}
			public function set_tipo($tipo) {
				$this->tipo = $tipo;
			}
			public function set_status($status) {
				$this->status = $status;
			}
			public function get_id() {
				return $this->id;
			}
			public function get_tipo() {
				return $this->tipo;
			}
			public function get_status() {
				return $this->status;
			}
			public function Cadastrar($tipo,$status){
                $query = "INSERT INTO `recursos`(`Tipo`, `Status`) VALUES ({$tipo},1)";
                Banco($query);
            }
            public function Remover($id){
                $query = "UPDATE `recursos` SET `Status`=0 WHERE `ID`={$id}";
                Banco($query);
            }
            public function Alterar($id){
                $query = "UPDATE `recursos` SET `Status`=1 WHERE `ID`={$id}";
                Banco($query);
            }
		}
		echo 'tudo certo! recurso <br>';
	?>
</body>
</html>
