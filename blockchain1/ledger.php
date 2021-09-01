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

<?php

    include_once("banco-de-dados.php");

    $blocos = retornaBlocos();

    // Verificar se retornou algum bloco
    if ($blocos != null){

    // Coloca o cabeçalho antes dos blocos
        echo('<br>');
        echo( '<div class= "container" style="font-family: arial;">
               
                <div class="row">
                    <div class="col text-right">
                        <h1 style="text-align: right;"> Transações </h1>
                    </div>
                    <div class="col" style="padding-left: 350px;">
                        <div> <a class="btn btn-lg btn-outline-primary" href="index.php">Menu Principal</a></div>
                    </div>
                    <div class="col">
                        <div> <a class="btn btn-lg btn-outline-primary" href="sair.php">Finalizar sessão</a>
                    </div>
                </div>    
        </div>');
        echo('<br>');

        // loop que vai apresentar todos o blocos contidos na blockchain
        foreach ($blocos as $ledger) {

            // atribui os valores na devidas variáveis
            $de = $ledger["de"];
            $para = $ledger["para"];
            $moedas = $ledger["transacao"];
            $hash = $ledger["hash"];
            $prevHash = $ledger["prevHash"];
            
            echo(
                '<div class="container" style="text-align: center">
                    <div class="row">
                        <div class="col">
                            <div class="card border-primary">
                                <div class="card-body">
                                    <br>
                                    <h3>Remetente: '.$de.' </h3>  
                                    <hr>
                                    <h3> Destinatário: '.$para.'</h3>
                                    <hr>
                                    <h3> Transferência: '.$moedas.' Moedas</h3>
                                    <hr> 
                                    <h3> Hash: ' .$hash. '</h3> 
                                    <hr>
                                    <h3> Hash prev: ' .$prevHash. '</h3> 
                                    <br>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>');
            echo('<br>');
            
        }
    }else{
        // Se não tiver nenhum bloco cadastrado exibe a mensagem abaixo
        echo("<tr><td>Nenhum registro encontrado!</td></tr>");
        echo("<div> <a class='btn btn-lg btn-outline-primary' href='index.php'>Voltar</a></div>");
    }

    exit;

?>

<?php include_once("footer.php"); ?>