<?php
// Configurações do BD
// Declaração de constantes em PHP
define("SERVIDOR", "localhost");
define('USUARIO', 'root');
define("SENHA", '');
define('BANCO', 'blockchain');

// Função que retorna a conexão com o BD
function abreConexao(){
    try{
        // Instanciar um objeto da classe 'mysqli' para conectar com o BD
        $con = new mysqli(SERVIDOR, USUARIO, SENHA, BANCO);
        // Retornar o objeto (conexão com o BD)
        return $con;
        //return "Ok";
    } catch(Exception $erro){
        return "Erro: ". $e->getMessage(); 
    }
}
?>