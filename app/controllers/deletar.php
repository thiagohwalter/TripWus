<?php

session_start();
require_once "../models/CrudUsuario.php";



    $id = $_SESSION['id'];

    $delete = new CrudUsuario();
    $delete->deletar($id);

    header("Location: ../views/index.php");

session_destroy();