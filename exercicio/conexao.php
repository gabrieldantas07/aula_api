<?php
    $host = 'localhost'; //aonde está a base de dados
    $usuario = 'root'; //quem é o usuário do banco de dados
    $senha = '';
    $banco = 'etecmcm'; //nome do banco

    $conexao = new mysqli($host, $usuario, $senha, $banco);

    if($conexao->connect_error){ 
        die('Falha de conexão: ' . $conexao-> connect_error);
    }
    //else{
    //    echo "CONECTADO COM SUCESSO!";
    // }
?>