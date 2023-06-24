<?php
include "../inc/conexao.php";
$id = $_GET["id"];

$titulo = $_POST["titulo"];
$isbn = $_POST["isbn"];
$autor = $_POST["autor"];
$editora = $_POST["editora"];
$ano = $_POST["ano"];
$valor = $_POST["valor"];
$foto = $_POST["foto"];

$sql = "update tb_livros set titulo='$titulo', isbn='$isbn', autor='$autor', editora='$editora', ano=$ano, valor=$valor, foto='$foto' where id = $id";
mysqli_query($conexao, $sql);
mysqli_close($conexao);
header("location:index.php");
?>