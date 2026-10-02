<?php 

include ("config/conexao.php"):

$sql = "SELECT * FROM produtos";

$stmt = $conexao->prepare($sql);

if ($stmt) {

    $stmt->execute();

    $resultado = $stmt->get_result();

} else {

    die("Erro ao consultar os produtos.");

}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">

    <title>Estoque de Produtos</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <h1>Estoque de Produtos</h1>

    <a href="public/cadastrar.php">Cadastrar produto</a>

    <br><br>

   