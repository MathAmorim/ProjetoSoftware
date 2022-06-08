<?php
    function Banco($query){
        $conexao = mysqli_connect('localhost', 'root', '', 'mydb');
        if(mysqli_query($conexao, $query)) {
            echo "Deu certo!<br>"; 
        } else {
            echo "Não deu certo!<br>";
        }  
        mysqli_close($conexao);
    }
    
?>