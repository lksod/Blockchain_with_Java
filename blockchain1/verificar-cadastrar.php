<?php

    include_once("banco-de-dados.php");

    $login = $_POST['loginn'];
    $senha = $_POST['senhaa'];

    $retorno = cadastrar($login, $senha);

    if($retorno==true) {
        header("location:logar.php");
    } else {
        header("location:cadastrar-error.php");
    }
    

?>