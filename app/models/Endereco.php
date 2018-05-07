<?php
require_once "Conexao.php";

class Endereco
{
    public $id_end;
    public $cep;
    public $pais;
    public $uf;
    public $cidade;
    public $bairro;
    public $nome_rua;
    public $numero;


    public function __construct($cep, $pais, $uf, $cidade, $bairro, $nome_rua, $numero){
        $this->id_end = null;
        $this->cep = $cep;
        $this->pais = $pais;
        $this->uf = $uf;
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->nome_rua = $nome_rua;
        $this->numero = $numero;
    }

}