<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "mercado";

$conexao = new mysqli($servidor, $usuario, $senha, $banco, 3307);

if ($conexao->connect_error) {
    die("Erro ao conectar com o banco de dados.");
}

$conexao->set_charset("utf8");

?>