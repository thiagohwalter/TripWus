<?php

require_once "Conexao.php";

class CrudLugares
{
    private $conexao;


    public function __construct()
    {
        $this->conexao = Conexao::getConexao();
    }

    public function NovoLugar(Lugar $lugar)
    {
        //Após receber o usuario novo, realize a conexão e insira no banco estes dados
        $this->conexao->exec("INSERT INTO lugar (nome, telefone, email, hr_at_das, hr_at_ate, idade_minima,
        aceita_animais, estrelas, dia_at_de, dia_at_a, tipo_lugar_idtipo_lugar, endereco_idendereco) 
        VALUES ('$lugar->nome_l', '$lugar->tel', '$lugar->email', '$lugar->hr_at', '$lugar->hr_at_ate', '$lugar->idade_min', '$lugar->acc_animal', '$lugar->estrelas', '$lugar->dia_at','$lugar->dia_at_ate', '$lugar->tipo_lugar' , 40000 )");
    }


}