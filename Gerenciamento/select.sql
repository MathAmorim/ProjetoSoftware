SELECT usuarios.Nome, recursos.Tipo, reserva.Data FROM reserva
INNER JOIN usuarios ON reserva.FK_Matricula = usuarios.Matricula
INNER JOIN recursos ON reserva.FK_ID_Recurso = recursos.ID 
WHERE reserva.ID = 2;

-----------------------------------------------------------------------------------------

SELECT `usuarios`.`Nome` AS `nome_usuarios`, `recursos`.`Tipo`, `reserva`.`Data` FROM `reserva`
INNER JOIN `usuarios` ON `reserva`.`FK_Matricula` = `usuarios`.`Matricula`
INNER JOIN `recursos` ON `reserva`.`FK_ID_Recurso` = `recursos`.`ID`
WHERE `reserva`.`ID` = 2;


$sql = 'SELECT * FROM users';

    if ($result = $conn->query($sql)) {
        while ($data = $result->fetch_object()) {
            $users[] = $data;
        }
    }