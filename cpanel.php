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
            include_once "app/cpanel/index.php";
            break;

        case 'sair':
            break;


        default:
            include_once "app/cpanel/index.php";
            break;
    }
} else {

    //verifica se existe algum método POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        if (verificaSeLogado()) {
           // incluir o painel lá do negocio ... include_once;
        }

    } else {
        include_once "app/site/paginas/login.php";
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
