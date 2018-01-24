<?php

require_once "Conexao.php";

class Usuario
{

    public $codigo;
    public $nome;
    public $sobrenome;
    public $usuario;
    public $tipo_usuario;

    //Crie um Produto com estes dados
    public function __construct($codigo = null, $nome, $preco, $categoria, $quantidade_estoque)
    {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->sobrenome = $preco;
        $this->usuario = $categoria;
        $this->tipo_usuario = $quantidade_estoque;
    }

    //Função para verificar a quantidade em estoque do Produto em questão/
    public function getDisponibilidade()
    {

        //Se a quantidade em estoque for maior que 0
        if ($this->usuario =! $this->usuario) {
            //Me retorne Disponível
            return "Nome de usuario disponivel";
            //Caso contrário, me retorne indisponível
        } else {
            return "Indisponível";

        }


    }
}