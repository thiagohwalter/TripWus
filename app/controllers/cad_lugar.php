<?php

    require_once "../models/Conexao.php";
    require_once "../models/Lugar.php";
    require_once "../models/Endereco.php";
    require_once "../models/CrudLugares.php";
    require_once "../models/CrudEndereco.php";

if ($_POST) {
    $tipo_lugar = $_POST['tipo'];
    $cep = $_POST['cep'];
    $pais = $_POST['pais'];
    $uf = $_POST['uf'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $nome_rua = $_POST['rua'];
    $numero = $_POST['numero_rua'];
    $nome_l = $_POST['nome_l'];
    $tel = $_POST['numero'];
    $email = $_POST['email'];
    $hr_at = $_POST['hora_d'];
    $hr_at_ate = $_POST['hora_a'];
    $idade_min = $_POST['idade'];
    $acc_animal = $_POST['animal'];
    $estrelas = $_POST['estrelas'];
    $dia_at = $_POST['De_sem'];
    $dia_at_ate = $_POST['A_sem'];


//    switch ($_POST['tipo']){
//        case 'Hotelaria' ''
//    }
    do {

        $new_endereco = new Endereco($cep, $pais, $uf, $cidade, $bairro, $nome_rua, $numero);
        $cria = new CrudEndereco();
        $cria->inserir($new_endereco);

        // id_lugar = last inserted id




        $new_lugar = new Lugar($nome_l, $tel, $email, $hr_at, $hr_at_ate, $idade_min, $acc_animal, $estrelas, $dia_at, $dia_at_ate, $tipo_lugar);
        $crud = new CrudLugares();
        $crud->NovoLugar($new_lugar);
    }while ($_POST = false);


   header("Location: ../views/index.php");
}
