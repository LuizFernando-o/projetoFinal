<?php
include_once "app/cpanel/helpers/helper.php";
session_start();

//definindo a variavel pg
$pg = 'cpanel';


if (isset($_GET['pg'])) {
    $pg = $_GET['pg'];
}

//verifica se alguém está logado
if (isset($_SESSION['usuario'])) {
    switch ($pg) {
        case 'cpanel':
            include_once "app/cpanel/paginas/includes/header.php";
            include_once "app/cpanel/paginas/includes/navegacao.php";
            include_once "app/cpanel/paginas/inicial.php";
            include_once "app/cpanel/paginas/includes/footer.php";
            break;

        case 'produtos':
            include_once "app/cpanel/paginas/includes/header.php";
            include_once "app/cpanel/paginas/includes/navegacao.php";
            include_once "app/cpanel/paginas/produtos.php";
            include_once "app/cpanel/paginas/includes/footer.php";
            break;

        case 'produtos-form':
            include_once "app/cpanel/paginas/includes/header.php";
            include_once "app/cpanel/paginas/includes/navegacao.php";
            include_once "app/cpanel/paginas/produtos-form.php";
            include_once "app/cpanel/paginas/includes/footer.php";
            break;

        case 'produtos-novo':
            include_once "app/cpanel/paginas/includes/header.php";
            include_once "app/cpanel/paginas/includes/navegacao.php";
            inserirProduto();
            include_once "app/cpanel/paginas/includes/footer.php";
            break;

        case 'contato':
            include_once "app/cpanel/paginas/includes/header.php";
            include_once "app/cpanel/paginas/includes/navegacao.php";
            include_once "app/cpanel/paginas/contato.php";
            include_once "app/cpanel/paginas/includes/footer.php";
            break;

        case 'sair':
            session_destroy();
            Header('Location' . $_SERVER['PHP_SELF']);
            Header('Location: ?pg=inicial');
            break;

            // ***************************** C R U D ********************************//

        case 'usuarios-form':
            include_once "app/cpanel/paginas/includes/header.php";
            include_once "app/cpanel/paginas/includes/navegacao.php";
            include_once "app/cpanel/paginas/usuarios-form.php";
            include_once "app/cpanel/paginas/includes/footer.php";
            break;

        case 'usuarios-listar':
            include_once "app/cpanel/paginas/includes/header.php";
            include_once "app/cpanel/paginas/includes/navegacao.php";
            include_once "app/cpanel/paginas/usuarios-listar.php";
            include_once "app/cpanel/paginas/includes/footer.php";
            break;

        case 'usuarios-novo':
            include_once "app/cpanel/paginas/includes/header.php";
            include_once "app/cpanel/paginas/includes/navegacao.php";
            inserirUsuario();
            include_once "app/cpanel/paginas/includes/footer.php";
            break;

        case 'usuario-apagar':

            $parametros = array(':id_usuario' => $_GET['id']);
            $apagarUsuario = new Conexao();
            $apagarUsuario->intervencaoNoBanco('DELETE FROM usuarios WHERE id_usuario = :id_usuario', $parametros);
            Header('Location: ?pg=usuarios-listar');
            break;

        case 'usuario-apagar-msg':

            $parametros = array(':id_usuario' => $_GET['id']);
            $apagarUsuario = new Conexao();
            $apagarUsuario->intervencaoNoBanco('DELETE FROM contato WHERE id_usuario = :id_usuario', $parametros);
            Header('Location: ?pg=contato');
            break;

        case 'usuario-visualizar':

            include_once "app/cpanel/paginas/includes/header.php";
            include_once "app/cpanel/paginas/includes/navegacao.php";
            include_once "app/cpanel/paginas/usuarios-visualizar.php";
            include_once "app/cpanel/paginas/includes/footer.php";
            break;

        case 'usuario-visualizar-msg':

            include_once "app/cpanel/paginas/includes/header.php";
            include_once "app/cpanel/paginas/includes/navegacao.php";
            include_once "app/cpanel/paginas/usuarios-visualizar-msg.php";
            include_once "app/cpanel/paginas/includes/footer.php";
            break;

        case 'usuario-editar':

            include_once "app/cpanel/paginas/includes/header.php";
            include_once "app/cpanel/paginas/includes/navegacao.php";

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                atualizarUsuario();
            } else {

                $idUsuarioEditar = isset($_GET['id']);

                if ($idUsuarioEditar) {
                    $dadosUsuario = visualizarUsuario($idUsuarioEditar);
                    include_once "app/cpanel/paginas/usuarios-editar.php";
                } else {
                    Header('Location: ?pg=usuarios-listar');
                }
            }
            include_once "app/cpanel/paginas/includes/footer.php";
            break;


        default:

            include_once "app/cpanel/paginas/includes/header.php";
            include_once "app/cpanel/paginas/includes/navegacao.php";
            include_once "app/cpanel/paginas/inicial.php";
            include_once "app/cpanel/paginas/includes/footer.php";

            break;
    }
} else {
    $erro;
    //verifica se existe algum método POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (verificaSeLogado()) {
            include_once "app/cpanel/paginas/includes/header.php";
            include_once "app/cpanel/paginas/includes/navegacao.php";
            include_once "app/cpanel/paginas/inicial.php";
            include_once "app/cpanel/paginas/includes/footer.php";
        }
    } else {

        include_once "app/cpanel/paginas/login.php";
    }
}
