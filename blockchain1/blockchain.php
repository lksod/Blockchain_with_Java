<?php include_once("topo.php"); ?>

<?php
    // Confere se a sessão foi iniciada
    session_start();

    // inclui a página com os scripts do banco de dados
    include_once("banco-de-dados.php");

    // Recebe os dados passados pelo usuário 
    $de = $_SESSION["login"];
    $para = $_POST['y'];
    $moedas = $_POST['moedas'];
    $previousHash = ultimobloco();

    // Confirma se os inputs possuem valores válidos 
    if($de == '' || $para == '' || $moedas <= 0 ){
        header("location:transacao.php");
        exit;
    } else {
        $aleatorio = rand(1,1000);
        if($aleatorio > 500){
            
            // Vetor que recebe todos os dados passados
            $vetor = array($de, $para, $moedas, $previousHash);

            //transforma os dados do vetor em uma hash
            $hash = hash("sha256", json_encode($vetor));

            // chama a função que adiciona o bloco
            adicionaBloco($de, $para, $moedas, $hash, $previousHash);

            
            echo("<script type='text/javascript'>
                alert('O consenso aprovou sua transação com $aleatorio votos de um total de 1000!')
                window.location.replace('ledger.php')
            </script>");

            exit;
        } else {
            echo("<script type='text/javascript'>
                window.alert('O consenso não aprovou a sua transação com $aleatorio votos de um total de 1000!')
                window.location.replace('transacao.php');
            </script>");
            exit;
        }
        
    }

?>

<?php include_once("footer.php"); ?>