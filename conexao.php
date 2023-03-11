<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "teste";
// conexão com a porta
try{
    $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);
    echo "Conexão com banco de dados realizados com sucesso!";
}
    catch(PDOException $err){
        echo "ERRO: Conexão com banco de dados NÃO realizados com sucesso.
         Erro gerado ". $err -> getMessage();




    }



?>