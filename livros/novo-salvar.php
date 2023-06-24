<?php
include "../inc/conexao.php";

$titulo = $_POST["titulo"];
$isbn = $_POST["isbn"];
$autor = $_POST["autor"];
$editora = $_POST["editora"];
$ano = $_POST["ano"];
$valor = $_POST["valor"];
$foto = $_POST["foto"];

$sql = "insert into tb_livros(titulo, isbn, autor, editora, ano, valor, foto) values('$titulo', '$isbn', '$autor', '$editora', $ano, $valor, '$foto')";

mysqli_query($conexao, $sql);
mysqli_close($conexao);
header("location:index.php");
?>