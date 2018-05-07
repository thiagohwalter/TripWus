<?php

require_once "Conexao.php";

class Usuario
{
    public $id;
    public $email;
    public $dt_nasc;
    public $nome;
    public $sobrenome;
    public $senha;



    //Crie um usuario
    public function __construct($email, $dt_nasc, $nome, $sobrenome, $senha)
    {
        $this->id = null;
        $this->email = $email;
        $this->dt_nasc = $dt_nasc;
        $this->nome = $nome;
        $this->sobrenome =$sobrenome;
        $this->senha = $senha;
    }

    public function getDisponibilidade()
    {

        if ($this->email =! $this->email) {
            return "Nome de  disponivel";
        } else {
            return "Indisponível";

        }


    }
}