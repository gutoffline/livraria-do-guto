<?php 
include "../inc/cabecalho.php";
?>
<main class="container">
    <div class="row">
        <div class="col-12"><h4>LISTAGEM DE LIVROS</h4></div>
        <div class="col-12">
            <a href="novo-formulario.php" class="btn btn-outline-primary">
                <img src="../img/novo.png" width="30"> Adicionar novo livro
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Título</th>
                        <th>Editora</th>
                        <th>Autor</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "../inc/conexao.php";
                    $sql = "select * from tb_livros";
                    $todos_os_livros = mysqli_query($conexao, $sql);
                    while($um_livro = mysqli_fetch_assoc($todos_os_livros)):
                        ?>
                        <tr>
                            <td><?php echo $um_livro["id"];?></td>
                            <td><?php echo $um_livro["titulo"];?></td>
                            <td><?php echo $um_livro["editora"];?></td>
                            <td><?php echo $um_livro["autor"];?></td>
                            <td>
                                <a href="ver.php?id=<?php echo $um_livro["id"];?>" class="btn"><img src="../img/visualizar.png" width="20"></a>
                                <a href="editar-formulario.php?id=<?php echo $um_livro["id"];?>" class="btn"><img src="../img/editar.png" width="20"></a>
                                <a href="excluir.php?id=<?php echo $um_livro["id"];?>" class="btn"><img src="../img/delete.png" width="20"></a>
                            </td>
                        </tr>
                        <?php
                    endwhile;
                    mysqli_close($conexao);
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php 
include "../inc/rodape.php";
?>