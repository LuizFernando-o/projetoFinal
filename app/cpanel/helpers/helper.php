<?php
include_once "app/cpanel/helpers/conexao.php";

function verificaSeLogado()
{
    //futuramente virá do banco de dados

    $usuario = trim($_POST['usuario']);
    $resultConexao = new Conexao();

    $parametros = array(
        ':usuario' => $usuario
    );

    $resultadoConsulta = $resultConexao->consultarBanco('SELECT * FROM usuarios WHERE nome = :usuario', $parametros);


    if (count($resultadoConsulta) > 0) {
        $_SESSION['usuario'] = $usuario;
        return true;
    } else {
        echo 'Usuário e/ou senha não confere!';
    }
}
