<?php
include_once "app/cpanel/helpers/conexao.php";

function verificaSeLogado()
{

    $usuario = trim($_POST['usuario']);
    $senha = trim($_POST['senha']);

    $resultConexao = new Conexao();

    $parametros = array(
        ':usuario' => $usuario
    );

    $resultadoConsulta = $resultConexao->consultarBanco('SELECT * FROM usuarios WHERE nome = :usuario', $parametros);

    if (count($resultadoConsulta) > 0) {
        $senha_bd = $resultadoConsulta[0]['senha'];

        if (password_verify($senha, $senha_bd)) {
            $_SESSION['usuario'] = $usuario;
            return true;
        } else {
            $erro = 'Usuário e/ou senha inválidos';
            include_once "app/cpanel/paginas/login.php";
        }
    } else {
        $erro = 'Usuário e/ou senha inválidos';
        include_once "app/cpanel/paginas/login.php";
    }
}


function inserirUsuario()
{

    //Pegando as variáveis via post
    $nome = trim($_POST['nome']);
    $senha = trim($_POST['senha']);

    //Pegando a imagem
    // $img_usuario = $_FILES['img_usuario'];
    //$img_usuario = $_FILES['img_usuario']['name'];

    // echo '<pre>';
    // print_r($_FILES);
    // die();

    /********************************************************************************
     * 
     * 
     *                              FALTOU TESTAR
     * 
     * 
     *********************************************************************************/



    move_uploaded_file($_FILES['img_usuario']['tmp_name'], 'app/cpanel/assets/img/' . $_FILES['img_usuario']['name']);
    //die('Upload realizado com sucesso');

    //Validar as variáveis e encriptar a senha
    $parametros = array(
        ':nome' => $nome,
        ':senha' => password_hash($senha, PASSWORD_DEFAULT),
        ':img_usuario' => ($_FILES['img_usuario']['name'] == true) ? 'app/cpanel/assets/img/' . $_FILES['img_usuario']['name'] : 'app/cpanel/assets/img/anonimo.jpg'
    );

    $resultDados = new Conexao();
    $resultDados->intervencaoNoBanco('INSERT INTO usuarios(nome, senha, img) VALUES (:nome,:senha, :img_usuario)', $parametros);

    include_once "app/cpanel/paginas/usuarios-listar.php";
}

function inserirProduto()
{

    //Pegando as variáveis via post
    $nome = trim($_POST['nome']);
    $desc = trim($_POST['desc']);
    $preco = trim($_POST['preco']);

    //Validar as variáveis e encriptar a senha
    $parametros = array(
        ':nome' => $nome,
        ':descricao' => $desc,
        ':preco' => $preco
    );

    $resultDados = new Conexao();
    $resultDados->intervencaoNoBanco('INSERT INTO produtos(nome, descricao, preco) VALUES (:nome,:descricao ,:preco)', $parametros);

    include_once "app/cpanel/paginas/produtos.php";
}

function atualizarUsuario()
{

    //pegando variaveis via POST
    $idUsuario = trim($_POST['id_usuario']);
    $senha = trim($_POST['senha']);

    //validando as variaveis
    $parametros = array(
        ':id_usuario' => $idUsuario,
        ':senha' => password_hash($senha, PASSWORD_DEFAULT)
    );

    //atualizando no banco
    $atualizaUsuario = new Conexao();
    $atualizaUsuario->intervencaoNoBanco('UPDATE usuarios SET senha = :senha WHERE id_usuario = :id_usuario', $parametros);

    include_once "app/cpanel/paginas/usuarios-listar.php";
}

function visualizarUsuario($id)
{
    if ($id) {
        $parametros = array(':id_usuario' => $_GET['id']);

        $resultUsuarioConsulta = new Conexao();
        $dados = $resultUsuarioConsulta->consultarBanco('SELECT * FROM usuarios WHERE id_usuario = :id_usuario', $parametros);

        if (count($dados) > 0) {
            return $dados;
        } else {
            Header('Location: ?pg=usuarios-listar');
        }
    }
}


function visualizarMensagem()
{
    $idUsuario = $_GET['id'];

    $parametros = array(
        ':visualizou' => 1,
        ':id_usuario' => $idUsuario
    );

    //atualizando no banco
    $atualizaUsuario = new Conexao();
    $atualizaUsuario->intervencaoNoBanco('UPDATE contato SET visualizou = :visualizou WHERE id_usuario = :id_usuario', $parametros);
}
