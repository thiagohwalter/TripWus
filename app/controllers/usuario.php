<?php

    switch ($_POST){

        case 'loga':
            require_once __DIR__."/../models/Login.php";

            $login = new Login();

            $usuario = $_POST['email'];
            $senha   = $_POST['senha'];


            $login->logar($usuario, $senha);


    }