<?php
    session_start();
    // Verifica se existe os dados da sessão de login
    if(!isset($_SESSION["login"])) {
        // Usuário não logado! Redireciona para a página de login
        header("location:logar.php");
        exit;
    }
?>

<?php include_once("topo.php"); ?>

    <?php include_once("banco-de-dados.php"); 
    $var = $_SESSION["login"];
    ?>

    
    <br><br><br>
    <div class="container"> 
    <div class="row text-center">
        <br>
        <div class="col" style="padding-left: 350px;">
            <div> <a class="btn btn-lg btn-outline-primary" href="sair.php">Finalizar sessão</a></div>
        </div>

        <div class="col" style="padding-right: 350px;">
            <div> <a class="btn btn-lg btn-outline-primary" href="index.php">Menu principal</a></div>
        </div>
    </div>
    <br>
    <br>

        <!-- Formulário que pega os dados da transferência inseridos pelo usuário -->
        <form action="blockchain.php" method="POST">
            <div class="row">
                <div class="col">
                    <div class="card border-primary">
                        <br>
                        <div class="card-body ">
                            <h5 class="card-title">Dados de Transferência</h5>
                            <h6>Remetente:</h6><p><?php echo("$var"); ?></p>
                            <div class="input-group input-group-lg">
                                <span class="input-group-text" id="inputGroup-sizing-lg">Destinatário:</span>
                                <input type="text" class="form-control" name="y" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Nome do destinatário">
                            </div>  
                            <br>
                            <div class="input-group input-group-lg">
                                <span class="input-group-text" id="inputGroup-sizing-lg">Moedas:</span>
                                <input type="number" class="form-control" name="moedas" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Número de Moedas" style="width: 50%">
                                
                                <div style="padding: 0 150px">
                                <button type="submit" class="btn btn-lg btn-outline-primary">Efetuar</button>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </form>
    </div>
    
    <br>

</body>
</html>