<?php
//Header
include_once "app/site/paginas/includes/header.php";

//Navegação
include_once "app/site/paginas/includes/navegacao.php";

// Páginas do meu site

$paginas = isset($_GET['pg']);

if ($paginas) {

    switch ($_GET['pg']) {
        case 'login':
            include_once "app/site/paginas/login.php";
            break;

        default:
            include_once "app/site/paginas/inicial.php";
            break;
    }
} else {
    include_once "app/site/paginas/inicial.php";
}
//Footer
include_once "app/site/paginas/includes/footer.php";