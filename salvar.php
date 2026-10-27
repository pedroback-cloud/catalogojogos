
<?php
include("conexao.php");

$nome = $_POST["nome"];
$link = $_POST["link"];
$descricao = $_POST["descricao"];

$conn->query("INSERT INTO jogos (nome, link, descricao)
VALUES ('$nome', '$link', '$descricao')");

header("Location: index.php");
?>
        