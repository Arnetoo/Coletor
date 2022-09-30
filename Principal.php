<?php
$dbHost = 'bd-pricing.mysql.uhserver.com'
$dbUsername ='arneto'
$dbPassword ='5232@Arigi'
$dbName='db_pricing'

    $conexao =new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if ($conexao->connect_errno)
    {
        echo "erro";
    }
    else
    {
        echo "Conexão"
    }
?>