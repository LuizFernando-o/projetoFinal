<?php

if (!isset($_SESSION['usuario'])) {
    $usuario = "Luiz Fernando Leite";
    $senha = 123456;


    session_start();

    $_SESSION['usuario'] = $usuario;
    $_SESSION['senha'] = $senha;


    switch ($_GET['pg']) {

        case 'login':
            include_once "app/site/paginas/login.php";
            break;

        case 'cpanel':
            include_once "app/cpanel/index.php";
            break;

        default:
            include_once "app/site/paginas/inicial.php";
            break;
    }
} else {

    include_once "app/site/paginas/login.php";
}
