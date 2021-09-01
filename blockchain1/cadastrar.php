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
        <form action="verificar-cadastrar.php" method="POST">
        
            <div class="card border-primary">
               <br>
                <div class="card-body">

                    <div class="row text-center">
                        <div class="col" style="padding-left: 404px;"> 
                        <input type="text" style="width: 300px;"  class="form-control" name="loginn" value="<?php echo($login); ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg"  placeholder="Digite um login">
                        </div>
                    </div>
                    <br>
                    <div class="row text-center">
                        <div class="col" style="padding-left: 404px;">
                        <input type="password"style="width: 300px;"   class="form-control" name="senhaa" value="<?php echo($senha); ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Digite uma senha">
                        </div>
                    </div>
                    <br>
                    <div class="row text-center">
                        <div class="col">
                            <button type="submit" class="btn btn-lg btn-outline-primary">Cadastrar</button>
                        </div>  
                    </div>
                </div>
                <br>
            </div>
        </form>
    </div>
</body>
</html>