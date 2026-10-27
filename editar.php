<?php
include("conexao.php");

$codigo = $_GET["codigo"];

if (isset($_POST["salvar"])) {
    $nome = $_POST["nome"];
    $link = $_POST["link"];
    $descricao = $_POST["descricao"];

    $conn->query("UPDATE jogos SET nome='$nome',
    link='$link', descricao='$descricao'
    WHERE codigo=$codigo");

    header("Location: index.php");
    exit;
}

$jogo = $conn->query("SELECT * FROM jogos WHERE codigo=$codigo")->fetch_assoc();
?>

<form method="post">
    Jogo: <input type="text" name="nome" value="<?= htmlspecialchars($jogo['nome']) ?>"><br>
    Link: <input type="text" name="link" value="<?= htmlspecialchars($jogo['link']) ?>"><br>
    Descrição: <textarea name="descricao"><?= htmlspecialchars($jogo['descricao']) ?></textarea><br>

    <button type="submit" name="salvar">Alterar</button>
</form>
