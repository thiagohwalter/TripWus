<?php
require_once __DIR__."/../models/Login.php";

//Para verificar o usuário, crie um Login
$login = new Login();

//Pego os dados do usuário por meio do formulário
$usuario = $_POST['email'];
$senha   = $_POST['senha'];


    $login->logar($usuario, $senha);

