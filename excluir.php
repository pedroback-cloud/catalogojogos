<?php
include("conexao.php");

$codigo = $_GET["codigo"];

$conn->query("DELETE FROM jogos WHERE codigo=$codigo");

header("Location: index.php");
?>