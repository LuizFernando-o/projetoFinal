<?php

$id = isset($_GET['id']);

if ($id) {

    $id = $_GET['id'];
    $parametros = array(':id_usuario' => $id);

    $resultUsuario = new Conexao();
    $dados = $resultUsuario->consultarBanco('SELECT * FROM contato WHERE id_usuario = :id_usuario', $parametros);

    
    visualizarMensagem();
} else {
    Header('Location: ?pg=contato');
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
                                <h5> Nome Usuário:</h5>
                                <div class="display-5">
                                    <?php echo $dadosUsuario['nome'] ?>
                                </div>
                                <br>
                                <h5> Categoria:</h5>
                                <div class="display-5">
                                    <?php echo $dadosUsuario['cat'] ?>
                                </div>
                                <br>
                                <h5>Mensagem:</h5>
                                <div class="display-5">
                                    <?php echo $dadosUsuario['msg'] ?>
                                </div>


                                <hr>
                                <a href="?pg=contato" class="btn btn-warning ">Voltar</a>

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