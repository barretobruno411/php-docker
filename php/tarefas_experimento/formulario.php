<form>
    <input type="hidden" name="id" value="<?php echo $tarefa['id']; ?>" />
    <fieldset>
        <legend>Nova tarefa</legend>
        <label>
            Tarefa:
            <input type="text" name="nome" value="<?php echo $tarefa['nome']; ?>">
        </label>
        <label>
            Descricão: (Opcional):
            <textarea name="descricao">
                <?php echo $tarefa['descricao']; ?>
            </textarea>
        </label>
        <label>
            Prazo (Opcional):
            <input type="text" name="prazo" value="
            <?php echo traduz_data_para_exibir($tarefa['prazo']); ?>
            ">
        </label>
        <fieldset>
            <legend>Prioridade:</legend>
            <input type="radio" name="prioridade" value="1"
            <?php echo ($tarefa['prioridade'] == 1) ? 'checked' : ''; ?>
            />
            Baixa
            <input type="radio" name="prioridade" value="2"
            <?php echo ($tarefa['prioridade'] == 2) ? 'checked' : ''; ?>
            />
            Media
            <input type="radio" name="prioridade" value="3" 
            <?php echo ($tarefa['prioridade'] == 3) ? 'checked' : ''; ?>
            />
            Alta
        </fieldset>
        <label>
            Tarefa concluida:
            <input type="checkbox" name="concluida" value="1"
            <?php ($tarefa['concluida'] == true) ? 'checked' : ''; ?>
            />
        </label>
        <?php if ($tarefa['id'] > 0) : ?>
            <a href="tarefas.php">Cancelar</a>
        <?php endif; ?>
        <input type="submit" value="
        <?php echo ($tarefa['id'] > 0) ?
        'Atualizar' :
        'Cadastrar'; ?>"
        />
        <a href="deletar.php">limpar</a>
    </fieldset>
</form>