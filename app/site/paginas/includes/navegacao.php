<nav class="navbar navbar-expand-lg bg-white navbar-light">
    <img src="app/assets/img/footerIcon.png" class="rounded-circle mr-5">
    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link <?php echo (($_GET['pg'] == 'inicial') ? ' btn btn-secondary' : ''); ?>" href="index.php?pg=inicial"> <span class="luiz-home3 text-info"></span>  Inicial</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link  <?php echo (($_GET['pg'] == 'produtos') ? ' btn btn-secondary' : ''); ?>" href="index.php?pg=produtos"> <span class="luiz-price-tag text-info"></span>  Produtos</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link  <?php echo (($_GET['pg'] == 'contato') ? ' btn btn-secondary' : ''); ?>" href="index.php?pg=contato"> <span class="luiz-phone text-info"></span>  Contatos</a>
            </li>
        </ul>



        <?php
        if (isset($_SESSION[''])) { ?>
            <!-- <ul class="navbar-nav mr-5 pr-5">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="luiz-user text-info"></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#"> <span class="luiz-exit text-danger"></span> Sair</a>
                </div>
            </li>
        </ul> -->
        <?php
        } else { ?>
            <div class="text-right">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a href="cpanel.php?pg=login" class="btn btn-outline-info">Painel Adm</a>
                    </li>
                </ul>
            </div>
        <?php
        }
        ?>
    </div>
</nav>