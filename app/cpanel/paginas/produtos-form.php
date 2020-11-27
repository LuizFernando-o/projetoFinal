<?php
$resultDados = new Conexao();
$dados = $resultDados->consultarBanco('SELECT * FROM usuarios');
?>



<div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Cadastrar novo produto</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Contatos</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <form action="?pg=produtos-novo" method="POST">
                            <div class="form-group">
                                <label for="nome">Nome do produto:</label>
                                <input required type="text" class="form-control" name="nome" autofocus id="nome" placeholder="ex.: Honda CG 160">
                            </div>
                            <div class="form-group">
                                <label for="desc">Descrição:</label>
                                <input required type="text" class="form-control" name="desc" id="desc" placeholder="ex.: Motocicleta modelo 2020">
                            </div>
                            <div class="form-group">
                                <label for="preco">Preço:</label>
                                <input required type="text" class="form-control" name="preco" id="preco" placeholder="ex.: R$14,900">
                            </div>

                            <a href="?pg=produtos" class="btn btn-secondary ">Voltar</a>
                            <input type="submit" class="btn btn-success" value="Cadastrar">

                        </form>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
</div>


<!--  -->