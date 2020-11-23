<?php
include_once "app/cpanel/helpers/conexao.php";

function verificaSeLogado()
{

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


function inserirUsuario()
{

    //Pegando as variáveis via post
    $nome = trim($_POST['nome']);
    $senha = trim($_POST['senha']);

    //Validar as variáveis e encriptar a senha
    $parametros = array(
        ':nome' => $nome,
        ':senha' => password_hash($senha, PASSWORD_DEFAULT)
    );

    $resultDados = new Conexao();
    $resultDados->intervencaoNoBanco('INSERT INTO usuarios(nome, senha) VALUES (:nome,:senha)', $parametros);

    include_once "app/cpanel/paginas/usuarios-listar.php";
}
