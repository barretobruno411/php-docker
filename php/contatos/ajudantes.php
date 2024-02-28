<?php

function formata_data_bd($data){

    $date = DateTime::createFromFormat('d/m/Y', $data);
    return $date->format('Y-m-d');

}

function formata_favorito($favorito){

    if($favorito == 1){
        return 'sim';
    }

    return 'não';
}