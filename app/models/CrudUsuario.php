<?php
/**
 * Created by PhpStorm.
 * User: Guilherme Cipriano
 * Date: 27/11/2017
 * Time: 20:24
 */

require_once __DIR__."/Conexao.php";
require_once __DIR__."/Usuario.php";

class CrudUsuario
{

    private $conexao;
    private $usuario;

    public function __construct()
    {
        //Faça a Conexão
        $this->conexao = Conexao::getConexao();
    }
    //Faça a Conexão para pegar os dados do usuário através do id
    public function getUsuario($id_usuario)
    {
        //Verificar se o id selecionado existe
        $consulta = $this->conexao->query("SELECT * FROM usuario WHERE id = '$id_usuario' ");
        //Se existe, transforme os dados em array associativo
        $usuario = $consulta->fetchAll(PDO::FETCH_ASSOC);
        //Retorne um Usuário
        return  new Usuario($usuario['$id_usuario'],$usuario['nome'],$usuario['senha']);
    }

    public function loginExiste($login, $senha)
    {
        //Verificar se o Login e a Senha são existentes
        $consulta = $this->conexao->query("SELECT * FROM usuario WHERE nome_usuario = '$login' AND senha = '$senha' ");
        //Se encontrar, me transforme meus dados em um array associativo
        $usuario = $consulta->fetchAll(PDO::FETCH_ASSOC);
        //Se não encontrar o usuário, não me retorne nada
        if (empty($usuario)){
            return null;
        }
        //Retorne um Usuário
        return  new Usuario($usuario['id_usuario'],$usuario['nome'],$usuario['senha']);
    }
}