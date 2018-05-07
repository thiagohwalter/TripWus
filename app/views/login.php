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

    <img class="imagem" src="../../assets/img/rio.jpg">

    <div class="sobrepor">

        <div class="ui stackable grid opaco">
            <div class="four wide column"></div>
            <div class="eight wide column">

                <div class="ui segment">
                    <h1 class="ui header">Login</h1>
                    <div class="ui divider"></div>

                    <div class="ui grid">
                        <div class="column">
                            <form name="login" method="post" action="../controllers/loga_usuario.php">
                                <div class="ui large form alinhamentol">
                                    <div class="field">
                                        <label>Email</label>
                                        <div class="ui left icon input">
                                            <input name="email" type="text" placeholder="Email">
                                            <i class="user icon"></i>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label>Senha</label>
                                        <div class="ui left icon input">
                                            <input name="senha" type="password" placeholder="Senha">
                                            <i class="lock icon"></i>
                                        </div>
                                    </div>
                                    <br>
                                    <div>
                                        <button class="ui red submit button">
                                            Cancelar
                                        </button>

                                        <button class="ui green submit button">
                                            Logar
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>


                </div>
            </div>
            <div class="four wide column"></div>


        </div>

    </div>


</div>


<?php include ("adm/rodape.php")?>


</body>

</html>