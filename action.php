<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>To do list</title>
</head>
<body>

<?php 
require_once 'conexaoBD.php';

$sql = "INSERT INTO anotacoes (semana, datasemana, anotacao, prioridade)
VALUES ('".$_POST['semana']."','".$_POST['data']."','".$_POST['tarefa']."','".$_POST['prioridade']."');";

if ($conexao->query($sql) === TRUE) {
    header('location: index.php');
}
else{
    echo '<script>alert("Algo ocorreu errado! Tente novamente.")</script>';
    header('location:index.php');
}
$conexao->close();

?>
</body></html>