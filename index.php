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

    <table>

        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Validade</th>
            <th>Ações</th>

        </tr>

        <?php while ($produto = $resultado->fetch_assoc()) { ?>
            <tr>
                <td><?= $produto["id"] ?></td>
               <td><?= $produto["nome"] ?></td>
                <td><?= $produto["categoria"] ?></td>
                <td><?= $produto["descricao"] ?></td>
                <td>R$ <?= $produto["preco"] ?></td>
                <td><?= $produto["quantidade"] ?></td>
                <td><?= $produto["data_validade"] ?></td>
                <td>
                    <a href="public/editar.php?id=<?= $produto["id"] ?>">
                        Editar
                    </a>
                    |
                    <a
                        href="public/excluir.php?id=<?= $produto["id"] ?>"
                        onclick="return confirm('Deseja excluir este produto?')"
                    >
                        Excluir
                    </a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>