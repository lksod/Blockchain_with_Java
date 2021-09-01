<?php
    include_once("banco-de-dados.php");

    session_start();

    $login = $_POST['loginn'];
    $senha = $_POST['senhaa'];
    
    $retorno = verifica($login, $senha);

    if($retorno == true){
        $_SESSION["login"] = $login;
        header("location:index.php");
    }else {
        header("location:login-error.php");
    } 

?>