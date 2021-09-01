<?php include_once("topo.php"); ?>

    <?php 
        // Verificar se foi enviado algum ID via GET
        if (isset($_GET["id"]) == false) { // Novo registro
            $idpessoa = 0;
            $titulo = "Cadastro de uma nova pessoa";
            $login = $senha = "";
        }
    ?>

    <br><br><br>

    <div class="container"> 
        <form action="verificar.php" method="POST">
            <div class="card border-primary">
                <br>
                <div class="card-body border-primary">
                    <div class="row text-center">
                        <div class="col" style="padding-left: 404px;"> 
                            <input type="text"  class="form-control"style="width: 300px; " placeholder="login" name="loginn" value="<?php echo($login); ?>">
                        </div>
                    </div>
                    <br>
                    <div class="row text-center">
                        <div class="col" style="padding-left: 404px;">
                            <input type="password" class="form-control"style="width: 300px;" placeholder="senha" name="senhaa" value="<?php echo($senha); ?>">
                        </div>
                    </div>
                    <br>
                    <div class="row text-center">
                        <div class="col">
                            <button type="submit" class="btn btn-lg btn-outline-primary" style="margin-left: 390px" value="Entrar">Entrar</button>
                        </div>
                        <div class="col">
                            <div><a class="btn btn-lg btn-outline-primary" href="cadastrar.php" style="margin-right: 410px">Cadastrar</a></div>
                        </div>   
                    </div>
                    <br>
                </div>
            </div>
        </form>
    </div>

<?php include_once("footer.php"); ?>