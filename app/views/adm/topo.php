<nav id="Topo">
    <div class="espaco">
        <div class="ui secondary pointing big menu">

            <div id="Logo" class="ui-text topo">

                <a href="index.php">
                    <img src="../../assets/img/logo.png">
                </a>


            </div>

            <div class="right menu">
                <div class="ui pointing dropdown corb link item">
                    <i class="ui right large user icon"></i>
                    Nome
                    <i class="angle down icon"></i>
                    <div class="menu">
                        <a href="#" class="item">
                            <i class="user icon"></i>
                            Meu Perfil
                        </a>
                        <a href="#" class="item">
                            <i class="sign out icon"></i>
                            Sair
                        </a>
                    </div>
                </div>

                <?php
                session_start();
                if(isset($_SESSION['nome'])) {

                    echo ('
                    
                    
                    <a class="ui item" href="perfil.php"><p class=\'corb\'>Perfil</p></a>
                    
                    <a class="ui item" href="cad_local.php"><p class=\'corb\'>Cadastrar Local</p></a>
                    
                 
                    ');


                    echo("<a class=\"ui item\" href=\"../controllers/sair_usuario.php\"><p style=\"color: firebrick; font-size: 110%; margin-right: 10px\" > Sair</p></a>");
                }
                else{
                    echo('
                <a class="ui item" href="cadastro.php">
                    <p class="corb">Cadastrar</p>
                </a>
                <a class="ui item" href="login.php">
                    <p class="corb">Entrar</p>
                </a>
                ');
                }

                ?>
            </div>
        </div>
    </div>
</nav>