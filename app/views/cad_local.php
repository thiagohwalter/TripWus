
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

        <img class="" src="../../assets/img/cidade.jpg">

        <div class="sobrepor alinharCadL">

            <div class="ui stackable grid opaco">
                <div class="one wide column"></div>
                <div class="fourteen wide column">

                    <div class="ui segment margemCad">
                        <form action="../controllers/cad_lugar.php" method="post" class="ui form">
                            <div class="textoalin">
                                <h1>
                                    Cadastro de Local
                                </h1>
                                <div class="ui divider"></div>
                                <div class="ui segment">
                                    <div class="two fields">
                                        <div class="field">
                                            <h3>Tipo de Local</h3>
                                            <div class="ui divider" ></div>
                                            <div style="margin-left: 25%; margin-top: 5%" class="inline fields">
                                                <div class="field">
                                                    <div class="ui radio checkbox">
                                                        <input type="radio" name="tipo" value="1">
                                                        <label>Hotelaria</label>
                                                    </div>
                                                </div>
                                                <div class="field">
                                                    <div class="ui radio checkbox">
                                                        <input type="radio" name="tipo" value="2">
                                                        <label>Gastronomia</label>
                                                    </div>
                                                </div>
                                                <div class="field">
                                                    <div class="ui radio checkbox">
                                                        <input type="radio" name="tipo" value="3">
                                                        <label>Pontos Turisticos</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="field">
                                                <h3>Endereço</h3>
                                                <div class="ui divider"></div>
                                            <div style="margin-left: 3%" class="inline fields">
                                                <div class="field">
                                                    <label>Cep</label>
                                                    <input placeholder="Cep" name="cep" type="number">
                                                </div>
                                                <div class="field">
                                                    <label>País</label>
                                                    <input placeholder="País" name="pais" type="text">
                                                </div>
                                                <div class="field">
                                                    <label>Uf</label>
                                                    <input placeholder="Uf" name="uf" type="text">
                                                </div>
                                            </div>
                                            <div style="margin-left: 30%; margin-right: 30% " class="field">
                                                <div class="field">
                                                    <label>Cidade</label>
                                                    <input placeholder="Cidade" name="cidade" type="text">
                                                </div>
                                            </div>
                                            <div style="margin-left: 3%" class="inline fields">
                                                <div class="field">
                                                    <label>Bairro</label>
                                                    <input placeholder="Bairro" name="bairro" type="text">
                                                </div>
                                                <div class="field">
                                                    <label>Rua</label>
                                                    <input placeholder="Rua" name="rua" type="text">
                                                </div>
                                                <div class="field">
                                                    <label>Número</label>
                                                    <input placeholder="Número" name="numero_rua" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ui tall stacked segment">
                                    <div>
                                        <div>
                                            <h3>Informações sobre o local</h3>
                                            <div class="ui divider"></div>
                                            <div class="two fields">
                                                <div class="field">
                                                    <label>Nome do Lugar</label>
                                                    <input type="text" name="nome_l" placeholder="Nome do Lugar">
                                                </div>
                                                <div class="field">
                                                    <label>Telefone</label>
                                                    <input type="text" name="numero" placeholder="Numero">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label>Email</label>
                                                <input type="email" name="email" placeholder="Email">
                                            </div>
                                            <div class="two fields">
                                                <label>Horário de Atendimento</label>
                                                <div class="field">
                                                    Das:
                                                    <input type="time" name="hora_d" placeholder="Das">
                                                </div>
                                                <div class="field">
                                                    Até:
                                                    <input type="time" name="hora_a" placeholder="Até">
                                                </div>
                                            </div>
                                            <div class="three fields">
                                                <div class="field">
                                                    <label>Idade Mínima</label>

                                                    <input type="number" name="idade" placeholder="Idade Minima">
                                                </div>
                                                <div class="field">
                                                    <label>Aceita Animais</label>

                                                    <select name="animal">
                                                        <option value=""></option>
                                                        <option value="S">Sim</option>
                                                        <option value="N">Não</option>
                                                    </select>
                                                </div>
                                                <div class="field">
                                                    <label>Estrelas</label>

                                                    <input type="number" name="estrelas" placeholder="">
                                                </div>
                                            </div>
                                            <div class="two fields">
                                                <label>Dias de Atendimento</label>
                                                <div class="field">
                                                    <label>De:</label>
                                                    <select name="De_sem">
                                                        <option value=""></option>
                                                        <option value="Seg">Segunda</option>
                                                        <option value="Ter">Terça</option>
                                                        <option value="Qua">Quarta</option>
                                                        <option value="Quin">Quinta</option>
                                                        <option value="Sex">Sexta</option>
                                                        <option value="Sab">Sabado</option>
                                                        <option value="Dom">Domingo</option>
                                                    </select>
                                                </div>
                                                <div class="field">
                                                    <label>À:</label>
                                                    <select name="A_sem">
                                                        <option value=""></option>
                                                        <option value="Seg">Segunda</option>
                                                        <option value="Ter">Terça</option>
                                                        <option value="Qua">Quarta</option>
                                                        <option value="Quin">Quinta</option>
                                                        <option value="Sex">Sexta</option>
                                                        <option value="Sab">Sabado</option>
                                                        <option value="Dom">Domingo</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <button class="ui button" type="submit">Submit</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>
                <div class="one wide column"></div>


            </div>

        </div>


    </div>

</section>

<?php include ("adm/rodape.php")?>

</body>
</html>