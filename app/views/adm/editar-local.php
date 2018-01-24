<?php

require_once "../../../app/models/CrudProdutos.php";
$crud = new CrudProdutos();

$listaProdutos = $crud->getProdutos();

$id  = $_GET['id'];

$produto = $crud->getProduto($id);
?>



<!DOCTYPE html>
<html lang="pt">

<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Loja</title>


    <link rel="stylesheet" type="text/css" href="../../../assets/semantic/semantic.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/estilo.css">
    <script type="text/javascript" src="../../../jquery.js"></script>
    <script type="text/javascript" src="../../../script.js"></script>



</head>

<body>


    <nav id="menu">
        <div class="ui stackable grid">
            <div class="ui three wide column"></div>
                <div class="ui ten wide column">
                    <div class="ui secondary menu">

                            <img class="logo" src="../../../assets/img/logo.png">

                        <div class="right menu">
                            <a href="index.php" class="ui item">
                                <p class="texto-menu">Início</p>
                            </a>
                            <a href="adm.php" class="ui item">
                                <p class="texto-menu">Área do Admin</p>
                            </a>

                            <?php
                            if(isset($_SESSION['esta_logado'])){
                                if(isset($_SESSION['esta_logado'])){
                                    ?>
                                    <a href="../../controllers/loga_usuario.php?acao=sair" class = "ui item">
                                        <p class="texto-menu">Sair</p>
                                    </a>
                                <?php } ?>
                            <?php } else { ?>
                                <a href="login.php" class="ui item">
                                    <p class="texto-menu">Login</p>
                                </a>
                            <?php } ?>
                            <div class="ui search pesq">
                                <div class="ui icon input">
                                    <input class="prompt" type="text" placeholder="Pesquise aqui">
                                    <i class="search icon"></i>
                                </div>
                                <div class="results"></div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="ui three wide column"></div>
        </div>
    </nav>



    <section class="formu">

        <div class="ui stackable grid">
            <div class="ui four wide column"></div>
            <div class="ui eight wide column">
                <div class="ui segment">
                    <h2 class="alinhamento">Editar Produtos</h2>
                    <div class="ui divider"></div>

                    <form class="ui form" action="../../controllers/cad_usuario.php?acao=editar" method="post">
                        <div class="form-group">
                            <label for="produto">
                                <p class="alinhamento">Produto</p>
                            </label>
                            <input name="nome" type="text" class="form-control" id="nome" aria-describedby="nome produto" placeholder="" value="<?= $produto->nome; ?>">
                            <?php ?>
                        </div>

                        <div class="form-group">
                            <label for="preco">
                                <p class="alinhamento">Preço</p>
                            </label>
                            <input name="preco" type="number" step="0.01" class="form-control" id="preco" placeholder="" value="<?= $produto->sobrenome;?>">

                        </div>

                        <div class="form-group">
                            <label for="quantidade">
                                <p class="alinhamento">Quantidade</p>
                            </label>
                            <input name="quantidade_estoque" type="number" class="form-control" id="quantidade_estoque" placeholder="" value="<?= $produto->tipo_usuario; ?>">

                        </div>

                        <div class="form-group">
                            <label for="Categoria">
                                <p class="alinhamento">Categoria</p>
                            </label>
                            <select name="categoria" class="ui fluid dropdown" id="categoria">
                                <option value="Bola">Bola</option>
                                <option value="Rede">Rede</option>
                                <option value="Protecao">Proteção</option>
                                <option value="Roupa">Roupa</option>
                                <option value="Equipamento">Equipamento</option>
                            </select>
                            <br>


                            <div class="form-group">
                                <input name="id" type="hidden" value="<?=  $id ?>">

                            </div>
                            <button type="submit" class="ui green button">Editar</button>

                    </form>

                </div>
            </div>
            <div class="ui four wide column"></div>
        </div>

    </section>



    <section id="rodape">
        <div class="ui stackable grid">
            <div class="ui three wide column"></div>
            <div class="ui ten wide column">
                <p>Volte sempre!</p>
            </div>
            <div class="ui three wide column"></div>
        </div>
    </section>



</body>


</html>