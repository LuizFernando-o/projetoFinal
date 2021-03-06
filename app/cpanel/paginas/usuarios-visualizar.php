<?php
$id = isset($_GET['id']);

if ($id) {

    $id = $_GET['id'];
    $parametros = array(':id_usuario' => $id);

    $resultUsuario = new Conexao();
    $dados = $resultUsuario->consultarBanco('SELECT * FROM usuarios WHERE id_usuario = :id_usuario', $parametros);

    //return $dados;
} else {
    Header('Location: ?pg=usuarios-listar');
}

?>

<div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Visualizar Usuário</h1>
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

                        <?php foreach ($dados as $dadosUsuario) { ?>
                            <div class="jumbotron alert-secondary">
                                <h5 class="display-4">Nome Usuário:</h5>
                                <div class="display-2">
                                    <?php echo $dadosUsuario['nome'] ?>
                                </div>
                                <hr>
                                <a href="?pg=usuarios-listar" class="btn btn-warning ">Voltar</a>

                            </div>
                        <?php } ?>

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