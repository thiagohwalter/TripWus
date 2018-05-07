<?php


require_once "../models/Usuario.php";
require_once "../models/CrudUsuario.php";



if ($_POST) {

    $email = $_POST['email'];
    $dt_nasc = $_POST['data'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $senha = $_POST['senha'];

    $new_usuario = new Usuario($email, $dt_nasc, $nome, $sobrenome, $senha);
    $crud = new CrudUsuario();
    $crud->salvar($new_usuario);

    header("Location: ../views/index.php");
}


