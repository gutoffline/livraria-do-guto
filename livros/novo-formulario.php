<?php
include "../inc/cabecalho.php";
?>
<main class="container mb-3">
    <div class="row">
        <div class="col-12"><h4>CADASTRO DE LIVROS</h4></div>
    </div>
    <div class="row">
        <div class="col">
            <form method="post" action="novo-salvar.php">
                <div class="row">
                    <div class="col-3 mb-2">
                        <label class="form-label">ISBN</label>
                        <input class="form-control" name="isbn">
                    </div>
                    <div class="col-9 mb-2">
                        <label class="form-label">Título</label>
                        <input class="form-control" name="titulo">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 mb-2">
                        <label class="form-label">Editora</label>
                        <input class="form-control" name="editora">
                    </div>
                    <div class="col-6 mb-2">
                        <label class="form-label">Autor</label>
                        <input class="form-control" name="autor">
                    </div>
                </div>
                <div class="row">
                    <div class="col-8 mb-2">
                        <label class="form-label">Foto</label>
                        <input class="form-control" name="foto">
                    </div>
                    <div class="col-2 mb-2">
                        <label class="form-label">Ano</label>
                        <input class="form-control" name="ano">
                    </div>
                    <div class="col-2 mb-2">
                        <label class="form-label">Valor</label>
                        <input class="form-control" name="valor">
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <button class="btn btn-success w-25">SALVAR</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>
<?php
include "../inc/rodape.php";
?>