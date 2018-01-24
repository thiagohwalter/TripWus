<?php
/**
 * Created by PhpStorm.
 * User: Guilherme Cipriano
 * Date: 27/11/2017
 * Time: 20:37
 */

require_once __DIR__."/CrudUsuario.php";
session_start();

class Login
{
    private $login;
    private $conexao;

    public function __construct()
    {
        //Realize a conxão com o banco de dados
        $this->conexao = Conexao::getConexao();
    }
    //Função para realizar o Logout
    public function sair(){
        //Ao chamar a função sair através de um link, encaminho para esta página
        header("Location: ../views/index.html");
        //E destruo a sessão realizada antes
        session_destroy();
    }
    //Função para realizar Login
    public function logar($nome_Usuario, $senha_Usuario)
    {
        //Através do formulário, recebo um nome de usuário e uma senha. Crio um CRUD do Usuario para utilizar os métodos
        $consulta = new CrudUsuario();
        //Verifico se este login existe
        $usuario = $consulta->loginExiste($nome_Usuario, $senha_Usuario);
        //E se o usuário existe, ele me retornará estes dados
        if ($usuario != null) {

            $_SESSION['nome'] = $usuario->nome;
            $_SESSION['id'] = $usuario->id_usuario;
            $_SESSION['is_logado'] = true;

            header("Location: ../views/upagem.html");
            //Caso os dados não existirem, redirecione o usuário para a página inicial
        } else {

            header("Location: login.html?msg=login ou senha incorretos");
        }
    }
    //Função para verificar o login
    public static function verificarLogin()
    {
        //Se a variável não Sessão existe
        if(!isset($_SESSION["is_logado"])){
            //Retorne o uusário para a página de login
            header("Location: login.html");
        }
    }

}