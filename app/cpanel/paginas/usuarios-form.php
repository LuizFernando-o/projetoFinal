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
                        <h1>Inserir Usuário</h1>
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

                        <form action="?pg=usuarios-novo" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nome">Nome do usuário</label>
                                <input required type="email" class="form-control" name="nome" autofocus id="usuario" placeholder="Digite o nome do usuário">
                            </div>

                            <div class="form-group">
                                <label for="senha">Senha</label>
                                <input required type="password" class="form-control" name="senha" id="senha" placeholder="Digite uma senha">
                            </div>

                            <div class="form-group">
                                <input required type="file" name="img_usuario" id="img_usuario">
                            </div>

                            <a href="?pg=usuarios-listar" class="btn btn-secondary ">Voltar</a>
                            <input type="submit" class="btn btn-success" value="Confirmar">

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