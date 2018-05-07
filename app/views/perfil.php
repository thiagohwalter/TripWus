
<html lang="pt-br">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TripWus</title>

        <!-- Links do site inteiro-->

        <link rel="shortcut icon" type="img/x-png" href="../../assets/img/logo-top.png">
        <link rel="stylesheet" type="text/css" href="../../assets/vendor/semantic/semantic.css">
        <link rel="stylesheet" type="text/css" href="../../assets/css/estilo.css">
        <link rel="stylesheet" type="text/js" href="../../assets/vendor/jquery/jquery.js">
        <link rel="stylesheet" type="text/js" href="../../assets/vendor/semantic/semantic.js">
        <link rel="stylesheet" type="text/js" href="../../assets/js/script.js">

    </head>

<body>

<?php include ("adm/topo.php") ?>

<section>

    <div id="Principal">

        <img class="imagem" src="../../assets/img/user.jpg">

        <div class="sobrepor alinharPerfil">

            <div class="ui stackable grid opaco">
                <div class="four wide column"></div>
                <div class="eight wide column">

                            <div class="ui segment" >
                                <div class="textoalin">
                                    <h2>
                                        <?php
                                        echo 'Bem vindo ' . ($_SESSION['nome']);
                                        ?>
                                    </h2>
                                    <div class="ui divider"></div>
                                    <div class="ui segment">
                                        <div class="ui header">
                                            <p>
                                                Mudar a senha
                                            </p>
                                            <div class="ui blue segment">
                                                <div class="ui stackable grid">
                                                    <div class="four wide column"></div>
                                                    <div class="eight wide column">
                                                        <form action="../controllers/muda_senha.php" method="post" class="ui form">
                                                            <div class="field">
                                                                <label>Senha atual</label>
                                                                <input type="password" name="senha_at" placeholder="Senha atual">
                                                            </div>
                                                            <div class="field">
                                                                <label>Senha nova</label>
                                                                <input type="password" name="senha_nv" placeholder="Senha nova">
                                                            </div>
                                                            <div class="field">
                                                                <label>Repita a senha</label>
                                                                <input type="password" name="senha_rt" placeholder="Repita a senha">
                                                            </div>
                                                            <button class="ui green button" type="submit">Enviar</button>
                                                        </form>
                                                    </div>
                                                    <div class="four wide column"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <form method="post" action="../controllers/deletar.php">
                                            <div class="ui segment">
                                                <h3>Deletar Usuário</h3>
                                                <div>
                                                    <button class="ui red button">Deletar</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                        <div class="ui four wide column"></div>
                    </div>

                </div>

</section>







<?php include ("adm/rodape.php")?>

</body>
</html>