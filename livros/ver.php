<?php
include "../inc/cabecalho.php";
include "../inc/conexao.php";
$id = $_GET["id"];
$titulo = $isbn = $ano = $valor = $autor = $editora = $foto = "";
$sql = "select * from tb_livros where id=$id";
$todos_os_livros = mysqli_query($conexao, $sql);
while($um_livro = mysqli_fetch_assoc($todos_os_livros)):
    $titulo = $um_livro["titulo"];
    $isbn = $um_livro["isbn"];
    $ano = $um_livro["ano"];
    $valor = $um_livro["valor"];
    $autor = $um_livro["autor"];
    $editora = $um_livro["editora"];
    $foto = $um_livro["foto"];
endwhile;
?>
<main class="container">
    <div class="row">
        <div class="col-12"><h4>FICHA DE LIVRO</h4></div>
    </div>
    <div class="row">
        <div class="col-1">
            Código: <?php echo $id;?>
        </div>
        <div class="col-10">
            Título: <?php echo $titulo;?>
        </div>
        <div class="col-10">
            Editora: <?php echo $editora;?>
        </div>
        <div class="col-12">
            Autor: <?php echo $autor;?>
        </div>
        <div class="col-2">
            Ano de lançamento: <?php echo $ano;?>
        </div>
        <div class="col-2">
            Preço: R$ <?php echo number_format($valor,2,",",".");?>
        </div>
        <div class="col-12">
            <img src="<?php echo $foto;?>" width="200">
        </div>
    </div>
</main>
<?php 
mysqli_close($conexao);
include "../inc/rodape.php";
?>