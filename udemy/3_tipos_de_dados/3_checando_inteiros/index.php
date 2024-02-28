<?php

    $a = 20;

    echo is_int("fff");

    echo true;

    if(is_int(5)){
        echo "É um inteiro!";
    }

    if(is_int("não é um inteiro!")){
        echo "Não é um inteiro!";
    }

    if(is_int($a)){
        echo "É um inteiro";
    }