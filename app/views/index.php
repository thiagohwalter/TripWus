<!DOCTYPE html>
<html lang="pt">

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
    <link rel="stylesheet" type="text/js" href="../../assets/vendor/semantic/components/dropdown.js">
    <link rel="stylesheet" type="text/js" href="../../assets/js/script.js">


</head>

<body>


<!--Barra do topo la em cima -->

<?php include ("adm/topo.php")?>

<!-- Avião -->

<header id="Avi">
    <div class="ui stackable grid">
        <div id="texto" class="ui sizer vertical segment superior">

            <img class="imagem" src="../../assets/img/avi.jpg">
            <section class="sobrepor">
                <div class="ui header titulo">
                    <h1 class="textosup">O melhor para sua viagem</h1>

                    <div class="ui divider"></div>

                    <p class="textoinf">Milhares de destinos e avaliações em um só lugar</p>

                    <?php
                    if(isset($_SESSION['nome'])) {
                        echo ('');
                    }
                    else{
                        echo('<button class="big ui button">
                        <a href="cadastro.php">
                            <p class="corp textob">Junte-se a nós</p>
                        </a>
                    </button>');
                    }

                    ?>
                </div>
            </section>
        </div>
    </div>
</header>


<!-- Menu -->

<section id="Menu">

    <div class="ui menu">

        <div class="ui stackable equal width sem_margem grid">
            <div class="column emcima">
                <img src="../../assets/img/1.jpg" class="ui image embaixo">

                <div class="item sobreposto">
                    <a href="america.php">
                        <p>AMÉRICA</p>
                    </a>
                </div>
            </div>
            <div class="column emcima">
                <img src="../../assets/img/2.jpg" class="ui image">

                <div class="item sobreposto">
                    <a href="europa.php">
                        <p>EUROPA</p>
                    </a>
                </div>

            </div>
            <div class="column emcima">
                <img src="../../assets/img/3.jpg" class="ui image">

                <div class="item sobreposto">
                    <a href="asia.php">
                        <p>ÁSIA</p>
                    </a>
                </div>

            </div>

            <div class="equal width row">
                <div class="column emcima">
                    <img src="../../assets/img/4.jpg" class="ui image">

                    <div class="item sobreposto">
                        <a href="africa.php">
                            <p>ÁFRICA</p>
                        </a>
                    </div>

                </div>
                <div class="column emcima">
                    <img src="../../assets/img/5.jpg" class="ui image">

                    <div class="item sobreposto">
                        <a href="oceania.php">
                            <p>OCEANIA</p>
                        </a>
                    </div>

                </div>
                <div class="column emcima">
                    <img src="../../assets/img/6.jpg" class="ui image">

                    <div class="item sobreposto">
                        <a href="antartida.php">
                            <p>ANTÁRTIDA</p>
                        </a>
                    </div>

                </div>
            </div>
        </div>


    </div>

</section>

<!-- barra 10 melhores -->

<aside id="Barra">
    <div class="ui stackable grid">
        <div class="ui container fluid">
            <div class="ui header">
                <p>Veja as melhores avaliações da semana</p>
                <button class="medium ui button">
                    <a href="top.php">Veja aqui</a>
                </button>
            </div>
        </div>
    </div>
</aside>


<!-- Principal, o que vai ser mostrado após o menu -->

<section id="inicial">
    <div class="caixa">
        <div class="ui stackable grid">
            <div class="ui column"></div>
            <div class="ui fourteen wide column">
                <div class="ui three columns grid stackable">
                    <div class="ui column">
                        <section class="ui segment yellow">
                            <h3 class="header textoalin">Gastronomia</h3>
                            <div class="ui divider"></div>
                            <div class="alinhamentoC">

                                <div class="ui card">
                                    <div class="content">
                                        <div class="right floated meta">14h</div>
                                        <img class="ui avatar image" src="../../assets/img/julia.jpg"> Julia Carter
                                    </div>
                                    <div class="ui divider"></div>
                                    <p class="textocard">Fogo de Chão</p>
                                    <div class="ui divider"></div>
                                    <div class="image">

                                        <img src="../../assets/img/chu.jpg">

                                    </div>
                                    <div class="content">
                                                        <span class="right floated">
                                                          <i class="heart outline like icon"></i>
                                                          17 likes
                                                        </span>
                                        <i class="comment icon"></i>
                                        3 comentários
                                    </div>
                                    <div class="extra content">
                                        <div class="ui large transparent left icon input">
                                            <i class="heart outline icon"></i>
                                            <input type="text" placeholder="Comentário">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </section>
                    </div>
                    <div class="ui column">
                        <section class="ui segment blue">
                            <h3 class="header textoalin">Hotelaria</h3>
                            <div class="ui divider"></div>
                            <div class="alinhamentoC">

                                <div class="ui card">
                                    <div class="content">
                                        <div class="right floated meta">4h</div>
                                        <img class="ui avatar image" src="../../assets/img/ruan.jpg"> Ruan
                                    </div>
                                    <div class="ui divider"></div>
                                    <p class="textocard">Copacabana Palace</p>
                                    <div class="ui divider"></div>
                                    <div class="image">
                                        <img src="../../assets/img/co.jpg">
                                    </div>
                                    <div class="content">
                                                        <span class="right floated">
                                                          <i class="heart outline like icon"></i>
                                                          107 likes
                                                        </span>
                                        <i class="comment icon"></i>
                                        40 comentários
                                    </div>
                                    <div class="extra content">
                                        <div class="ui large transparent left icon input">
                                            <i class="heart outline icon"></i>
                                            <input type="text" placeholder="Comentário">
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </section>
                    </div>
                    <div class="ui column">
                        <section class="ui segment orange">
                            <h3 class="header textoalin">Pontos turísticos</h3>
                            <div class="ui divider"></div>
                            <div class="alinhamentoC">

                                <div class="ui card">
                                    <div class="content">
                                        <div class="right floated meta">1 Dia</div>
                                        <img class="ui avatar image" src="../../assets/img/mery.jpg"> Mery
                                    </div>
                                    <div class="ui divider"></div>
                                    <p class="textocard">Disney</p>
                                    <div class="ui divider"></div>
                                    <div class="image">
                                        <img src="../../assets/img/di.jpg">
                                    </div>
                                    <div class="content">
                                                        <span class="right floated">
                                                          <i class="heart outline like icon"></i>
                                                          7 likes
                                                        </span>
                                        <i class="comment icon"></i>
                                        43 comentários
                                    </div>
                                    <div class="extra content">
                                        <div class="ui large transparent left icon input">
                                            <i class="heart outline icon"></i>
                                            <input type="text" placeholder="Comentário">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<?php include ("adm/rodape.php")?>


</body>

</html>



