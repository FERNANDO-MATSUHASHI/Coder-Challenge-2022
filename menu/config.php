<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'banco_cliente';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conexao->connect_errno)
{
    echo "Erro na conexão com o bando de dados";
}
//else
//{
//    echo "Conexão efetuada com sucesso";
//}

?>