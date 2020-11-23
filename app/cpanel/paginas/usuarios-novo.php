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
                        <h1>Novo Usuário</h1>
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
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Tabela de dados dos contatos do site</h3><br><br>
                                <a href="?pg=usuarios-form" class="btn btn-success font-weight-bold"> <span class="fa fa-user-plus"></span> Novo Usuário</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Usuário</th>
                                            <th>Data Criação</th>
                                            <th>Data Atualização</th>
                                            <th class="text-center">Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>



                                        <?php foreach ($dados as $dadosUsuarios) { ?>
                                            <tr>

                                                <td> <?php echo $dadosUsuarios['id_usuario'] ?></td>
                                                <td> <?php echo $dadosUsuarios['nome'] ?></td>
                                                <td> <?php echo $dadosUsuarios['dataCriacao'] ?></td>
                                                <td> <?php echo $dadosUsuarios['dataAtualizacao'] ?></td>

                                                <td>
                                                    <div class="text-center">

                                                        <a href="?pg=usuario_visualizar&id= <?php echo $dadosUsuarios['id_usuario'] ?>" class=" fas fa-eye btn btn-success"></a>
                                                        <a href="?pg=usuario_editar&id= <?php echo $dadosUsuarios['id_usuario'] ?>" class=" fas fa-edit btn btn-warning"></a>
                                                        <a href="?pg=usuario_apagar&id= <?php echo $dadosUsuarios['id_usuario'] ?>" class="  btn btn-danger"> <span class="fa fa-trash"></span></a>
                                                    </div>

                                                </td>
                                            </tr>
                                        <?php } ?>


                                    </tbody>
                                    <tfoot>

                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->


                        <!-- /.card -->
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