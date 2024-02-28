<?php

require "banco.php";
require "ajudantes.php";

remover_concluidas($conexao);
header('Location:tarefas.php');
die();
