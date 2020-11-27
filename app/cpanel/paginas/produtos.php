<?php
$resultDados = new Conexao();
$dados = $resultDados->consultarBanco('SELECT * FROM produtos');
?>



<div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Listar Produtos</h1>
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
                                <a href="?pg=produtos-form" class="btn btn-success font-weight-bold"> <span class="fa fa-user-plus"></span> Cad. Produto</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Descrição</th>
                                            <th>Preço</th>
                                            <th>Data Criação</th>
                                            <th>Data Atualização</th>

                                            <th class="text-center">Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>



                                        <?php foreach ($dados as $dadosUsuarios) { ?>
                                            <tr>

                                                <td> <?php echo $dadosUsuarios['nome'] ?></td>
                                                <td> <?php echo $dadosUsuarios['descricao'] ?></td>
                                                <td> <?php echo $dadosUsuarios['preco'] ?></td>
                                                <td> <?php echo $dadosUsuarios['dataCriacao'] ?></td>
                                                <td> <?php echo $dadosUsuarios['dataAtualizacao'] ?></td>

                                                <td>
                                                    <div class="text-center">

                                                        <a href="?pg=usuario-visualizar-prod&id=<?php echo $dadosUsuarios['id_produto'] ?>" class=" fas fa-eye btn btn-success"></a>
                                                        <a href="?pg=usuario-editar-prod&id=<?php echo $dadosUsuarios['id_produto'] ?>" class=" fas fa-edit btn btn-warning"></a>
                                                        <a href="?pg=usuario-apagar-prod&id=<?php echo $dadosUsuarios['id_produto'] ?>" class="  btn btn-danger"> <span class="fa fa-trash"></span></a>
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