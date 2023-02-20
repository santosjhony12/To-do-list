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

$sql = 'DELETE FROM anotacoes WHERE cod = "'.$_GET['cod'].'"';

if ($conexao->query($sql) === TRUE) {

header('location: index.php');

}

?>
</body>
</html>