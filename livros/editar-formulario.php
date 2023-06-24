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
<main class="container mb-3">
    <div class="row">
        <div class="col-12"><h4>EDITAR LIVROS</h4></div>
    </div>
    <div class="row">
        <div class="col">
            <form method="post" action="editar-salvar.php?id=<?php echo $id;?>">
                <div class="row">
                    <div class="col-3 mb-2">
                        <label class="form-label">ISBN</label>
                        <input class="form-control" name="isbn" value="<?php echo $isbn;?>">
                    </div>
                    <div class="col-9 mb-2">
                        <label class="form-label">Título</label>
                        <input class="form-control" name="titulo" value="<?php echo $titulo;?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 mb-2">
                        <label class="form-label">Editora</label>
                        <input class="form-control" name="editora" value="<?php echo $editora; ?>">
                    </div>
                    <div class="col-6 mb-2">
                        <label class="form-label">Autor</label>
                        <input class="form-control" name="autor" value="<?php echo $autor;?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-8 mb-2">
                        <label class="form-label">Foto</label>
                        <input class="form-control" name="foto" value="<?php echo $foto; ?>">
                    </div>
                    <div class="col-2 mb-2">
                        <label class="form-label">Ano</label>
                        <input class="form-control" name="ano" value="<?php echo $ano;?>">
                    </div>
                    <div class="col-2 mb-2">
                        <label class="form-label">Valor</label>
                        <input class="form-control" name="valor" value="<?php echo $valor?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <button class="btn btn-success w-25">ATUALIZAR</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>
<?php
include "../inc/rodape.php";
?>