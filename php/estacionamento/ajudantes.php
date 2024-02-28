<?php

function converte_datetime($datetime_data){

    $date = DateTime::createFromFormat('d/m/Y H:i:s', $datetime_data);

    return $date->format('Y-m-d H:i:s');
}

function converte_datetime_listar($datetime_data){

    if($datetime_data == ""){
        return "";
    }

    $date = DateTime::createFromFormat('Y-m-d H:i:s', $datetime_data);

    return $date->format('d/m/Y H:i:s');
}