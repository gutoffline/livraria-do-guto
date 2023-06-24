<?php
include "../inc/conexao.php";
$id = $_GET["id"];
$sql = "delete from tb_livros where id = $id";
mysqli_query($conexao,$sql);
mysqli_close($conexao);
header("location:index.php");

?>