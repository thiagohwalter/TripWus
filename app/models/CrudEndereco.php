<?php
/**
 * Created by PhpStorm.
 * User: ThiagoWalter
 * Date: 29/04/2018
 * Time: 19:51
 */

class CrudEndereco
{
    private $conexao;


    public function __construct()
    {
        $this->conexao = Conexao::getConexao();
    }

    public function inserir(Endereco $endereco)
    {
        //Após receber o usuario novo, realize a conexão e insira no banco estes dados
        $this->conexao->exec("INSERT INTO endereco (idendereco, cep, pais, uf, cidade, bairro, nome_rua, numero) 
        VALUES (
        '$endereco->id_end', '$endereco->cep', '$endereco->pais', '$endereco->uf', '$endereco->cidade', '$endereco->bairro','$endereco->nome_rua', '$endereco->numero')");
    }

}