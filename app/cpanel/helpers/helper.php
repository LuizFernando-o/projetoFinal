<?php


function verificaSeLogado()
{
    //futuramente virá do banco de dados
    $usuario  = 'luiz@gmail.com';
    $senha = 123456;

    if ($_POST['usuario'] == $usuario) {

        $_SESSION = $usuario;
        echo 'igual';
        return true;
    } else {
        echo 'Usuário e/ou senha não confere!';
    }
}
