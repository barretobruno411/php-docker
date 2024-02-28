<?php

$bdServidor = 'meu_mysql_container';
$bdUsuario = 'root';
$dbSenha = 'lerolero411';
$dbBanco = 'estacionamento';

$conexao = mysqli_connect($bdServidor, $bdUsuario, $dbSenha, $dbBanco);

if(mysqli_connect_errno()){
    echo "Problemas para conectar ao banco";
    echo mysqli_connect_erro();
    die();
}

function listaEstacionamento($conexao){

    $query = "SELECT * FROM veiculos";

    $result = mysqli_query($conexao, $query);

    $listaVeiculos = [];

    while($veiculo = mysqli_fetch_assoc($result)){
        $listaVeiculos[] = $veiculo;
    }

    return $listaVeiculos;

}

function cadastrarVeiculos($conexao, $params){

    $placa = $params['placa'];
    $marca = $params['marca'];
    $modelo = $params['modelo'];
    $hora_entrada = $params['hora_entrada'];
    if($params['hora_saida'] == ""){
        $hora_saida = 'NULL';
    } else {
        $hora_saida = "'{$params['hora_saida']}'";
    }

    $query = "INSERT INTO veiculos(placa, marca, modelo, hora_entrada, hora_saida)
    VALUES('{$placa}', '{$marca}', '{$modelo}','{$hora_entrada}', {$hora_saida})";

    mysqli_query($conexao, $query);

}