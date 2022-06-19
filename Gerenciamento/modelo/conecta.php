<?php
    function Banco($query){
        $conexao = new mysqli('localhost', 'root', '', 'mydb');
        if($conexao->connect_error) {
            echo 'Deu certo!<br>'; 
        } else {
            echo "Não deu certo!<br>";
        }  
        mysqli_close($conexao);
    }
    function BancoSelect($query){
        $conexao = new mysqli('localhost', 'root', '', 'mydb');
        $result = $conexao->query($query);
        mysqli_close($conexao);
        return $result;
    }
    
?>