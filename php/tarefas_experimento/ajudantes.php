<?php

function traduz_prioridade($codigo){
    $prioridade = "";

    switch($codigo){
        case 1:
            $prioridade = 'Baixa';
            break;
        case 2:
            $prioridade = 'Média';
            break;
        case 3:
            $prioridade = 'Alta';
            break;
    }

    return $prioridade;
}

function traduz_data_para_banco($data)
{
    if ($data == ""){
        return "";
    }

    $date = DateTime::createFromFormat('d/m/Y', $data);
    return $date->format('Y-m-d');
}

function traduz_data_para_exibir($data)
{
    if($data == "" OR $data == "0000-00-00"){
        return "";
    }

    $dados = DateTime::createFromFormat('Y-m-d', $data);
    return $dados->format('d/m/Y');
}

function traduz_concluida($concluida){
    if($concluida == 1){
        return 'Sim';
    }

    return 'Não';
}