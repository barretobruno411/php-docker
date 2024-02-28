<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Tarefas</title>
</head>
<body>
    <h1>Gerenciador de tarefas</h1>
    <?php require 'formulario.php'; ?>

    <?php if($exibir_tabela): ?>
        <?php require 'tabela.php'; ?>
    <?php endif; ?>
</body>
</html>