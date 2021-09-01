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
<br><br><br>

<div class="container">
    <div class="card border-primary">
        <br>
        <div class="card-body text-center">
            <div class="row">
                <div class="col">
                    <div> <a class="btn btn-lg btn-outline-primary" href="transacao.php">Gerar Transação</a></div>
                </div>
                <div class="col">
                    <div> <a class="btn btn-lg btn-outline-primary" href="ledger.php">Ledger</a></div>
                </div>
                <div class="col">
                    <div> <a class="btn btn-lg btn-outline-primary" href="recebidos.php">Recebidos</a></div>
                </div>
                <div class="col">
                    <div> <a class="btn btn-lg btn-outline-primary" href="sair.php">Sair</a></div>
                </div>
            
            <br>
            </div>
        </div>
        <br>
    </div>
</div>

<?php include_once("footer.php"); ?>