<?php
include("conexao.php");

$lista = $conn->query("SELECT * FROM jogos");
?>

<h2>Catálogo de Jogos</h2>

<form action="salvar.php" method="post">
    <input type="hidden" name="codigo">

    Jogo: <input type="text" name="nome" required><br>
    Link: <input type="text" name="link"><br>
    Descrição: <textarea name="descricao"></textarea><br>

    <button type="submit">Salvar</button>
</form>

<hr>

<?php while ($j = $lista->fetch_assoc()) { ?>
    <p>
        <?= $j["nome"] ?> -
        <?= $j["link"] ?> -
        <?= $j["descricao"] ?>

        <a href="editar.php?codigo=<?= $j['codigo'] ?>">Editar</a>
        <a href="excluir.php?codigo=<?= $j['codigo'] ?>">Excluir</a>
    </p>
<?php } ?>