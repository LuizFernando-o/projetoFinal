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

        case 'sair':
            session_destroy();
            Header('Location' . $_SERVER['PHP_SELF']);
            include_once "app/index.php";
            break;

        case 'produtos':
            include_once "app/cpanel/paginas/includes/header.php";
            include_once "app/cpanel/paginas/includes/navegacao.php";
            include_once "app/cpanel/paginas/produtos.php";
            include_once "app/cpanel/paginas/includes/footer.php";
            break;

        case 'contato':
            include_once "app/cpanel/paginas/includes/header.php";
            include_once "app/cpanel/paginas/includes/navegacao.php";
            include_once "app/cpanel/paginas/contato.php";
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









































// if (!isset($_SESSION['usuario'])) {
//     $usuario = "Luiz Fernando Leite";
//     $senha = 123456;


//     session_start();

//     $_SESSION['usuario'] = $usuario;
//     $_SESSION['senha'] = $senha;


//     switch ($_GET['pg']) {

//         case 'login':
//             include_once "app/site/paginas/login.php";
//             break;

//         case 'cpanel':
//             include_once "app/cpanel/index.php";
//             break;

//         default:
//             include_once "app/site/paginas/inicial.php";
//             break;
//     }
// } else {

//     include_once "app/site/paginas/login.php";
// }
