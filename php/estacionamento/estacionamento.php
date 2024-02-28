<?php

require "banco.php";
require "ajudantes.php";

print_r($_GET);

$veiculo = [];

if($_GET['placa'] != ""){
    $veiculo = [
        'placa' => $_GET['placa'],
        'marca' => $_GET['marca'],
        'modelo' => $_GET['modelo'],
        'hora_entrada' => converte_datetime($_GET['hora_entrada']),
        'hora_saida' => NULL,
    ];

}

cadastrarVeiculos($conexao, $veiculo);

$listaVeiculos = listaEstacionamento($conexao);

require "estacionamento_template.php";