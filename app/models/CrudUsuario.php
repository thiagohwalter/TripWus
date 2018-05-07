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



    public function __construct()
    {
        $this->conexao = Conexao::getConexao();
    }

    public function getUsuario($id_usuario)
    {
        //Verificar se o id selecionado existe
        $consulta = $this->conexao->query("SELECT * FROM user WHERE iduser = '$id_usuario' ");
        $usuario = $consulta->fetchAll(PDO::FETCH_ASSOC);
        return  new Usuario($usuario['$id_usuario'],$usuario['nome'],$usuario['senha']);
    }

    public function salvar(Usuario $usuario)
    {
        //Após receber o usuario novo, realize a conexão e insira no banco estes dados
        $this->conexao->exec("INSERT INTO user (email, dt_nasc, nome, sobrenome, senha, tip_user_idtipuser) 
        VALUES ('$usuario->email', '$usuario->dt_nasc', '$usuario->nome', '$usuario->sobrenome', '$usuario->senha', 1)");
    }
    public function editarSenha($senha_nv, $id)
    {
        //Recebo os dados do usuario a partir de um formulario e atualizo no bd
        $this->conexao->exec("UPDATE user SET senha = '$senha_nv' WHERE iduser=$id");
    }
    public function deletar($id){
        $this->conexao->exec("DELETE FROM user WHERE iduser = $id");
    }
    public function senhaBd($senha_vr){
        $this->conexao->exec("SELECT * FROM user WHERE senha = $senha_vr");
    }

    public function loginExiste($login, $senha)
    {
        //Verificar se o Login e a Senha são existentes
        $consulta = $this->conexao->query("SELECT * FROM user WHERE email = '$login' AND senha = '$senha' ");
        $usuario = $consulta->fetchAll();
        if (empty($usuario)){
            return null;
        }
        $bla = new Usuario($usuario[0]['email'],$usuario[0]['dt_nasc'],$usuario[0]['nome'], $usuario[0]['sobrenome'], $usuario[0]['senha']);
        $bla->id = $usuario[0]['iduser'];
        return $bla;
    }
}