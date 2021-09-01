<?php

include_once("conecta.php");

function verifica($login, $senha){

    $teste_login = "SELECT login, senha FROM senhas WHERE login = '$login' && senha = '$senha'";
    $conexao = abreConexao();
    $resultado = $conexao->query($teste_login);
    $conexao->close();
    
    // Verificar se a consulta SQL retornou algum registro
    if (mysqli_num_rows($resultado) == 1) {
        return true;
    }else{
        return false;
    }
}

function cadastrar($login, $senha){

    $teste_login = "SELECT login FROM senhas WHERE login = '$login'";
    $conexao = abreConexao();
    $resultado = $conexao->query($teste_login);
    $conexao->close();

    if (mysqli_num_rows($resultado) == 0) {
        $sql = "INSERT INTO senhas(login, senha) VALUES('$login', '$senha')";
        $conexao = abreConexao();
        $conexao->query($sql); // Executar o comando SQL
        $sql1 = "INSERT INT contas (idLogin) VALUES('$login')";
        $conexao->query($sql1);
        $sql2 = "INSERT INTO contas (moedas) VALUES ('50')";
        $conexao->query($sql2);
        $conexao->close();

        return true;
    }else{
        return false;
    }

}

// function pesquisaLogin($login){

//     $teste_login = "SELECT login FROM senhas WHERE login = '$login'";
//     $moedas = "SELECT moedas FROM contas WHERE login = '$teste_login'";

//     $conexao = abreConexao();
//     $resultado = $conexao->query($teste_login);
//     $resultado = $conexao->query($moedas);

//     $conexao->close();

//     // Verificar se a consulta SQL retornou algum registro

//     return $moedas;

// }

function adicionaBloco($de, $para, $moedas, $hash, $previousHash){

    $sql = "INSERT INTO blockchain(de, para, transacao, hash, prevhash) VALUES('$de', '$para', '$moedas', '$hash', '$previousHash')";
    $conexao = abreConexao();
    $resultado = $conexao->query($sql);
    $conexao->close();
    
}

function ultimobloco() {

     $result = "SELECT hash FROM blockchain ORDER BY id DESC LIMIT 1";
     $conexao = abreConexao();
     $resultado = $conexao->query($result);
     $conexao->close();

    if (mysqli_num_rows($resultado) > 0) {
        
        $row = mysqli_fetch_array($resultado);

        return $row[0];
    }
    else {
        return null;
    }
}


function retornaBlocos(){

    $sql = "SELECT * FROM blockchain";
    $conexao = abreConexao();
    $resultado = $conexao->query($sql);
    $conexao->close();
    // Verificar se a consulta SQL retornou algum registro
    if (mysqli_num_rows($resultado) > 0) {
        // Criar um array a partir dos registros retornados da tabela do BD
        while ($row = mysqli_fetch_array($resultado)){
            $blocos[] = $row;
        }
        return $blocos;
    }
    else {
        return null;
    }
}

function retornaBlocosUsuario($login){

    $sql = "SELECT * FROM blockchain WHERE de = '$login' or para = '$login'";
    $conexao = abreConexao();
    $resultado = $conexao->query($sql);
    $conexao->close();

    // Verificar se a consulta SQL retornou algum registro
    if (mysqli_num_rows($resultado) > 0) {
        // Criar um array a partir dos registros retornados da tabela do BD
        while ($row = mysqli_fetch_array($resultado)){
            $blocos[] = $row;
        }
        return $blocos;
    }
    else {
        return null;
    }
}

?>