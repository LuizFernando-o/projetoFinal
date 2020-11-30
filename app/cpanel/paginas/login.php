<head>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="app/cpanel/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="app/cpanel/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="app/cpanel/dist/css/adminlte.min.css">
    <!-- Meu CSS -->
    <link rel="stylesheet" href="app/assets/css/projetoFinalCSS.css">

    <title>Admin | Log in</title>
</head>

<div class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html"><b>Painel Administrativo</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Faça o login para iniciar sua sessão</p>

                <?php if (isset($erro)) { ?>
                    <div class="alert alert-danger" id="erro"> <?php echo $erro ?> </div>
                <?php } ?>

                <form action="cpanel.php?pg=cpanel" method="post">
                    <div class="input-group mb-3">
                        <input type="email" name="usuario" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="senha" class="form-control" placeholder="Senha">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Lembre-me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Logar</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <hr>
                <!-- /.social-auth-links -->

                <div class="text-center">

                    <p class="mb-1">
                        <a href="forgot-password.html">Esqueci minha senha</a>
                    </p>
                    <p class="mb-0">
                        <a href="register.html" class="text-center">Registrar como um novo membro</a>
                    </p>
                    <hr>
                    <a class="text-secondary" href="index.php?pg=incial"> <small>Voltar ao site</small></a>
                </div>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
</div>

<!-- jQuery -->
<script src="app/cpanel/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="app/cpanel/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="app/cpanel/dist/js/adminlte.min.js"></script>
<!-- MEU JS -->
<script src="app/assets/js/projetoFinal.js"></script>