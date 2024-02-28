<?php

$bdServidor = 'meu_mysql_container';
$bdUsuario = 'root';
$dbSenha = 'lerolero411';
$dbBanco = 'contatos';

$conexao = mysqli_connect($bdServidor, $bdUsuario, $dbSenha, $dbBanco);

if(mysqli_connect_errno()){
    echo "Problemas para conectar ao banco";
    echo mysqli_connect_erro();
    die();
}

function buscar_contatos($conexao){

    $query = "SELECT * FROM contatos";

    return mysqli_query($conexao, $query);
}

function inserir_contato($conexao, $contato){

    $nome = $contato['nome'];
    $telefone = $contato['telefone'];
    $email = $contato['email'];
    $descricao = $contato['descricao'];
    $data_nascimento = $contato['nascimento'];
    $favorito = $contato['favorito'];

    $query = "INSERT INTO contatos(nome, telefone, email, descricao, data_nascimento, favorito)
    VALUES('{$nome}', '+{$telefone}', '{$email}','{$descricao}', '{$data_nascimento}',{$favorito})";

    mysqli_query($conexao, $query);


}