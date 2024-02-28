<?php
    session_start();
    require "banco.php";
    require "ajudantes.php";

    $info = [
        'nome' => "",
        'telefone' => "",
        'email' => "",
        'descricao' => "",
        'nascimento' => "",
        'favorito' => 0
    ];

    if(array_key_exists('nome', $_GET)){

        if(array_key_exists('nome', $_GET)){
            $info['nome'] = $_GET['nome'];
        }

        if(array_key_exists('telefone', $_GET)){
            $info['telefone'] = $_GET['telefone'];
        }

        if(array_key_exists('email', $_GET)){
            $info['email'] = $_GET['email'];
        }

        if(array_key_exists('descricao', $_GET)){
            $info['descricao'] = $_GET['descricao'];
        }

        if(array_key_exists('nascimento', $_GET)){
            $info['nascimento'] = $_GET['nascimento'];
        }

        if(array_key_exists('favorito', $_GET)){
            $info['favorito'] = 1;
        }

        //$_SESSION['lista-contatos'][] = $info;

        inserir_contato($conexao, $info);
    }

    $lista_contatos = buscar_contatos($conexao);

    // if(array_key_exists('lista-contatos', $_SESSION)){
    //     $lista_contatos = $_SESSION['lista-contatos'];
    // }

include "contatos_template.php";