<?php

session_start();
require "banco.php";
require "ajudantes.php";

$exibir_tabela = true;

if(array_key_exists('nome', $_GET) && $_GET['nome'] != ""){
    $tarefa = [
        'nome' => $_GET['nome'],
        'descricao' => "",
        'prazo' => "",
        'prioridade' => $_GET['prioridade'],
        'concluida' => 0

    ];

    if(array_key_exists('descricao', $_GET)){
        $tarefa['descricao'] = $_GET['descricao'];

    }

    if(array_key_exists('prazo', $_GET)){
        $tarefa['prazo'] = traduz_data_para_banco($_GET['prazo']);
    }

    if(array_key_exists('concluida', $_GET)){
        $tarefa['concluida'] = 1;
    }

    gravar_tarefa($conexao, $tarefa);
    header('Location: tarefas.php');
    die();
}

$lista_tarefas = buscar_tarefas($conexao);

$tarefa = [
    'id' => 0,
    'nome' => '',
    'descricao' => '',
    'prazo' => '',
    'prioridade' => 1,
    'concluida' => ''
];

require "template.php";