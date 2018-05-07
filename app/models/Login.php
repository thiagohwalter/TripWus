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
        $this->conexao = Conexao::getConexao();
    }

    public function sair(){
        session_destroy();
        header("Location: ../views/index.php");
    }

    public function logar($nome_Usuario, $senha_Usuario)
    {
        $consulta = new CrudUsuario();
        $usuario = $consulta->loginExiste($nome_Usuario, $senha_Usuario);

        if ($usuario != null) {

            $_SESSION['id'] = $usuario->id;
            $_SESSION['nome'] = $usuario->nome;
            $_SESSION['email'] = $usuario->email;
            $_SESSION['senha'] = $usuario->senha;

            header("Location: ../views/index.php");
        } else {

            header("Location: ../views/login.php?msg=login ou senha incorretos");
        }
    }

    public static function verificarLogin()
    {
        //Se a variável não Sessão existe
        if(!isset($_SESSION["is_logado"])){
            //Retorne o uusário para a página de login
            header("Location: login.php");
        }
    }

}