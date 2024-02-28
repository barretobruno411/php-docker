<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Contatos</title>
</head>
<body>
    <h1>Gerenciador de Contatos</h1>
    <form>
        <fieldset>
            <legend>Novo contato</legend>
            <label for="nome">
                Nome:
                <input type="text" name="nome">
            </label>
            <br>
            <label for="telefone">Telefone:
                <input type="tel" name="telefone">
            </label>
            <br>
            <label for="email">Email:
                <input type="email" name="email">
            </label>
            <br>
            <label for="descricao">
                Descricao
                <textarea name="descricao" id="descricao"></textarea>
            </label>
            <label for="nascimento">
                Data de nascimento
                <input type="date" name="nascimento" id="nascimento">
            </label>
            <label for="favorito">
                favorito
                <input type="checkbox" name="favorito" value="1" >
            </label>
            <input type="submit" value="Cadastrar">
        </fieldset>
    </form>
    <table>
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>email</th>
            <th>descricao</th>
            <th>nascimento</th>
            <th>favorito</th>
        </tr>
        <?php foreach($lista_contatos as $contato) : ?>
            <tr>
                <td><?php echo $contato['nome']; ?></td>
                <td><?php echo $contato['telefone']; ?></td>
                <td><?php echo $contato['email']; ?></td>
                <td><?php echo $contato['descricao']; ?></td>
                <td><?php echo $contato['data_nascimento']; ?></td>
                <td><?php echo formata_favorito($contato['favorito']); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>