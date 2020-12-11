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
                        <h1>Editar Usuário</h1>
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

                            <form action="?pg=usuario-editar" method="POST">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nome do usuário</label>
                                    <input required type="email" class="form-control" name="nome" disabled value="<?php echo $dadosUsuario['nome'] ?>" id="usuario">
                                </div>
                                <input type="hidden" name="id_usuario" value="<?php echo $dadosUsuario['id_usuario'] ?>">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Senha</label>
                                    <input required type="password" class="form-control" name="senha" id="senha" placeholder="Digite uma senha">
                                </div>

                                <a href="?pg=usuarios-listar" class="btn btn-secondary ">Voltar</a>
                                <input type="submit" class="btn btn-success" value="Confirmar">

                            </form>
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