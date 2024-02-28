<?php

$pessoa = [
    'nome' => 'Bruno',
    'idade' => 31,
    'estado_civil' => 'casado'
];

if($pessoa['idade'] > 18) {
    echo "{$pessoa['nome']} é maior de idade!";
}