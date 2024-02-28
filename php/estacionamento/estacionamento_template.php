<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estacionamento</title>
</head>
<body>
    <h1>Estacionamento</h1>

    <fieldset>
        <legend>Cadastro de veiculo</legend>
        <form>
            <label for="placa">
                Placa
                <input type="text" name="placa" id="placa">
            </label>
            <label for="marca">
                Marca
                <input type="text" name="marca" id="marca">
            </label>
            <label for="modelo">
                Modelo
                <input type="text" name="modelo" id="modelo">
            </label>
            <label for="hora_entrada">
                Hora de entrada
                <input type="datetime" name="hora_entrada" id="hora_entrada">
            </label>
            <label for="hora_saida">
                Hora de saida
                <input type="datetime" name="hora_saida" id="hora_saida">
            </label>
            <label>Cadastrar:
                <input type="submit" value="Cadastrar">
            </label>
        </form>
    </fieldset>

    <table>
        <tr>
            <th>ID</th>
            <th>placa</th>
            <th>marca</th>
            <th>modelo</th>
            <th>Hora entrada</th>
            <th>Hora saida</th>
        </tr>
        <?php foreach($listaVeiculos as $veiculo):?>
            <tr>
                <td><?php echo $veiculo['id']; ?></td>
                <td><?php echo $veiculo['placa']; ?></td>
                <td><?php echo $veiculo['marca']; ?></td>
                <td><?php echo $veiculo['modelo'] ?></td>
                <td><?php echo converte_datetime_listar($veiculo['hora_entrada']); ?></td>
                <td><?php echo converte_datetime_listar($veiculo['hora_saida']); ?></td>
            </tr>
        <? endforeach; ?>
    </table>
</body>
</html>