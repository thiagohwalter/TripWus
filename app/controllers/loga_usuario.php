<?php
require_once __DIR__."/../models/Login.php";

//Para verificar o usuário, crie um Login
$login = new Login();

//Pego os dados do usuário por meio do formulário
$usuario = $_POST['nome'];
$senha   = $_POST['senha'];

//Se a minha ação for sair
if ($_GET['acao'] == "sair"){
//Faço o Logout
    $login->sair();
}
//Se minha ação é acessar
if($_POST['login_form'] == "acessar"){
//Chame a função logar
    $login->logar($usuario, $senha);
}