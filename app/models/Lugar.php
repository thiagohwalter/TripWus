<?php
require_once "Conexao.php";

class Lugar
{
    public $id_end;
    public $nome_l;
    public $tel;
    public $email;
    public $hr_at;
    public $hr_at_ate;
    public $idade_min;
    public $acc_animal;
    public $estrelas;
    public $dia_at;
    public $dia_at_ate;
    public $tipo_lugar;








    //Crie um usuario
    public function __construct($nome_l, $tel, $email, $hr_at, $hr_at_ate, $idade_min, $acc_animal, $estrelas, $dia_at, $dia_at_ate, $tipo_lugar )
    {
        $this->id = null;
        $this->nome_l = $nome_l;
        $this->tel = $tel;
        $this->email = $email;
        $this->hr_at = $hr_at;
        $this->hr_at_ate = $hr_at_ate;
        $this->idade_min = $idade_min;
        $this->acc_animal = $acc_animal;
        $this->estrelas = $estrelas;
        $this->dia_at = $dia_at;
        $this->dia_at_ate = $dia_at_ate;
        $this->tipo_lugar = $tipo_lugar;



    }


}