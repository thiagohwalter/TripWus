<?php
 session_start();
    require_once "../models/Usuario.php";
    require_once "../models/CrudUsuario.php";

if($_POST){
    $senha_at = $_POST['senha_at'];
    $senha_nv = $_POST['senha_nv'];
    $senha_rt = $_POST['senha_rt'];

//    $senha_vr = new CrudUsuario();
//    $senha_vr->senhaBd($senha_vr);

//    if ($senha_at =! $senha_vr){
//        echo('A senha atual não coencide');
//    }else{
        if ($senha_nv != $senha_rt){
            echo 'As senhas nao conferem';
        }else{

            $edita = new CrudUsuario();
            $edita->editarSenha($senha_nv, $_SESSION['id']);

            header("Location: ../views/index.php");
        }







}

?>

