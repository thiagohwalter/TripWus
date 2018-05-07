<!DOCTYPE html>
<html lang="pt">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TripWus</title>

    <!-- Css do site inteiro-->

    <link rel="shortcut icon" type="img/x-png" href="../../assets/img/logo-top.png">
    <link rel="stylesheet" type="text/css" href="../../assets/vendor/semantic/semantic.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/estilo.css">
    <link rel="stylesheet" type="text/js" href="../../assets/js/script.js">


</head>

<body>


<!--Barra do topo la em cima -->
<?php include ("adm/topo.php")?>

<div id="Principal">

    <img class="imagem" src="../../assets/img/california.jpg">

    <div class="sobrepor">

        <div class="ui stackable grid opaco central">
            <div class="two wide column"></div>
            <div class="twelve wide column">

                <div class="ui segment">
                    <h1 class="ui header">Cadastre-se</h1>
                    <div class="ui divider"></div>
                    <form method="post" class="ui medium form" action="../controllers/cad_usuario.php">

                        <div class="field">

                            <div class="two fields">
                                <div class="field">
                                    <label>Nome</label>
                                    <input type="text" name="nome" placeholder="Nome">
                                </div>
                                <div class="field">
                                    <label>Sobrenome</label>
                                    <input type="text" name="sobrenome" placeholder="Sobrenome">
                                </div>

                            </div>
                        </div>
                        <div class="field">
                            <div class="field">
                                <label>Data de Nascimento</label>
                                <input type="date" name="data" placeholder="Data de Nascimento">
                            </div>

                        </div>

                        <div class="three fields">
                            <div class="eight wide field">
                                <label>E-mail</label>
                                <input type="email" name="email" placeholder="E-mail">
                            </div>
                            <div class="eight wide field">
                                <label>Confirme seu e-mail</label>
                                <input type="email" name="confemail" placeholder="Confirmação">
                            </div>

                        </div>
                        <div class="fields">
                            <div class="eight wide field">
                                <label>Senha</label>
                                <input type="password" name="senha" placeholder="Senha">
                            </div>
                            <div class="eight wide field">
                                <label>Confirme sua senha</label>
                                <input type="password" name="confsenha" placeholder="Confirmação">
                            </div>
                        </div>

                        <button class="ui red submit button">
                            Cancelar
                        </button>

                        <button class="ui green submit button">
                            Cadastrar
                        </button>

                </div>
                <div class="two wide column"></div>
            </div>

        </div>

    </div>

</div>


<?php include ("adm/rodape.php")?>


</body>

</html>
